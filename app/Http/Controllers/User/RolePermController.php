<?php
/**
 * Created by AutoMaker from drc/tools.
 * User: yfdrc
 * Date: 2020-11-06
 * Time: 03:50
 */

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Facades\Cache;

    /**
    * Create a new controller instance.
    *
    * @return void
    */
class RolePermController extends Controller
{
    protected $urltoparent;
    protected $urltoview;

    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->urltoparent = url("User\RolePerm");
        $this->urltoview = "User.RolePerm";
    }

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        if (auth()->check() and auth()->user()->can("index", new Role)) {
            $roleid = auth()->user()->getRolesRight();
            $tasks = Role::where("Right", "<=", $roleid)->get();
            return view($this->urltoview . ".index", ["roleid" => $roleid ,"tasks" => $tasks ]);
        }
    }

    /**
    * Display the specified resource.
    *
    * @param  int $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        if (auth()->check() and auth()->user()->can("show", new Role)) {
            $model = Role::findOrFail($id);
            return view($this->urltoview . ".show", ["task" => $model]);
        }
        return redirect($this->urltoparent)->withErrors([".你没有详情权限。."]);
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
        if (auth()->check() and auth()->user()->can("admin", new Role)) {
            $model = Role::findOrFail($id);
            $permissions = drc_selectAll("permissions", "label");
            $haspermissions = drc_selectAll("permission_role", "permission_id", "role_id", $id,"=","permission_id");
            return view($this->urltoview . ".edit", ["task" => $model, "permissions" => $permissions ,"haspermissions" => $haspermissions ]);
        }
        return redirect($this->urltoparent)->withErrors([".你没有编辑权限。."]);
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request $request
    * @param  int $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
        if (auth()->check() and auth()->user()->can("admin", new Role)) {
            $inputs = $request->get("permission_id");
            $model = Role::findOrFail($id);
            $model->permissions()->detach();
            $model->permissions()->attach($inputs);
            return redirect($this->urltoparent);
        }
        return redirect($this->urltoparent)->withErrors([".你没有编辑权限。."]);
    }

}

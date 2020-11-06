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
class RoleController extends Controller
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
        $this->urltoparent = url("User\Role");
        $this->urltoview = "User.Role";
    }

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        if (auth()->check() and auth()->user()->can("index", new Role)) {
            $models = Role::get();
            return view($this->urltoview . ".index", ["tasks" => $models]);
        }
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        if (auth()->check() and auth()->user()->can("admin", new Role)) {
            return view($this->urltoview . ".create");
        }
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        if (auth()->check() and auth()->user()->can("admin", new Role)) {
            $this->validate($request, ["name" => "required|unique:roles","label" => "required|unique:roles"]);
            $input = $request->all();
            Role::create($input);
            return redirect($this->urltoparent);
        }
        return redirect($this->urltoparent)->withErrors([".你没有新建权限。."]);
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
            return view($this->urltoview . ".edit", ["task" => $model]);
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
            $this->validate($request, ["name" => "required","label" => "required"]);
            $model = Role::findOrFail($id);
            $input = $request->all();
            $model->fill($input)->save();
            return redirect($this->urltoparent);
        }
        return redirect($this->urltoparent)->withErrors([".你没有编辑权限。."]);
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        if (auth()->check() and auth()->user()->can("admin", new Role)) {
            $model = Role::findOrFail($id);
            $model->delete();
            return redirect($this->urltoparent);
        }
        return redirect($this->urltoparent)->withErrors([".你没有删除权限。."]);
    }
}

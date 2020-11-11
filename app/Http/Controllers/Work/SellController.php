<?php
/**
 * Created by AutoMaker from drc/tools.
 * User: yfdrc
 * Date: 2020-11-11
 * Time: 00:55
 */

namespace App\Http\Controllers\Work;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Sell;
use Illuminate\Support\Facades\Cache;
use App\Models\Good;

    /**
    * Create a new controller instance.
    *
    * @return void
    */
class SellController extends Controller
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
        $this->urltoparent = url("Work\Sell");
        $this->urltoview = "Work.Sell";
    }

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(Request $request)
    {
        if (auth()->check() and auth()->user()->can("index", new Role)) {
            $cachename = "sellcx";
            $cachevalue = "sellhs";
            if(!$request->exists("xshs")){
                $cxnr = Cache::get($cachename);
                $xshs = Cache::get($cachevalue);
                if (!is_numeric($xshs) || $xshs < 1) { $xshs = 10; Cache::forever($cachevalue, $xshs); }
            }else {
                $cxnr = $request["cxnr"];
                Cache::forever($cachename, $cxnr);
                $xshs = $request["xshs"];
                if (!is_numeric($xshs) || $xshs < 1) { $xshs = 10; }
                Cache::forever($cachevalue, $xshs);
            }
            $cxtj = '%' . $cxnr . '%';
            $models = Sell::where('name', 'like', $cxtj)->paginate($xshs);
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
        if (auth()->check() and auth()->user()->can("index", new Role)) {
            $tasks = drc_selectAll("cats");
            $custs = drc_selectAll("customers");
            return view($this->urltoview . ".create", ["tasks" => $tasks ,"custs" => $custs ]);
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
        if (auth()->check() and auth()->user()->can("index", new Role)) {
            $input = $request->except("cat_id");
            $input["name"] = Good::find($request["good_id"])->name;
            $input["money"] = ((int)(((int)($input["price"]*100) * (int)($input["amount"]*100))/100))/100.0;
            Sell::create($input);
            Cache::forever("buy_catid", $request["cat_id"]);
            Cache::forever("buy_goodid", $request["good_id"]);
            Cache::forever("buy_customerid", $request["customer_id"]);
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
        if (auth()->check() and auth()->user()->can("index", new Role)) {
            $model = Sell::findOrFail($id);
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
        if (auth()->check() and auth()->user()->can("index", new Role)) {
            $model = Sell::findOrFail($id);
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
        if (auth()->check() and auth()->user()->can("index", new Role)) {
            $model = Sell::findOrFail($id);
            $input = $request->all();
            $input["money"] = ((int)(((int)($input["price"]*100) * (int)($input["amount"]*100))/100))/100.0;
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
            $model = Sell::findOrFail($id);
            $model->delete();
            return redirect($this->urltoparent);
        }
        return redirect($this->urltoparent)->withErrors([".你没有删除权限。."]);
    }
}

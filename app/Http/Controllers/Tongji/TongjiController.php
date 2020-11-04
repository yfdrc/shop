<?php
/**
 * Created by AutoMaker from drc/tools.
 * User: yfdrc
 * Date: 2020-11-03
 * Time: 01:25
 */

namespace App\Http\Controllers\Tongji;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Buy;
use App\Models\Sell;
use Illuminate\Support\Facades\Cache;

    /**
    * Create a new controller instance.
    *
    * @return void
    */
class TongjiController extends Controller
{

    public function buy(Request $request)
    {
        if (auth()->check() and auth()->user()->can("index", new Role)) {
            $cachename1 = "buydatestart";
            $cachename2 = "buydateend";
            $cachename = "buytjcx";
            $cachevalue = "buytjhs";
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
            if(!$request->exists("datestart") or !$request->exists("dateend")){
                $datestart = Cache::get($cachename1);
                $dateend = Cache::get($cachename2);
                if($datestart==null or $dateend==null){
                    $datestart = Carbon::today()->toDateString();
                    Cache::forever($cachename1, $datestart);
                    $dateend = Carbon::today()->toDateString();
                    Cache::forever($cachename2, $dateend);
                }
            }else {
                $datestart = $request["datestart"];
                Cache::forever($cachename1, $datestart);
                $dateend = $request["dateend"];
                Cache::forever($cachename2, $dateend);
            }
            $cxtj = '%' . $cxnr . '%';
            $models = Buy::where('date', '>=', $datestart)->where('date', '<=', $dateend)->where('name', 'like', $cxtj)->selectRaw('SUM(money) as money,SUM(amount) as amount, name as name')
                ->groupBy('name')->paginate($xshs);
            return view( "Tongji.buy", ["tasks" => $models]);
        }
    }


    public function sell(Request $request)
    {
        if (auth()->check() and auth()->user()->can("index", new Role)) {
            $cachename1 = "selldatestart";
            $cachename2 = "selldateend";
            $cachename = "selltjcx";
            $cachevalue = "selltjhs";
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
            if(!$request->exists("datestart") or !$request->exists("dateend")){
                $datestart = Cache::get($cachename1);
                $dateend = Cache::get($cachename2);
                if($datestart==null or $dateend==null){
                    $datestart = Carbon::today()->toDateString();
                    Cache::forever($cachename1, $datestart);
                    $dateend = Carbon::today()->toDateString();
                    Cache::forever($cachename2, $dateend);
                }
            }else {
                $datestart = $request["datestart"];
                Cache::forever($cachename1, $datestart);
                $dateend = $request["dateend"];
                Cache::forever($cachename2, $dateend);
            }
            $cxtj = '%' . $cxnr . '%';
            $models = Sell::where('date', '>=', $datestart)->where('date', '<=', $dateend)->where('name', 'like', $cxtj)->selectRaw('SUM(money) as money,SUM(amount) as amount, name as name')
                ->groupBy('name')->paginate($xshs);
            return view( "Tongji.sell", ["tasks" => $models]);
        }
    }

    public function index(Request $request)
    {
        if (auth()->check() and auth()->user()->can("index", new Role)) {
            $cachename1 = "tjdatestart";
            $cachename2 = "tjdateend";
            $cachename = "tjcx";
            $cachevalue = "tjhs";
            if (!$request->exists("xshs")) {
                $cxnr = Cache::get($cachename);
                $xshs = Cache::get($cachevalue);
                if (!is_numeric($xshs) || $xshs < 1) {
                    $xshs = 10;
                    Cache::forever($cachevalue, $xshs);
                }
            } else {
                $btn = $request["btn"];
                switch ($btn){
                    case "今天":
                        $request["datestart"] = Carbon::today()->toDateString();
                        $request["dateend"] = Carbon::today()->toDateString();
                        break;
                    case "本月":
                        $request["datestart"] =  Carbon::today()->addDays(1- Carbon::today()->day)->toDateString();
                        $request["dateend"] = Carbon::today()->toDateString();
                        break;
                    case "今年":
                        $request["datestart"] = Carbon::create(Carbon::today()->year,1,1)->toDateString();
                        $request["dateend"] = Carbon::today()->toDateString();
                        break;
                    case "上月":
                        $rq = Carbon::today()->addDays(1- Carbon::today()->day);
                        $request["dateend"] = $rq->addDays(-1)->toDateString();
                        $request["datestart"] = $rq -> addMonths(-1)->toDateString();
                        break;
                }
                $cxnr = $request["cxnr"];
                Cache::forever($cachename, $cxnr);
                $xshs = $request["xshs"];
                if (!is_numeric($xshs) || $xshs < 1) {
                    $xshs = 10;
                }
                Cache::forever($cachevalue, $xshs);
            }
            if (!$request->exists("datestart") or !$request->exists("dateend")) {
                $datestart = Cache::get($cachename1);
                $dateend = Cache::get($cachename2);
                if ($datestart == null or $dateend == null) {
                    $datestart = Carbon::today()->toDateString();
                    Cache::forever($cachename1, $datestart);
                    $dateend = Carbon::today()->toDateString();
                    Cache::forever($cachename2, $dateend);
                }
            } else {
                $datestart = $request["datestart"];
                Cache::forever($cachename1, $datestart);
                $dateend = $request["dateend"];
                Cache::forever($cachename2, $dateend);
            }
            $cxtj = '%' . $cxnr . '%';
            $buys = Buy::where('date', '>=', $datestart)->where('date', '<=', $dateend)->where('name', 'like', $cxtj)
                ->selectRaw('SUM(money) as money,SUM(amount) as amount, name as name')
                ->groupBy('name')->paginate($xshs);
            $sells = Sell::where('date', '>=', $datestart)->where('date', '<=', $dateend)->where('name', 'like', $cxtj)->selectRaw('SUM(money) as money,SUM(amount) as amount, name as name')
                ->groupBy('name')->get();
            foreach ($buys as $buy) {
                foreach ($sells as $sell) {
                    if ($sell["name"] == $buy["name"]) {
                        $buy["smoney"] = $sell["money"];
                        $buy["samount"] = $sell["amount"];
                        break;
                    }
                }
            }
            return view("Tongji.index", ["tasks" => $buys]);
        }
    }

}

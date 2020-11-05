<?php

namespace App\Http\Controllers\Install;

use Drc\AutoMaker\Form\InputCs;
use Illuminate\Routing\Controller as BaseController;
use Drc\AutoMaker\MakeForm;
use Drc\AutoMaker\MakeControl;

class ShopController extends BaseController
{
    public function cust()
    {
        //all
        $pz["pageflag"] = true;
        $pz["cxflag"] = true;
        $pz["cxholder"] = "名称";
        $pz["cxkeyname"] = "name";
        $pz["cxnrname"] = "custcx";
        $pz["cxhsname"] = "cusths";
        $pz["namespace"] = "Setup";
        $pz["classname"] = "Customer";
        $pz["showcreate"] = true;
        $pz["showdelete"] = true;
        $pz["qxflag"] = true;
        $pz["qxindex"] = "index";
        $pz["qxcreate"] = "manage";
        $pz["qxshow"] = "show";
        $pz["qxedit"] = "manage";
        $pz["qxdelete"] = "admin";
        $pz["belongto"] = [];

        //controll
        $pz["usearray"] = ["Illuminate\Support\Facades\Cache"];
        $pz["vaildcreate"] = "[\"name\" => \"required\"]";
        $pz["vaildedit"] = "[\"name\" => \"required\"]";
        $pz["selectcreate"] = [];
        $pz["ignoreupdate"] = "";
        $pz["OverrideClassname"] = "";
        $pz["Overrideindex"] = [];
        $pz["Overrideedit"] = [];
        $pz["Overrideupdate"] = [];

        //form
        $pz["layout"] = "layouts.app";
        $pz["section"] = "content";
        $pz["title"] = "长期客户";
        $pz["shortcutflag"] = true;
        $pz["shortcut"] = "shortcut02";
        $pz["index"] = ["name" => ["名称","15%"], "description" => ["描述","25%"], "address" => ["地址","25%"], "telephone" => ["电话","15%"]];
        $pz["show"] = ["name" => "名称", "description" => "描述", "address" => "地址", "telephone" => "电话"];
        $pz["create"] = [];
        $pz["edit"] = [];
        $pz["bixu"] = ["name" => "名称"];
        $pz["qita"] = ["description" => ["描述",InputCs::Textarea], "address" => "地址", "telephone" => "电话"];

        echo "make cust start ...<br>";
        MakeForm::Create($pz);
        MakeControl::Create($pz);
        echo "make cust end<br>";

        return view("home.index");
    }

    public function supp()
    {
        //all
        $pz["pageflag"] = true;
        $pz["cxflag"] = true;
        $pz["cxholder"] = "名称";
        $pz["cxkeyname"] = "name";
        $pz["cxnrname"] = "suppcx";
        $pz["cxhsname"] = "supphs";
        $pz["namespace"] = "Setup";
        $pz["classname"] = "Supplier";
        $pz["showcreate"] = true;
        $pz["showdelete"] = true;
        $pz["qxflag"] = true;
        $pz["qxindex"] = "index";
        $pz["qxcreate"] = "manage";
        $pz["qxshow"] = "show";
        $pz["qxedit"] = "manage";
        $pz["qxdelete"] = "admin";
        $pz["belongto"] = [];

        //controll
        $pz["usearray"] = ["Illuminate\Support\Facades\Cache"];
        $pz["vaildcreate"] = "[\"name\" => \"required\"]";
        $pz["vaildedit"] = "[\"name\" => \"required\"]";
        $pz["selectcreate"] = [];
        $pz["ignoreupdate"] = "";
        $pz["OverrideClassname"] = "";
        $pz["Overrideindex"] = [];
        $pz["Overrideedit"] = [];
        $pz["Overrideupdate"] = [];

        //form
        $pz["layout"] = "layouts.app";
        $pz["section"] = "content";
        $pz["title"] = "主供货商";
        $pz["shortcutflag"] = true;
        $pz["shortcut"] = "shortcut02";
        $pz["index"] = ["name" => ["名称","15%"], "description" => ["描述","25%"], "address" => ["地址","25%"], "telephone" => ["电话","15%"]];
        $pz["show"] = ["name" => "名称", "description" => "描述", "address" => "地址", "telephone" => "电话"];
        $pz["create"] = [];
        $pz["edit"] = [];
        $pz["bixu"] = ["name" => "名称"];
        $pz["qita"] = ["description" => ["描述",InputCs::Textarea], "address" => "地址", "telephone" => "电话"];

        echo "make supp start ...<br>";
        MakeForm::Create($pz);
        MakeControl::Create($pz);
        echo "make supp end<br>";

        return view("home.index");
    }

    public function cat()
    {
        //all
        $pz["pageflag"] = true;
        $pz["cxflag"] = true;
        $pz["cxholder"] = "分类名称";
        $pz["cxkeyname"] = "name";
        $pz["cxnrname"] = "catcx";
        $pz["cxhsname"] = "caths";
        $pz["namespace"] = "Setup";
        $pz["classname"] = "Cat";
        $pz["showcreate"] = true;
        $pz["showdelete"] = true;
        $pz["qxflag"] = true;
        $pz["qxindex"] = "index";
        $pz["qxcreate"] = "manage";
        $pz["qxshow"] = "show";
        $pz["qxedit"] = "manage";
        $pz["qxdelete"] = "admin";
        $pz["belongto"] = [];

        //controll
        $pz["usearray"] = ["Illuminate\Support\Facades\Cache"];
        $pz["vaildcreate"] = "[\"name\" => \"required\"]";
        $pz["vaildedit"] = "[\"name\" => \"required\"]";
        $pz["selectcreate"] = [];
        $pz["ignoreupdate"] = "";
        $pz["OverrideClassname"] = "";
        $pz["Overrideindex"] = [];
        $pz["Overrideedit"] = [];
        $pz["Overrideupdate"] = [];

        //form
        $pz["layout"] = "layouts.app";
        $pz["section"] = "content";
        $pz["title"] = "商品分类";
        $pz["shortcutflag"] = true;
        $pz["shortcut"] = "shortcut02";
        $pz["index"] = ["name" => ["名称","20%"], "description" => ["描述","60%"]];
        $pz["show"] = ["name" => "名称", "description" => "描述"];
        $pz["create"] = [];
        $pz["edit"] = [];
        $pz["bixu"] = ["name" => "名称"];
        $pz["qita"] = ["description" => ["描述",InputCs::Textarea]];

        echo "make cat start ...<br>";
        MakeForm::Create($pz);
        MakeControl::Create($pz);
        echo "make cat end<br>";

        return view("home.index");
    }

    public function good()
    {
        //all
        $pz["pageflag"] = true;
        $pz["cxflag"] = true;
        $pz["cxholder"] = "商品名称";
        $pz["cxkeyname"] = "name";
        $pz["cxnrname"] = "goodcx";
        $pz["cxhsname"] = "goodhs";
        $pz["namespace"] = "Setup";
        $pz["classname"] = "Good";
        $pz["showcreate"] = true;
        $pz["showdelete"] = true;
        $pz["qxflag"] = true;
        $pz["qxindex"] = "index";
        $pz["qxcreate"] = "manage";
        $pz["qxshow"] = "show";
        $pz["qxedit"] = "manage";
        $pz["qxdelete"] = "admin";
        $pz["belongto"] = [];

        //controll
        $pz["usearray"] = ["Illuminate\Support\Facades\Cache"];
        $pz["vaildcreate"] = "[\"name\" => \"required\"]";
        $pz["vaildedit"] = "[\"name\" => \"required\"]";
        $pz["selectcreate"] = [];
        $pz["ignoreupdate"] = "";
        $pz["OverrideClassname"] = "";
        $pz["Overrideindex"] = [];
        $pz["Overrideedit"] = [];
        $pz["Overrideupdate"] = [];

        //form
        $pz["layout"] = "layouts.app";
        $pz["section"] = "content";
        $pz["title"] = "商品信息";
        $pz["shortcutflag"] = true;
        $pz["shortcut"] = "shortcut02";
        $pz["index"] = ["name" => ["名称","20%"], "from" => ["产地","10%"], "buy" => ["进货价","10%"], "sell" => ["出货价","10%"], "howlong" => ["保质期","10%"]];
        $pz["show"] = ["name" => "名称", "description" => "描述"];
        $pz["create"] = [];
        $pz["edit"] = [];
        $pz["bixu"] = ["name" => "名称"];
        $pz["qita"] = ["description" => ["描述",InputCs::Textarea]];

        echo "make good start ...<br>";
        MakeForm::Create($pz);
        MakeControl::Create($pz);
        echo "make good end<br>";

        return view("home.index");
    }

    public function buy()
    {
        //all
        $pz["pageflag"] = true;
        $pz["cxflag"] = true;
        $pz["cxholder"] = "商品名称";
        $pz["cxkeyname"] = "name";
        $pz["cxnrname"] = "buycx";
        $pz["cxhsname"] = "buyhs";
        $pz["namespace"] = "Work";
        $pz["classname"] = "Buy";
        $pz["showcreate"] = true;
        $pz["showdelete"] = true;
        $pz["qxflag"] = true;
        $pz["qxindex"] = "index";
        $pz["qxcreate"] = "index";
        $pz["qxshow"] = "index";
        $pz["qxedit"] = "index";
        $pz["qxdelete"] = "admin";
        $pz["belongto"] = [];

        //controll
        $pz["usearray"] = ["Illuminate\Support\Facades\Cache","App\Models\Good"];
        $pz["vaildcreate"] = "[]";
        $pz["vaildedit"] = "[]";
        $pz["selectcreate"] = ["tasks" => "drc_selectAll(\"goods\")","supps" => "drc_selectAll(\"suppliers\")"];
        $pz["ignoreupdate"] = "";
        $pz["OverrideClassname"] = "";
        $pz["Overrideindex"] = [];
        $pz["Overrideedit"] = [];
        $pz["Overrideupdate"] = [];

        //form
        $pz["layout"] = "layouts.app";
        $pz["section"] = "content";
        $pz["title"] = "买入商品";
        $pz["shortcutflag"] = true;
        $pz["shortcut"] = "shortcut03";
        $pz["index"] = ["good->name" => ["名称","20%"],"supplier->name" => ["供货商","15%"], "price" => ["价格","10%"], "amount" => ["数量","10%"], "money" => ["金额","10%"], "date" => ["日期","10%"], "who" => ["经手人","10%"]];
        $pz["show"] = ["name" => "名称","supplier->name" => "供货商","money" => "金额"];
        $pz["create"] = ["good_id" => ["名称","tasks",InputCs::Select,true],"supplier_id" => ["供货商","supps",InputCs::Select,true]];
        $pz["edit"] = ["good_id" => ["名称","\$task->good->name",InputCs::Text,true],"supplier_id" => ["供货商","\$task->supplier->name",InputCs::Text,true]];
        $pz["bixu"] = ["price" => "价格", "amount" => "数量", "date" => "日期", "who" => "经手人"];
        $pz["qita"] = [];

        echo "make buy start ...<br>";
        MakeForm::Create($pz);
        MakeControl::Create($pz);
        echo "make buy end<br>";

        return view("home.index");
    }

    public function sell()
    {
        //all
        $pz["pageflag"] = true;
        $pz["cxflag"] = true;
        $pz["cxholder"] = "商品名称";
        $pz["cxkeyname"] = "name";
        $pz["cxnrname"] = "sellcx";
        $pz["cxhsname"] = "sellhs";
        $pz["namespace"] = "Work";
        $pz["classname"] = "Sell";
        $pz["showcreate"] = true;
        $pz["showdelete"] = true;
        $pz["qxflag"] = true;
        $pz["qxindex"] = "index";
        $pz["qxcreate"] = "index";
        $pz["qxshow"] = "index";
        $pz["qxedit"] = "index";
        $pz["qxdelete"] = "admin";
        $pz["belongto"] = [];

        //controll
        $pz["usearray"] = ["Illuminate\Support\Facades\Cache","App\Models\Good"];
        $pz["vaildcreate"] = "[]";
        $pz["vaildedit"] = "[]";
        $pz["selectcreate"] = ["tasks" => "drc_selectAll(\"goods\")","custs" => "drc_selectAll(\"customers\")"];
        $pz["ignoreupdate"] = "";
        $pz["OverrideClassname"] = "";
        $pz["Overrideindex"] = [];
        $pz["Overrideedit"] = [];
        $pz["Overrideupdate"] = [];

        //form
        $pz["layout"] = "layouts.app";
        $pz["section"] = "content";
        $pz["title"] = "卖出商品";
        $pz["shortcutflag"] = true;
        $pz["shortcut"] = "shortcut03";
        $pz["index"] = ["good->name" => ["名称",InputCs::Text,"20%"],"customer->name" => ["客户",InputCs::Text,"15%"], "price" => ["价格",InputCs::Text,"10%"], "amount" => ["数量",InputCs::Text,"10%"], "money" => ["金额",InputCs::Text,"10%"], "date" => ["日期",InputCs::Date,"10%"], "who" => ["经手人",InputCs::Text,"10%"]];
        $pz["show"] = ["name" => "名称","customer->name" => "客户","money" => "金额"];
        $pz["create"] = ["good_id" => ["名称",InputCs::Select,"tasks"],"customer_id" => ["客户",InputCs::Select,"custs"]];
        $pz["edit"] = ["good_id" => ["名称",InputCs::TextRead,"good->name"],"customer_id" => ["客户",InputCs::TextRead,"customer->name"]];
        $pz["bixu"] = ["price" => "价格", "amount" => "数量", "date" => ["日期",InputCs::Date], "who" => "经手人"];
        $pz["qita"] = [];
        //pz["index"]   0=>名称 1=>输入方式 2=>宽度
        //pz["show"]    0=>名称 1=>输入方式
        //pz["create"]  0=>名称 1=>输入方式 2=>公式value
        //pz["edit"]    0=>名称 1=>输入方式 2=>公式value
        //pz["bixu"]    0=>名称 1=>输入方式
        //pz["qita"]    0=>名称 1=>输入方式

        echo "make buy start ...<br>";
        MakeForm::Create($pz);
        MakeControl::Create($pz);
        echo "make buy end<br>";

        return view("home.index");    }

    public function Tongji()
    {
        //all
        $pz["pageflag"] = true;
        $pz["cxflag"] = true;
        $pz["cxholder"] = "购买商品统计";
        $pz["cxkeyname"] = "name";
        $pz["cxnrname"] = "tjbuycx";
        $pz["cxhsname"] = "tjbuyhs";
        $pz["namespace"] = "Tongji";
        $pz["classname"] = "Buy";
        $pz["showcreate"] = true;
        $pz["showdelete"] = true;
        $pz["qxflag"] = true;
        $pz["qxindex"] = "index";
        $pz["qxcreate"] = "index";
        $pz["qxshow"] = "index";
        $pz["qxedit"] = "index";
        $pz["qxdelete"] = "admin";
        $pz["belongto"] = [];

        //controll
        $pz["usearray"] = ["Illuminate\Support\Facades\Cache"];
        $pz["vaildcreate"] = "[]";
        $pz["vaildedit"] = "[]";
        $pz["selectcreate"] = [];
        $pz["ignoreupdate"] = "";
        $pz["OverrideClassname"] = "";
        $pz["Overrideindex"] = [];
        $pz["Overrideedit"] = [];
        $pz["Overrideupdate"] = [];

        //form
        $pz["layout"] = "layouts.app";
        $pz["section"] = "content";
        $pz["title"] = "购买商品统计";
        $pz["shortcutflag"] = true;
        $pz["shortcut"] = "shortcut04";
        $pz["index"] = ["good->name" => ["名称","20%"], "money" => ["金额","10%"], "price" => ["均价","10%"], "amount" => ["总量","10%"], "datestart" => ["开始日期","10%"], "dateend" => ["结束日期","10%"]];
        $pz["show"] = [];
        $pz["create"] = [];
        $pz["edit"] = [];
        $pz["bixu"] = [];
        $pz["qita"] = [];

        echo "make tjbuy start ...<br>";
        MakeForm::Create($pz);
        MakeControl::Create($pz);
        echo "make tjbuy end<br>";

        return view("home.index");
    }

}

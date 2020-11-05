<?php

namespace App\Http\Controllers\Install;

use App\Libs\DrcDB;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class TestController extends BaseController
{
    //pz["index"]   0=>名称 1=>输入方式 2=>宽度
    //pz["create"]  0=>名称 1=>输入方式 2=>公式value
    //pz["edit"]    0=>名称 1=>输入方式 2=>公式value
    //pz["show"]    0=>名称 1=>输入方式
    //pz["bixu"]    0=>名称 1=>输入方式
    //pz["qita"]    0=>名称 1=>输入方式
   public function index()
    {
        echo "start test ...<br>";

        echo "finish test ...<br>";
    }
}

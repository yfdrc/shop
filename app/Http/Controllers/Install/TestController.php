<?php

namespace App\Http\Controllers\Install;

use App\Libs\DrcDB;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class TestController extends BaseController
{
    public function index()
    {
        echo "start test ...<br>";

        echo "finish test ...<br>";
    }
}

<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use DrcTools;

class HomeController extends Controller
{
    public function index()
    {
        //DrcTools::exportmigrateseed();
        return view('home.index');
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function about()
    {
        return view('home.about');
    }
}

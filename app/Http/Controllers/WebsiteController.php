<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{


    public function index()
    {
        $title = "KarnaCab - Bharat Moves On KarnaCab!";
        return view('website.index',compact('title'));
    }

    public function about_us(){
        $title = "About Us";
        return view('website.about',compact('title'));
    }

}

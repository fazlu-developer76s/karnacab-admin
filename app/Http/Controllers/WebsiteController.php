<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{


    public function index()
    {
        $title = "KarnaCab - Bharat Moves On KarnaCab!";
        return view('website.index', compact('title'));
    }

    public function about_us()
    {
        $title = "About Us";
        return view('website.about', compact('title'));
    }

    public function blogs()
    {
        $title = "Blog";
        return view('website.blog', compact('title'));
    }

    public function blog_detail()
    {
        $title = "Blog Detail ";
        return view('website.blog_detail', compact('title'));
    }

    public function captain_terms_auto()
    {
        $title = "Captain Terms & Condition Auto";
        return view('website.captain_terms_auto', compact('title'));
    }

    public function captain_terms_bike()
    {
        $title = "Captain Terms & Bike";
        return view('website.captain_terms_bike', compact('title'));
    }
    public function career()
    {
        $title = "Career";
        return view('website.career', compact('title'));
    }
    public function contact()
    {
        $title = "Contact Us";
        return view('website.contact', compact('title'));
    }
    public function corporate_affairs()
    {
        $title = "Corporate Affairs";
        return view('website.corporate_affairs', compact('title'));
    }
    public function privacy_policy()
    {
        $title = "Corporate Affairs";
        return view('website.privacy_policy', compact('title'));
    }

    public function customer_terms_bike()
    {
        $title = "Customer Terms & Condition Bike";
        return view('website.customer_terms_bike', compact('title'));
    }
    public function customer_terms_auto()
    {
        $title = "Customer Terms & Condition Auto";
        return view('website.customer_terms_auto', compact('title'));
    }
    public function safety()
    {
        $title = "Safety";
        return view('website.safety', compact('title'));
    }
    public function safety_detail()
    {
        $title = "Safety Detail";
        return view('website.safety_detail', compact('title'));
    }
}

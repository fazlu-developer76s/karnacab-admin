<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\CmsModal;
use App\Models\Page;
use App\Models\Seo;
use App\Models\ServiceModal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebsiteController extends Controller
{


    public function index(Request $request)
    {
        $title = "KarnaCab - Bharat Moves On KarnaCab!";
        $url = url()->current();
        $getSeo = Seo::where('url',$url)->where('status',1)->first();
        $globalSeo = CmsModal::where('id',1)->first();
        $hero = Banner::where('type','home')->first();
        $services = ServiceModal::where('status',1)->get();
        $get_quick = Page::where('id',1)->first();
        $drive = Page::where('id',2)->first();
        $safety = Page::where('id',3)->first();
        return view('website.index', compact('title','getSeo','globalSeo','hero','services','get_quick','drive','safety'));
    }

    public function about_us()
    {
        $title = "About Us";
        $url = url()->current();
        $getSeo = Seo::where('url',$url)->where('status',1)->first();
        $globalSeo = CmsModal::where('id',1)->first();
        $india = Page::where('id',4)->first();
        return view('website.about', compact('title','getSeo','globalSeo','india'));
    }

    public function blogs()
    {
        $title = "Blog";
        $url = url()->current();
        $getSeo = Seo::where('url',$url)->where('status',1)->first();
        $globalSeo = CmsModal::where('id',1)->first();
        $blogs = DB::table('blogs')->where('status',1)->get();
        return view('website.blog', compact('title','getSeo','globalSeo','blogs'));
    }

    public function blog_detail()
    {
        $url = url()->current();
        $getSeo = Seo::where('url',$url)->where('status',1)->first();
        $globalSeo = CmsModal::where('id',1)->first();
        $title = "Blog Detail ";
        return view('website.blog_detail', compact('title'));
    }

    public function captain_terms_auto()
    {
        $url = url()->current();
        $getSeo = Seo::where('url',$url)->where('status',1)->first();
        $globalSeo = CmsModal::where('id',1)->first();
        $title = "Captain Terms & Condition Auto";
        return view('website.captain_terms_auto', compact('title'));
    }

    public function captain_terms_bike()
    {
        $url = url()->current();
        $getSeo = Seo::where('url',$url)->where('status',1)->first();
        $globalSeo = CmsModal::where('id',1)->first();
        $title = "Captain Terms & Bike";
        return view('website.captain_terms_bike', compact('title'));
    }
    public function career()
    {
        $title = "Career";
        $url = url()->current();
        $getSeo = Seo::where('url',$url)->where('status',1)->first();
        $globalSeo = CmsModal::where('id',1)->first();
        $jobs = DB::table('job_title')->where('status',1)->get();
        $testimonal = DB::table('testimonals')->where('status',1)->get();
        return view('website.career', compact('title','getSeo','globalSeo','jobs','testimonal'));

    }
    public function contact()
    {
        $title = "Contact Us";
        $url = url()->current();
        $getSeo = Seo::where('url',$url)->where('status',1)->first();
        $globalSeo = CmsModal::where('id',1)->first();
        // dd($globalSeo);
        return view('website.contact', compact('title','getSeo','globalSeo'));
    }
    public function corporate_affairs()
    {
        $url = url()->current();
        $getSeo = Seo::where('url',$url)->where('status',1)->first();
        $globalSeo = CmsModal::where('id',1)->first();
        $title = "Corporate Affairs";
        return view('website.corporate_affairs', compact('title'));
    }
    public function privacy_policy()
    {
        $url = url()->current();
        $getSeo = Seo::where('url',$url)->where('status',1)->first();
        $globalSeo = CmsModal::where('id',1)->first();
        $title = "Corporate Affairs";
        return view('website.privacy_policy', compact('title'));
    }

    public function customer_terms_bike()
    {
        $url = url()->current();
        $getSeo = Seo::where('url',$url)->where('status',1)->first();
        $globalSeo = CmsModal::where('id',1)->first();
        $title = "Customer Terms & Condition Bike";
        return view('website.customer_terms_bike', compact('title'));
    }
    public function customer_terms_auto()
    {
        $url = url()->current();
        $getSeo = Seo::where('url',$url)->where('status',1)->first();
        $globalSeo = CmsModal::where('id',1)->first();
        $title = "Customer Terms & Condition Auto";
        return view('website.customer_terms_auto', compact('title'));
    }
    public function safety()
    {
        $url = url()->current();
        $getSeo = Seo::where('url',$url)->where('status',1)->first();
        $globalSeo = CmsModal::where('id',1)->first();
        $title = "KarnaCab - Bharat Moves On KarnaCab!";
        $hero = Banner::where('type','safety')->first();
        $title = "Safety";
        return view('website.safety', compact('title','getSeo','globalSeo','hero'));
    }
    public function safety_detail()
    {
        $url = url()->current();
        $getSeo = Seo::where('url',$url)->where('status',1)->first();
        $globalSeo = CmsModal::where('id',1)->first();
        $title = "Safety Detail";
        return view('website.safety_detail', compact('title'));
    }
}

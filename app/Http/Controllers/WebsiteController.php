<?php

namespace App\Http\Controllers;

use App\Mail\ContactEnquiryMail;
use App\Models\Banner;
use App\Models\CmsModal;
use App\Models\Page;
use App\Models\Seo;
use App\Models\ServiceModal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class WebsiteController extends Controller
{


    public function index(Request $request)
    {
        $title = "KarnaCab - Bharat Moves On KarnaCab!";
        $url = url()->current();
        $getSeo = Seo::where('url', $url)->where('status', 1)->first();
        $globalSeo = CmsModal::where('id', 1)->first();
        $hero = Banner::where('type', 'home')->first();
        $services = ServiceModal::where('status', 1)->get();
        $get_quick = Page::where('id', 1)->first();
        $drive = Page::where('id', 2)->first();
        $safety = Page::where('id', 3)->first();
        return view('website.index', compact('title', 'getSeo', 'globalSeo', 'hero', 'services', 'get_quick', 'drive', 'safety'));
    }

    public function about_us()
    {
        $title = "About Us";
        $url = url()->current();
        $getSeo = Seo::where('url', $url)->where('status', 1)->first();
        $globalSeo = CmsModal::where('id', 1)->first();
        $india = Page::where('id', 4)->first();
        return view('website.about', compact('title', 'getSeo', 'globalSeo', 'india'));
    }

    public function blogs()
    {
        $title = "Blog";
        $url = url()->current();
        $getSeo = Seo::where('url', $url)->where('status', 1)->first();
        $globalSeo = CmsModal::where('id', 1)->first();
        $blogs = DB::table('blogs')->where('status', 1)->get();
        return view('website.blog', compact('title', 'getSeo', 'globalSeo', 'blogs'));
    }

    public function blog_detail($id)
    {

        $url = url()->current();
        $getSeo = Seo::where('url', $url)->where('status', 1)->first();
        $globalSeo = CmsModal::where('id', 1)->first();
        $blog_detail = DB::table('blogs')->where('status', 1)->where('id',$id)->first();
        $related_post = DB::table('blogs')->where('status',1)->orderBy('id','desc')->limit(3)->get();
        // dd($related_post);
        $title = $blog_detail->title;
        return view('website.blog_detail', compact('title', 'getSeo', 'globalSeo', 'blog_detail','related_post'));
    }

    public function captain_terms_auto()
    {
        $title = "Captain Terms & Condition Auto";
        $url = url()->current();
        $getSeo = Seo::where('url', $url)->where('status', 1)->first();
        $globalSeo = CmsModal::where('id', 1)->first();
        $captain_terms_auto = Page::where('id', 8)->first();
        return view('website.captain_terms_auto', compact('title', 'getSeo', 'globalSeo', 'captain_terms_auto'));
    }

    public function captain_terms_bike()
    {
        $title = "Captain Terms & Condition Bike";
        $url = url()->current();
        $getSeo = Seo::where('url', $url)->where('status', 1)->first();
        $globalSeo = CmsModal::where('id', 1)->first();
        $captain_terms_bike = Page::where('id', 7)->first();
        return view('website.captain_terms_bike', compact('title', 'getSeo', 'globalSeo', 'captain_terms_bike'));
    }
    public function career()
    {
        $title = "Career";
        $url = url()->current();
        $getSeo = Seo::where('url', $url)->where('status', 1)->first();
        $globalSeo = CmsModal::where('id', 1)->first();
        $jobs = DB::table('job_title')->where('status', 1)->get();
        $testimonal = DB::table('testimonals')->where('status', 1)->get();
        return view('website.career', compact('title', 'getSeo', 'globalSeo', 'jobs', 'testimonal'));
    }
    public function contact()
    {
        $title = "Contact Us";
        $url = url()->current();
        $getSeo = Seo::where('url', $url)->where('status', 1)->first();
        $globalSeo = CmsModal::where('id', 1)->first();
        // dd($globalSeo);
        return view('website.contact', compact('title', 'getSeo', 'globalSeo'));
    }
     public function submit(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|string|max:20',
            'role' => 'required|string',
            'comment' => 'required|string',
        ]);

        // Save to database

        DB::table('contact_enc')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'mobile_no' => $request->mobile,
            'role' => $request->role,
            'message' => $request->comment,
        ]);

        // Send email
        Mail::to('karnacabofficial@gmail.com')->send(new ContactEnquiryMail($request->all()));
        return redirect()->back()->with('success', 'Your enquiry has been submitted successfully!');

        // return response()->json(['message' => 'Enquiry submitted successfully!']);
    }
    public function corporate_affairs()
    {
        $title = "Corporate Affairs";
        $url = url()->current();
        $getSeo = Seo::where('url', $url)->where('status', 1)->first();
        $globalSeo = CmsModal::where('id', 1)->first();
        $corporate_affairs = Page::where('id', 9)->first();
        return view('website.corporate_affairs', compact('title', 'getSeo', 'globalSeo', 'corporate_affairs'));
    }
    public function privacy_policy()
    {
        $title = "Privacy Policy";
        $url = url()->current();
        $getSeo = Seo::where('url', $url)->where('status', 1)->first();
        $globalSeo = CmsModal::where('id', 1)->first();
        $privacy_policy = Page::where('id', 10)->first();
        return view('website.privacy_policy', compact('title', 'getSeo', 'globalSeo', 'privacy_policy'));
    }

    public function customer_terms_bike()
    {
        $title = "Customer Terms & Condition Bike";
        $url = url()->current();
        $getSeo = Seo::where('url', $url)->where('status', 1)->first();
        $globalSeo = CmsModal::where('id', 1)->first();
        $customer_terms_bike = Page::where('id', 5)->first();
        return view('website.customer_terms_bike', compact('title', 'getSeo', 'globalSeo', 'customer_terms_bike'));
    }
    public function customer_terms_auto()
    {
        $title = "Customer Terms & Condition Auto";
        $url = url()->current();
        $getSeo = Seo::where('url', $url)->where('status', 1)->first();
        $globalSeo = CmsModal::where('id', 1)->first();
        $customer_terms_auto = Page::where('id', 6)->first();
        return view('website.customer_terms_auto', compact('title', 'getSeo', 'globalSeo', 'customer_terms_auto'));
    }
    public function safety()
    {
        $url = url()->current();
        $getSeo = Seo::where('url', $url)->where('status', 1)->first();
        $globalSeo = CmsModal::where('id', 1)->first();
        $title = "KarnaCab - Bharat Moves On KarnaCab!";
        $hero = Banner::where('type', 'safety')->first();
        $title = "Safety";
        return view('website.safety', compact('title', 'getSeo', 'globalSeo', 'hero'));
    }
    public function safety_detail()
    {
        $url = url()->current();
        $getSeo = Seo::where('url', $url)->where('status', 1)->first();
        $globalSeo = CmsModal::where('id', 1)->first();
        $title = "Safety Detail";
        return view('website.safety_detail', compact('title'));
    }
}

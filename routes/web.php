<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\GallaryController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SeoController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ServiceController;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
// Grouping all routes with auth middleware
Route::middleware(['auth', 'checkRole'])->group(function () {
    Route::get('/register', function () {
        redirect(route('login'));
    });
    Route::get('/profile-update', [MemberController::class, 'profile_update'])->name('profile.update')->middleware('auth');
    Route::get('/change-password', [MemberController::class, 'change_password'])->name('change.password')->middleware('auth');
    Route::post('/update-password', [MemberController::class, 'update_password'])->name('update.password')->middleware('auth');
    Route::post('/change-status', [MemberController::class, 'change_status'])->name('change.status');
    Route::post('/member/update', [MemberController::class, 'update'])->name('member.update');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/home', [DashboardController::class, 'index'])->name('home');

    // Services Route
    Route::get('/service', [ServiceController::class, 'index'])->name('service');
    Route::match(['get', 'post'], '/service/create', [ServiceController::class, 'create'])->name('service.create');
    Route::get('/service/{id}', [ServiceController::class, 'edit'])->name('service.edit');
    Route::post('/service/update', [ServiceController::class, 'update'])->name('service.update');
    Route::delete('/service/delete/{id}', [ServiceController::class, 'destroy'])->name('service.destroy');

    // Testimonals Route
    Route::get('/testimonial', [TestimonialController::class, 'index'])->name('testimonial');
    Route::match(['get', 'post'], '/testimonial/create', [TestimonialController::class, 'create'])->name('testimonial.create');
    Route::get('/testimonial/{id}', [TestimonialController::class, 'edit'])->name('testimonial.edit');
    Route::post('/testimonial/update', [TestimonialController::class, 'update'])->name('testimonial.update');
    Route::delete('/testimonial/delete/{id}', [TestimonialController::class, 'destroy'])->name('testimonial.destroy');


    // Job Title Route
    Route::get('/job', [JobController::class, 'index'])->name('job');
    Route::match(['get', 'post'], '/job/create', [JobController::class, 'create'])->name('job.create');
    Route::get('/job/{id}', [JobController::class, 'edit'])->name('job.edit');
    Route::post('/job/update', [JobController::class, 'update'])->name('job.update');
    Route::delete('/job/delete/{id}', [JobController::class, 'destroy'])->name('job.destroy');

    // Banners Route
    Route::get('/banner', [BannerController::class, 'index'])->name('banner');
    Route::match(['get', 'post'], '/banner/create', [BannerController::class, 'create'])->name('banner.create');
    Route::get('/banner/{id}', [BannerController::class, 'edit'])->name('banner.edit');
    Route::post('/banner/update', [BannerController::class, 'update'])->name('banner.update');
    Route::delete('/banner/delete/{id}', [BannerController::class, 'destroy'])->name('banner.destroy');

    // Blog Route
    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
    Route::match(['get', 'post'], '/blog/create', [BlogController::class, 'create'])->name('blog.create');
    Route::get('/blog/{id}', [BlogController::class, 'edit'])->name('blog.edit');
    Route::post('/blog/update', [BlogController::class, 'update'])->name('blog.update');
    Route::delete('/blog/delete/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');

    // Gallary Route
    Route::get('/gallary', [GallaryController::class, 'index'])->name('gallary');
    Route::match(['get', 'post'], '/gallary/create', [GallaryController::class, 'create'])->name('gallary.create');
    Route::get('/gallary/{id}', [GallaryController::class, 'edit'])->name('gallary.edit');
    Route::post('/gallary/update', [GallaryController::class, 'update'])->name('gallary.update');
    Route::delete('/gallary/delete/{id}', [GallaryController::class, 'destroy'])->name('gallary.destroy');

    // Seo Route
    Route::get('/seo', [SeoController::class, 'index'])->name('seo');
    Route::match(['get', 'post'], '/seo/create', [SeoController::class, 'create'])->name('seo.create');
    Route::get('/seo/{id}', [SeoController::class, 'edit'])->name('seo.edit');
    Route::post('/seo/update', [SeoController::class, 'update'])->name('seo.update');
    Route::delete('/seo/delete/{id}', [SeoController::class, 'destroy'])->name('seo.destroy');

    // cms route
    Route::get('company/{id}/edit', [CompanyController::class, 'edit'])->name('company.edit');
    Route::post('company/{id}', [CompanyController::class, 'update'])->name('company.update');
    Route::get('pages/{id}/edit', [PagesController::class, 'edit'])->name('pages.edit');
    Route::post('pages/{id}', [PagesController::class, 'update'])->name('pages.update');

    Route::get('enquiry', [CompanyController::class, 'enquiry'])->name('enquiry');
    Route::get('contact-enquiry', [CompanyController::class, 'contact_enquiry'])->name('contact.enquiry');
    Route::get('career-enquiry', [CompanyController::class, 'career_enquiry'])->name('career.enquiry');
    Route::delete('career/delete/{id}', [CompanyController::class, 'destroy'])->name('career.destroy');
    Route::delete('enquiry/delete', [CompanyController::class, 'enquiry_destroy'])->name('enquiry.destroy');
    Route::post('enquiry/reject', [CompanyController::class, 'enquiry_reject'])->name('enquiry.reject');
});

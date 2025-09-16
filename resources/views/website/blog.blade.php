@extends('website/layouts/app')
@section('content')

<main class="blog-main py-5 mt-5">
  <div class="container">
    <h1 class="blog-heading text-center mb-5">Our Latest Blogs</h1>

    <div class="row g-4">
      <!-- Blog Card -->
      <div class="col-lg-4 col-md-6">
        <a href="blogdetails.php" class="blog-card d-block text-decoration-none">
          <div class="blog-img">
            <img src="{{ asset('website_assets/images/blog1.png')}}" alt="Car Blog" class="img-fluid rounded-top">
          </div>
          <div class="blog-body p-3">
            <p class="blog-date">January 14, 2025</p>
            <h2 class="blog-title">Jaw Dropping Prices on Brand New Cars</h2>
            <p class="blog-excerpt">Discover unbeatable deals on the latest cars with amazing offers you can't resist.</p>
            <a href="{{ route('blog.detail') }}"><span class="read-more">Read More →</span></a>
          </div>
        </a>
      </div>

      <!-- Repeat more blog cards -->
      <div class="col-lg-4 col-md-6">
        <a href="blogdetails.php" class="blog-card d-block text-decoration-none">
          <div class="blog-img">
            <img src="{{ asset('website_assets/images/blog2.png')}}" alt="Car Road Trip" class="img-fluid rounded-top">
          </div>
          <div class="blog-body p-3">
            <p class="blog-date">January 14, 2025</p>
            <h2 class="blog-title">Find Your Dream Car at a Price You Won't Believe</h2>
            <p class="blog-excerpt">From luxury rides to budget-friendly options, we have it all waiting for you.</p>
            <a href="{{ route('blog.detail') }}"><span class="read-more">Read More →</span></a>
          </div>
        </a>
      </div>

      <div class="col-lg-4 col-md-6">
        <a href="blogdetails.php" class="blog-card d-block text-decoration-none">
          <div class="blog-img">
            <img src="{{ asset('website_assets/images/blog3.jpg')}}" alt="Travel" class="img-fluid rounded-top">
          </div>
          <div class="blog-body p-3">
            <p class="blog-date">January 8, 2025</p>
            <h2 class="blog-title">Business Travel Solutions for a Modern Workplace</h2>
            <p class="blog-excerpt">Discover innovative travel solutions that benefit both employers and employees.</p>
            <a href="{{ route('blog.detail') }}"><span class="read-more">Read More →</span></a>
          </div>
        </a>
      </div>
    </div>
  </div>
</main>
@endsection

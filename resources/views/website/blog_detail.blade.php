@extends('website/layouts/app')
@section('content')
<br>
<main class="blog-details py-5 mt-5">
  <div class="container">
    <div class="row g-5">
      <!-- Blog Content -->
      <div class="col-lg-8">
        <article class="blog-article">
          <img src="{{ asset('website_assets/images/blog1.png') }}" alt="Blog Main Image" class="img-fluid rounded mb-4">
          <h1 class="article-title mb-3">Jaw Dropping Prices on Brand New Cars</h1>
          <p class="article-meta mb-4">Published on <span>January 14, 2025</span> | By <span>Admin</span></p>
          <p>
            Looking for your dream car? You’re in the right place! At our dealership, we provide exclusive offers on brand-new vehicles that redefine affordability and luxury.
          </p>
          <p>
            Whether you want speed, style, or comfort, we have curated collections to suit every preference. Don’t miss out on limited-time discounts.
          </p>
          <blockquote class="article-quote my-4">
            “A car is not just a mode of transport, it’s a lifestyle. Make yours better with the right choice.”
          </blockquote>
          <p>
            Visit us today and take the first step towards driving your dream car!
          </p>
        </article>
      </div>

      <!-- Sidebar -->
      <div class="col-lg-4">
        <aside class="sidebar">
          <h3 class="sidebar-title mb-3">Related Posts</h3>
          <ul class="related-posts list-unstyled">
            <li class="mb-3"><a href="blogdetails.php">Find Your Dream Car at a Price You Won't Believe</a></li>
            <li class="mb-3"><a href="blogdetails.php">Boost Business Productivity with These Tips</a></li>
            <li class="mb-3"><a href="blogdetails.php">Traveler First Business Travel Program</a></li>
          </ul>
        </aside>
      </div>
    </div>
  </div>
</main>
@endsection

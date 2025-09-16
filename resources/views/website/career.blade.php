@extends('website/layouts/app')
@section('content')

  <!-- ===== HERO ===== -->
  <section class="career-hero d-flex align-items-center text-center text-white">
    <div class="container">
      <h1 class="career-hero-title">Your Career Moves with KarnaCab</h1>
      <p class="career-hero-sub">We’re building the future of mobility. Join us to innovate, grow, and make a real impact.</p>
      <a href="#open-roles" class="btn btn-accent btn-lg mt-3">Explore Open Roles</a>
    </div>
  </section>

  <!-- ===== WHY JOIN ===== -->
  <section class="career-why py-5">
    <div class="container text-center">
      <h2 class="section-title">Why Work With Us?</h2>
      <p class="section-sub mb-5">At KarnaCab, we value innovation, diversity, and growth. Here’s why our team loves working with us:</p>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="career-card p-4">
            <h3>🚀 Growth</h3>
            <p>Opportunities to learn, upskill, and accelerate your career path with mentorship.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="career-card p-4">
            <h3>🤝 Culture</h3>
            <p>A collaborative workplace that thrives on respect, inclusion, and teamwork.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="career-card p-4">
            <h3>💡 Innovation</h3>
            <p>Work on cutting-edge solutions that impact millions of users daily.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== OPEN ROLES ===== -->
  <section id="open-roles" class="career-roles py-5 bg-light">
    <div class="container">
      <h2 class="section-title text-center mb-5">Current Openings</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="career-role-card p-4">
            <h3>Software Engineer</h3>
            <p>Build scalable applications and mobility solutions for millions of users.</p>
            <a href="#" class="btn btn-outline-accent">Apply Now</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="career-role-card p-4">
            <h3>Marketing Specialist</h3>
            <p>Shape our brand and connect with riders and drivers across Bharat.</p>
            <a href="#" class="btn btn-outline-accent">Apply Now</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="career-role-card p-4">
            <h3>Operations Manager</h3>
            <p>Lead teams, streamline processes, and ensure seamless daily operations.</p>
            <a href="#" class="btn btn-outline-accent">Apply Now</a>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!-- ===== TESTIMONIALS (CAROUSEL) ===== -->
  <section class="career-testimonials py-5">
    <div class="container">
      <h2 class="section-title text-center mb-5">What Our Team Says</h2>

      <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

          <!-- Testimonial 1 -->
          <div class="carousel-item active">
            <div class="testimonial-card p-4 mx-auto">
              <div class="testimonial-img mb-3">
                <img src="{{ asset('website_assets/images/cover-captain.png')}}" alt="Employee 1">
              </div>
              <p class="testimonial-text">
                "KarnaCab gave me the platform to grow my career while working on cutting-edge technology."
              </p>
              <h5 class="testimonial-name">Amit Verma</h5>
              <span class="testimonial-role">Software Engineer</span>
            </div>
          </div>

          <!-- Testimonial 2 -->
          <div class="carousel-item">
            <div class="testimonial-card p-4 mx-auto">
              <div class="testimonial-img mb-3">
                <img src="{{ asset('website_assets/images/cover-captain.png')}}" alt="Employee 2">
              </div>
              <p class="testimonial-text">
                "I love the inclusive culture here. Every idea is valued, and collaboration drives everything we do."
              </p>
              <h5 class="testimonial-name">Priya Sharma</h5>
              <span class="testimonial-role">Marketing Specialist</span>
            </div>
          </div>

          <!-- Testimonial 3 -->
          <div class="carousel-item">
            <div class="testimonial-card p-4 mx-auto">
              <div class="testimonial-img mb-3">
                <img src="{{ asset('website_assets/images/team3.jpg') }}" alt="Employee 3">
              </div>
              <p class="testimonial-text">
                "Working at KarnaCab has been an exciting journey. The growth opportunities are endless."
              </p>
              <h5 class="testimonial-name">Ravi Kumar</h5>
              <span class="testimonial-role">Operations Manager</span>
            </div>
          </div>

        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>

        <!-- Indicators -->
        <div class="carousel-indicators mt-4">
          <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2"></button>
        </div>

      </div>
    </div>
  </section>
@endsection

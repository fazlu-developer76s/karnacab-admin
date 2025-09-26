@extends('website/layouts/app')
@section('content')

  <!-- ===== HERO ===== -->
  <section class="career-hero d-flex align-items-center text-center text-white">
    <div class="container">
      <h1 class="career-hero-title">Drive Your Future with KarnaCab</h1>
      <p class="career-hero-sub">At KarnaCab, every career is a journey of innovation and growth. Join our team to shape the future of mobility, make a real impact, and ride alongside a culture that values creativity and progress.</p>
      <a href="#open-roles" class="btn btn-accent btn-lg mt-3">Explore Open Roles</a>
    </div>
  </section>

  <!-- ===== WHY JOIN ===== -->
  <section class="career-why py-5">
    <div class="container text-center">
      <h2 class="section-title">Why Work With Us?</h2>
      <p class="section-sub mb-5">Join KarnaCab and be part of a team where your ideas matter, your growth is supported, and innovation drives everything we do. Here’s what makes us stand out:</p>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="career-card p-4">
            <h3>🚀 Collaborative Culture</h3>
            <p>A workplace built on respect, inclusion, and teamwork, where every voice is valued.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="career-card p-4">
            <h3>🤝 Innovation at Scale</h3>
            <p>Solve real-world problems with cutting-edge solutions that touch millions of lives every day.</p>
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
            @foreach($jobs as $job)
                <div class="col-md-4">
                    <div class="career-role-card p-4">
                        <h3>{{ $job->title }}</h3>
                        <p>{{ $job->description }}</p>
                        <a href="#" class="btn btn-outline-accent">Apply Now</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


<!-- ===== TESTIMONIALS (CAROUSEL) ===== -->
<section class="career-testimonials py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">What Our Team Says</h2>

        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($testimonal as $key => $t)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <div class="testimonial-card p-4 mx-auto">
                            <div class="testimonial-img mb-3">
                                <img src="{{ Storage::url($t->image) }}">
                            </div>
                            <p class="testimonial-text">
                                "{{ $t->description }}"
                            </p>
                            <h5 class="testimonial-name">{{ $t->name }}</h5>
                            <span class="testimonial-role">{{ $t->designation }}</span>
                        </div>
                    </div>
                @endforeach
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
                @foreach($testimonal as $key => $t)
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"></button>
                @endforeach
            </div>

        </div>
    </div>
</section>

@endsection

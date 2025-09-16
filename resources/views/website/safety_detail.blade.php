@extends('website/layouts/app')
@section('content')
  <!-- Hero Section -->
  <section class="captain-safety">
    <div class="container">
      <div class="row align-items-center">
        <!-- Text Left -->
        <div class="col-md-6">
          <h1>Captain Safety</h1>
          <p>
            All rides are insured. Accidental coverage and medical benefits covered up to
            <strong>₹5 Lakh</strong> for Captain & family.
            We ensure your safety is our top priority.
          </p>
        </div>
        <!-- Image Right -->
        <div class="col-md-6 text-center">
          <div class="safety-img-wrapper">
            <img src="{{ asset('website_assets/images/cover-captain.png')}}" alt="Captain Safety">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Benefits Section -->
  <section class="benefits">
    <div class="container">
      <h2>Why Captains Feel Safe</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="benefit-card">
            <i class="bi bi-shield-lock-fill"></i>
            <h5>Accidental Insurance</h5>
            <p>Coverage up to ₹5 Lakh for you & your family.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="benefit-card">
            <i class="bi bi-hospital-fill"></i>
            <h5>Medical Assistance</h5>
            <p>Immediate support in case of any incident on duty.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="benefit-card">
            <i class="bi bi-people-fill"></i>
            <h5>24/7 Support</h5>
            <p>Always available helpdesk for our Captains.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Banner Section -->
  <section class="banner">
    <div class="container">
      <h2>“Your safety is our driving force.”</h2>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="testimonials">
    <div class="container">
      <h2>What Our Captains Say</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="testimonial-card">
            <p>“I feel secure knowing my family is protected while I ride.”</p>
            <h6>- Ramesh, Captain</h6>
          </div>
        </div>
        <div class="col-md-4">
          <div class="testimonial-card">
            <p>“The medical assistance provided was quick and reliable.”</p>
            <h6>- Aisha, Captain</h6>
          </div>
        </div>
        <div class="col-md-4">
          <div class="testimonial-card">
            <p>“Support team is always there whenever I need help.”</p>
            <h6>- Karan, Captain</h6>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="cta">
    <div class="container">
      <h2>Join as a Captain with Confidence</h2>
      <p>Your journey matters to us. Safety guaranteed.</p>
      <a href="#" class="btn">Become a Captain</a>
    </div>
  </section>
@endsection

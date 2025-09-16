@extends('website/layouts/app')
@section('content')
<!-- ✅ Hero Section -->
<section class="contact-hero d-flex align-items-center text-center text-white">
  <div class="container">
    <h1 class="hero-title">Contact Us</h1>
    <p class="hero-subtitle">We’d love to hear from you! Reach out for queries or support.</p>
  </div>
</section>

<!-- ✅ Contact Section -->
<main class="contact-section py-5">
  <div class="container">
    <div class="row g-5">

      <!-- Contact Form -->
      <div class="col-lg-7">
        <div class="contact-form shadow-sm p-4 rounded bg-white">
          <h2 class="mb-3 ">You can find us here</h2>
          <p class="text-muted">Fill out the form below and our team will get back to you soon.</p>

          <form>
            <div class="mb-3">
              <label for="name" class="form-label">Name <span>*</span></label>
              <input type="text" id="name" class="form-control" placeholder="Enter your name">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email Address <span>*</span></label>
              <input type="email" id="email" class="form-control" placeholder="Enter your email">
            </div>
            <div class="mb-3">
              <label for="mobile" class="form-label">Mobile Number <span>*</span></label>
              <input type="tel" id="mobile" class="form-control" placeholder="Enter your mobile number">
            </div>
            <div class="mb-3">
              <label for="role" class="form-label">You are a <span>*</span></label>
              <select id="role" class="form-select">
                <option disabled selected>Select</option>
                <option value="customer">Customer</option>
                <option value="captain">Captain</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="comment" class="form-label">Comment <span>*</span></label>
              <textarea id="comment" rows="4" class="form-control" placeholder="Enter your comment"></textarea>
            </div>
            <button type="submit" class="btn btn-accent px-4 py-2">Submit</button>
          </form>
        </div>
      </div>

      <!-- Contact Info -->
      <div class="col-lg-5">
        <div class="address-details p-4 rounded shadow-sm bg-light">
          <h3 class="mb-3">Our Offices</h3>

          <div class="mb-4">
            <h5 class="text-accent">📍 Registered Office</h5>
            <p>Roppen Transportation Services Pvt Ltd, 3rd Floor, Sai Prithvi Arcade, Megha Hills, Sri Rama Colony, Madhapur, Hyderabad - 500081.</p>
            <p><strong>CIN:</strong> U63221GT2015PTC097115</p>
          </div>

          <div class="mb-4">
            <h5 class="text-accent">🏢 City Office</h5>
            <p>Roppen Transportation Services Pvt Ltd, #48, 1st Floor, SLV Nilaya, 5th Main 60ft Road, HSR Layout, 7th Sector, Bangalore - 560102.</p>
          </div>

          <div>
            <h5 class="text-accent">🏢 Corporate Office</h5>
            <p>Mantri Commerce - Spatium Tower A, Sy No 5/12, 5/13, 5/14, Devarabeesanahalli Village, Bangalore East Taluk, Bangalore.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</main>

@endsection

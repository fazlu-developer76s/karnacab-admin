@extends('website/layouts/app')
@section('content')
<main>
    <!-- Hero Section -->
   <section class="safety-hero-section">
  <div class="container">
    <div class="row align-items-center g-5 ">
      <!-- Left Text -->
      <div class="col-lg-6">
        <h1 class="safety-title">Safety for all.</h1>
        <p class="safety-desc">
          At Democab, the well-being of our customers is above everything else.
          We are constantly in pursuit of enhancing our safety measures to ensure
          every Democab ride is a pleasant and comfortable experience.
        </p>
        <a href="#more" class="btn btn-safety">Know More</a>
      </div>

      <!-- Right Images -->
      <div class="col-lg-6 position-relative text-center">
        <img src="{{ asset('website_assets/images/saftey-overview-img')}}-1.PNG" alt="Democab Captain" class="safety-img safety-img-1">
        <img src="{{ asset('website_assets/images/saftey-overview-img')}}-2.PNG" alt="Customer" class="safety-img safety-img-2">
      </div>
    </div>
  </div>
</section>


    <!-- Covers Everyone Section -->
    <section class="safety-covers">
        <div class="container text-center">
            <h2 class="safety-heading">Covers Everyone</h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="safety-card">
                        <img src="{{ asset('website_assets/images/cover-customer.png')}}" class="img-fluid rounded-3 mb-3" alt="Customer">
                        <h3 class="safety-card-title">For Customers</h3>
                        <p class="safety-card-text">
                            Every ride is tracked by Democab, with access to granular latitudinal and longitudinal data.
                        </p>
                        <a href="{{ route('safety.detail') }}" class="safety-link">Know More</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="safety-card">
                        <img src="{{ asset('website_assets/images/cover-captain.png')}}" class="img-fluid rounded-3 mb-3" alt="Captain">
                        <h3 class="safety-card-title">For Captains</h3>
                        <p class="safety-card-text">
                            From hiring to training to monitoring to ongoing checks, we take all necessary steps to ensure our Captains’ safety.
                        </p>
                        <a href="{{ route('safety.detail') }}" class="safety-link">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Way Forward Section -->
    <section class="safety-forward">
        <div class="container text-center">
            <h2 class="safety-heading">Way forward on Safety</h2>
            <p class="safety-forward-text">
                To further substantiate our commitment to Safety First towards customers & captains,
                we will be incorporating new features on our platform very soon.
            </p>
            <a href="#" class="safety-link safety-arrow">Know More <i class="fas fa-arrow-down"></i></a>
        </div>
    </section>
</main>
@endsection

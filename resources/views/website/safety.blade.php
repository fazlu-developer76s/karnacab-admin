@extends('website/layouts/app')
@section('content')
<main>
    <!-- Hero Section -->
   <section class="safety-hero-section">
  <div class="container">
    <div class="row align-items-center g-5 ">
      <!-- Left Text -->
      <div class="col-lg-6">
        <h1 class="safety-title">{!! $hero->title ?? '' !!}.</h1>
        <p class="safety-desc">
          {!! $hero->description ?? '' !!}
        </p>
        <a href="#more" class="btn btn-safety">Know More</a>
      </div>

      <!-- Right Images -->
      <div class="col-lg-6 position-relative text-center">
        <img src="{{ Storage::url($hero->image) }}" alt="Democab Captain" class="safety-img safety-img-1">
        {{-- <img src="{{ asset('website_assets/images/saftey-overview-img')}}-2.PNG" alt="Customer" class="safety-img safety-img-2"> --}}
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
                        <img src="{{ asset('website_assets/images/rider.webp')}}" class="img-fluid rounded-3 mb-3" alt="Customer">
                        <h3 class="safety-card-title">For Riders</h3>
                        <p class="safety-card-text">
                            Every ride with KarnaCab is tracked in real-time, giving you precise location details so you can travel with peace of mind.
                        </p>
                        <a href="#" class="safety-link">Know More</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="safety-card">
                        <img src="{{ asset('website_assets/images/partner.jpg')}}" class="img-fluid rounded-3 mb-3" alt="Captain">
                        <h3 class="safety-card-title">For Partner</h3>
                        <p class="safety-card-text">
                            From recruitment to training and regular safety checks, we ensure our captains are fully prepared to provide secure and reliable rides.
                        </p>
                        <a href="#" class="safety-link">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Way Forward Section -->
    <section class="safety-forward">
        <div class="container text-center">
            <h2 class="safety-heading">Pioneering Safety at Every Ride</h2>
            <p class="safety-forward-text">
               At KarnaCab, safety isn’t just a promise—it’s a continuous journey. To strengthen our “Safety First” commitment for both riders and captains, we’re introducing advanced features on our platform soon, ensuring every ride is smarter, safer, and more secure.
            </p>
            <a href="#" class="safety-link safety-arrow">Know More <i class="fas fa-arrow-down"></i></a>
        </div>
    </section>
</main>
@endsection

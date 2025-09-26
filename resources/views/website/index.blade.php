@extends('website/layouts/app')
@section('content')
    <!-- HERO -->
    <section class="hero-section">
        <div class="hero-overlay"></div>
        <div class="container hero-container text-white">
            <div class="row align-items-center">
                <div class="col-lg-6 mt-2">
                    <h1 class="hero-title">{{ isset($hero->title) ? $hero->title : '' }}</h1>
                    <p class="hero-subtitle">{!! $hero->description ?? '' !!}</p>
                    <form id="rideForm" class="ride-form mt-4">
                        <div class="mb-3">
                            <input type="text" id="pickup" class="form-control" placeholder="Enter Pickup Location">
                            <div id="pickupError" class="error-msg">Pickup location is required</div>
                        </div>
                        <div class="mb-3">
                            <input type="text" id="drop" class="form-control" placeholder="Enter Drop Location">
                            <div id="dropError" class="error-msg">Drop location is required</div>
                        </div>
                        <button type="submit" class="book-btn">Book Ride</button>
                    </form>

                </div>
                <div class="col-lg-6 text-center">
                    <img src="{{ Storage::url($hero->image) }}" alt="Bike Taxi" class="hero-image">
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section class="services-section py-5">
        <div class="container">
            <h2 class="services-title text-center mb-4">Our Services</h2>
            <div class="title-underline mx-auto mb-5"></div>
            <div class="row g-4">
                @if($services)
                @foreach ( $services as $ser )
                <div class="col-md-4">
                    <div class="service-card text-center p-4">
                        <img src="{{ Storage::url($ser->image) }}" alt="Bike" class="service-img">
                        <h5 class="mt-3">{{ $ser->title }}</h5>
                        {{-- <p>{{ || $ser->title || }}</p> --}}
                        <p>{!! $ser->text !!}</p>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </section>


    <!-- FEATURES -->
    <section class="features-section py-5">
        <div class="container">
            <!-- Block 1 -->
            <div class="row align-items-center mb-5">
                <div class="col-md-6 pe-md-5">
                    <h2 class="feature-title mb-3">{!! $get_quick->title ?? '' !!}</h2>
                    <div class="title-underline mb-3"></div>
                    <p class="feature-description mb-4">
                       {!! $get_quick->paragraph ?? '' !!}
                    </p>
                    <a href="#" class="feature-button btn btn-lg">Book a ride →</a>
                </div>
                <div class="col-md-6">
                    <div class="image-grid">
                        <img src="{{ asset('website_assets/images/customer_veh.webp') }}" alt="Ride 1" class="grid-image">
                        <img src="{{ asset('website_assets/images/customer_veh.webp') }}" alt="Ride 2" class="grid-image">
                        <img src="{{ asset('website_assets/images/customer_veh.webp') }}" alt="Ride 3" class="grid-image">
                        <img src="{{ asset('website_assets/images/customer_veh.webp') }}" alt="Ride 4" class="grid-image">
                    </div>
                </div>
            </div>

            <!-- Block 2 -->
            <div class="row align-items-center flex-md-row-reverse">
                <div class="col-md-6 ps-md-5">
                    <h2 class="feature-title mb-3">{!! $drive->title ?? '' !!}</h2>
                    <div class="title-underline mb-3"></div>
                    <p class="feature-description mb-4">
                       {!! $drive->paragraph ?? '' !!}
                    </p>
                    <a href="#" class="feature-button btn btn-lg">Start Earning →</a>
                </div>
                <div class="col-md-6">
                    <div class="image-grid">
                        <img src="{{ asset('website_assets/images/customer_veh.webp') }}" alt="Captain 1" class="grid-image">
                        <img src="{{ asset('website_assets/images/customer_veh.webp') }}" alt="Captain 2" class="grid-image">
                        <img src="{{ asset('website_assets/images/customer_veh.webp') }}" alt="Captain 3" class="grid-image">
                        <img src="{{ asset('website_assets/images/customer_veh.webp') }}" alt="Captain 4" class="grid-image">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- SAFETY -->
    <section class="safety-section py-5">
        <div class="container">
            <div class="row align-items-center gy-4">

                <!-- Left Text + Features -->
                <div class="col-lg-6 safety-text-wrap">
                    <h2 class="safety-title">{!! $safety->title ?? '' !!}</h2>
                    <p class="safety-intro">
                        {!! $safety->paragraph ?? '' !!}
                    </p>
                    {{-- <ul class="safety-features list-unstyled mt-4">
                        <li><i class="fas fa-check-circle"></i> Captains with verified IDs & driver training</li>
                        <li><i class="fas fa-shield-alt"></i> 24/7 ride tracking & emergency support</li>
                        <li><i class="fas fa-headset"></i> Sanitized vehicles and masks worn</li>
                        <li><i class="fas fa-map-marker-alt"></i> Live location sharing with friends & family</li>
                    </ul> --}}
                    <a href="{{ route('safety') }}" class="btn safety-btn mt-4">Know More →</a>
                </div>

                <!-- Right Image -->
                <div class="col-lg-6 safety-image-wrap text-center">
                    <img src="{{ asset('website_assets/images/customer_veh.webp') }}" alt="Safety First"
                        class="img-fluid safety-img rounded">
                </div>

            </div>
        </div>
    </section>


    <!-- DOWNLOAD -->
    <section class="download-section py-5" id="download">
        <div class="container text-center">
            <h2 class="download-title">Download Now</h2>
            <p class="download-subtitle mb-5">Get the KarnaCab app and start your journey today!</p>

            <div class="row justify-content-center g-4">

                <!-- App Card 1 -->
                <div class="col-10 col-md-4 col-lg-3">
                    <div class="app-card">
                        <div class="app-image">
                            <img src="{{ asset('website_assets/images/LogoRiderCercle.png') }}" alt="KarnaCab App"
                                class="img-fluid">
                        </div>
                        <div class="app-content">
                            <h5>KarnaCab Rider</h5>
                            <p class="mb-0">Bike-Taxi, Auto & Cabs</p>
                        </div>
                    </div>
                </div>

                <!-- App Card 2 -->
                <div class="col-10 col-md-4 col-lg-3">
                    <div class="app-card">
                        <div class="app-image">
                            <img src="{{ asset('website_assets/images/LogoPartnerCercle.png') }}" alt="KarnaCab Captain"
                                class="img-fluid">
                        </div>
                        <div class="app-content">
                            <h5>KarnaCab Partner</h5>
                            <p class="mb-0">Drive & Earn</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

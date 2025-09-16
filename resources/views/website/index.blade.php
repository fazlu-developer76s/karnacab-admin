@extends('website/layouts/app')
@section('content')

    <!-- HERO -->
    <section class="hero-section">
        <div class="hero-overlay"></div>
        <div class="container hero-container text-white">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-title">Ride Faster with KarnaCab!</h1>
                    <p class="hero-subtitle">Reliable, affordable, and quick rides — Bike Taxi, Auto, Cabs & more at your fingertips.</p>
                    <form class="ride-form mt-4">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Enter Pickup Location">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Enter Drop Location">
                        </div>
                        <button type="submit" class="book-btn">Book Ride</button>
                    </form>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="https://gaadiwaadi.com/wp-content/uploads/2018/10/new-car-launch-november-2018-e1540755340753.jpg" alt="Bike Taxi" class="hero-image">
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
                <div class="col-md-4">
                    <div class="service-card text-center p-4">
                        <img src="{{ asset('website_assets/images/bike.PNG') }}" alt="Bike" class="service-img">
                        <h5 class="mt-3">Bike</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card text-center p-4">
                        <img src="{{ asset('website_assets/images/auto.PNG') }}" alt="Auto" class="service-img">
                        <h5 class="mt-3">Auto</h5>
                        <p>Fast and affordable auto rides at your convenience.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card text-center p-4">
                        <img src="{{ asset('website_assets/images/autoshare.PNG')}}" alt="Auto Share" class="service-img">
                        <h5 class="mt-3">Auto Share</h5>
                        <p>Share your ride, save money, and travel smarter.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card text-center p-4">
                        <img src="{{ asset('website_assets/images/parcel.PNG')}}" alt="Parcel" class="service-img">
                        <h5 class="mt-3">Parcel</h5>
                        <p>Send parcels quickly and securely with KarnaCab.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card text-center p-4">
                        <img src="{{ asset('website_assets/images/cab economy')}}.PNG" alt="Cab Economy" class="service-img">
                        <h5 class="mt-3">Cab Economy</h5>
                        <p>Comfortable cab rides at the best affordable rates.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card text-center p-4">
                        <img src="{{ asset('website_assets/images/cab premimum')}}.PNG" alt="Cab Premium" class="service-img">
                        <h5 class="mt-3">Cab Premium</h5>
                        <p>Travel in luxury and comfort with our premium cabs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- FEATURES -->
    <section class="features-section py-5">
        <div class="container">
            <!-- Block 1 -->
            <div class="row align-items-center mb-5">
                <div class="col-md-6 pe-md-5">
                    <h2 class="feature-title mb-3">Get Quick Rides, <br> Low Fares</h2>
                    <div class="title-underline mb-3"></div>
                    <p class="feature-description mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer facilisis turpis sed venenatis volutpat.
                        Erat risus euismod arcu, ut aliquam libero metus sed sapien.
                    </p>
                    <a href="#" class="feature-button btn btn-lg">Book a ride →</a>
                </div>
                <div class="col-md-6">
                    <div class="image-grid">
                        <img src="{{ asset('website_assets/images/img1.PNG')}}" alt="Ride 1" class="grid-image">
                        <img src="{{ asset('website_assets/images/img2.PNG')}}" alt="Ride 2" class="grid-image">
                        <img src="{{ asset('website_assets/images/img3.PNG')}}" alt="Ride 3" class="grid-image">
                        <img src="{{ asset('website_assets/images/img4.PNG')}}" alt="Ride 4" class="grid-image">
                    </div>
                </div>
            </div>

            <!-- Block 2 -->
            <div class="row align-items-center flex-md-row-reverse">
                <div class="col-md-6 ps-md-5">
                    <h2 class="feature-title mb-3">Flexible Hours & <br> High Earnings</h2>
                    <div class="title-underline mb-3"></div>
                    <p class="feature-description mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tincidunt felis sed cursus commodo.
                        Eget vehicula orci nisl nec metus.
                    </p>
                    <a href="#" class="feature-button btn btn-lg">Start Earning →</a>
                </div>
                <div class="col-md-6">
                    <div class="image-grid">
                        <img src="{{ asset('website_assets/images/img5.PNG')}}" alt="Captain 1" class="grid-image">
                        <img src="{{ asset('website_assets/images/img6.PNG')}}" alt="Captain 2" class="grid-image">
                        <img src="{{ asset('website_assets/images/img7.PNG')}}" alt="Captain 3" class="grid-image">
                        <img src="{{ asset('website_assets/images/img8.PNG')}}" alt="Captain 4" class="grid-image">
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
                    <h2 class="safety-title">Safety for All — Your Peace of Mind</h2>
                    <p class="safety-intro">
                        At KarnaCab, safety isn't just a promise — it's our culture. From background-verified captains to real-time ride tracking and strict hygiene protocols, every ride is built on trust and care.
                    </p>
                    <ul class="safety-features list-unstyled mt-4">
                        <li><i class="fas fa-check-circle"></i> Captains with verified IDs & driver training</li>
                        <li><i class="fas fa-shield-alt"></i> 24/7 ride tracking & emergency support</li>
                        <li><i class="fas fa-headset"></i> Sanitized vehicles and masks worn</li>
                        <li><i class="fas fa-map-marker-alt"></i> Live location sharing with friends & family</li>
                    </ul>
                    <a href="{{ route('safety') }}" class="btn safety-btn mt-4">Know More →</a>
                </div>

                <!-- Right Image -->
                <div class="col-lg-6 safety-image-wrap text-center">
                    <img src="{{ asset('website_assets/images/safteyfirst.PNG')}}" alt="Safety First" class="img-fluid safety-img rounded">
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
                            <img src="{{ asset('website_assets/images/rapido.PNG')}}" alt="KarnaCab App" class="img-fluid">
                        </div>
                        <div class="app-content">
                            <h5>KarnaCab</h5>
                            <p class="mb-0">Bike-Taxi, Auto & Cabs</p>
                        </div>
                    </div>
                </div>

                <!-- App Card 2 -->
                <div class="col-10 col-md-4 col-lg-3">
                    <div class="app-card">
                        <div class="app-image">
                            <img src="{{ asset('website_assets/images/rapidocaption.PNG')}}" alt="KarnaCab Captain" class="img-fluid">
                        </div>
                        <div class="app-content">
                            <h5>KarnaCab Captain</h5>
                            <p class="mb-0">Drive & Earn</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

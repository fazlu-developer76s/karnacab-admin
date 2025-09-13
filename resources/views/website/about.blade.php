@extends('website/layouts/app')
@section('content')

<!-- Main About Us Content -->
<main>
    <!-- Hero Section -->
    <section class="about-hero mt-4">
        <div class="about-hero-container">
            <div class="about-hero-text">
                <h1>India's Beloved <br> Bike Taxi Service</h1>
                <h2>We are not an option, we are a choice</h2>
                <p>We're the #1 choice of 10 Million people because we solve India's intra-city commuting problems. With assured safety, we provide economically priced rides.</p>
                <h2>What makes us different?</h2>
                <p>Our bike taxis can dodge traffic during peak hours and get you to your destination in a jiffy! So when you think travel, think KarnaCab.</p>
                <a href="#" class="btn-about">Book a Ride</a>
            </div>
            <div class="about-hero-images">
                <img src="{{ asset('website_assets/images/about_us_1.png') }}" alt="Person on a bike" class="hero-img1">
                <img src="{{ asset('website_assets/images/about_us_2.png') }}" alt="Person using app" class="hero-img2">
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="about-features">
        <div class="about-container">
            <!-- <h2>Why Choose KarnaCab?</h2> -->
            <h2 class="section-title">Why Choose KarnaCab?<span></span></h2>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-bolt"></i></div>
                    <h3>Quick Rides</h3>
                    <p>Beat the traffic and reach your destination faster with our bike taxis.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-rupee-sign"></i></div>
                    <h3>Affordable Pricing</h3>
                    <p>Cost-effective rides that don't burn a hole in your pocket.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-shield-alt"></i></div>
                    <h3>Safe & Secure</h3>
                    <p>Your safety is our priority with verified captains and live tracking.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Champions Section -->
    <section class="about-champions">
        <div class="about-container">
            <!-- <h2>Champions of our success story</h2> -->
            <h2 class="section-title">Champions of our success story<span></span></h2>
            <p>KarnaCab has come a long way ever since its inception in 2015. Through hard work and perseverance, we've carved a niche in the market. Our constant endeavour is to redefine excellence.</p>
            <div class="founders">
                <div class="founder-card">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Rishikesh S R">
                    <p><strong>Rishikesh S R</strong></p>
                    <p>Founder & CEO</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div class="founder-card">
                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Pavan Guntupalli">
                    <p><strong>Pavan Guntupalli</strong></p>
                    <p>Co-Founder & CTO</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div class="founder-card">
                    <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Aravind Sanka">
                    <p><strong>Aravind Sanka</strong></p>
                    <p>Co-Founder & COO</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Jobs Section -->
    <section class="about-jobs">
        <div class="jobs-container">
            <!-- <h2>Jobs @ KarnaCab</h2> -->
            <h2 class="section-title">Jobs @ KarnaCab<span></span></h2>
            <p>Join us in exploring a world of endless opportunities. Let's find a spot for you.</p>
            <a href="#" class="btn-about-dark">Work with us</a>
        </div>
    </section>
</main>

@endsection

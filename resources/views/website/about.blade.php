@extends('website/layouts/app')
@section('content')
    <!-- Main About Us Content -->
    <main>
        <!-- Hero Section -->
        <section class="about-hero mt-4">
            <div class="about-hero-container">
                <div class="about-hero-text">
                    <h1>{!! $india->title ?? '' !!}</h1>
                    {!! $india->paragraph ?? '' !!}
                    {{-- <h2>We are not an option, we are a choice</h2>
                <p>We're the #1 choice of 10 Million people because we solve India's intra-city commuting problems. With assured safety, we provide economically priced rides.</p>
                <h2>What makes us different?</h2>
                <p>Our bike taxis can dodge traffic during peak hours and get you to your destination in a jiffy! So when you think travel, think KarnaCab.</p> --}}
                    <a href="#" class="btn-about">Book a Ride</a>
                </div>
                <div class="about-hero-images">
                    <img src="{{ Storage::url($india->image) }}" alt="Person on a bike" class="hero-img1">
                    <img src="{{ Storage::url($india->image) }}" alt="Person using app" class="hero-img2">
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
                        <p>Skip the traffic and reach your destination in no time with KarnaCab’s fast and reliable bike
                            taxis. Whether it’s a daily commute or a last-minute trip, we get you there efficiently.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon"><i class="fas fa-rupee-sign"></i></div>
                        <h3>Affordable Pricing</h3>
                        <p>Enjoy pocket-friendly rides without compromising on comfort or speed. KarnaCab offers
                            cost-effective transport options so you can travel more for less.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon"><i class="fas fa-shield-alt"></i></div>
                        <h3>Safe & Secure</h3>
                        <p>Your safety is our top priority. All our captains are verified, and every ride comes with
                            real-time tracking to ensure peace of mind from start to finish.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Champions Section -->
        <section class="about-champions">
            <div class="about-container">
                <!-- <h2>Champions of our success story</h2> -->
                <h2 class="section-title">Driving Excellence Since 2015<span></span></h2>
                <p>Since its inception in 2015, KarnaCab has grown steadily by putting customers first and embracing
                    innovation. Our journey is powered by dedication, resilience, and a commitment to redefining city
                    travel. Every ride reflects our promise of reliability, convenience, and unmatched service quality.</p>
                <div class="founders">
                    <div class="founder-card">
                        <img src="{{ asset('website_assets/images/amit_kumar.jpg') }}"
                            alt="Ananya Sharma">
                        <p><strong>Amit Kumar</strong></p>
                        <p>Co-Founder & CEO</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>

                    <div class="founder-card">
                        <img src="{{ asset('website_assets/images/kunal_roy.jpg') }}"
                            alt="Rahul Mehta">
                        <p><strong>Kunal Roy</strong></p>
                        <p>Chief Marketing Officer</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>

                    <div class="founder-card">
                        <img src="{{ asset('website_assets/images/aman_kumar.jpg') }}"
                            alt="Sneha Kapoor">
                        <p><strong>Aman Kumar</strong></p>
                        <p>Head of Product</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>

                    <div class="founder-card">
                        <img src="{{ asset('website_assets/images/rahul_kumar_bushan.jpg') }}"
                            alt="Vikram Singh">
                        <p><strong>Vikram Singh</strong></p>
                        <p>Aman Kumar Bushan</p>
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
                <h2 class="section-title">Careers at KarnaCab — Your Journey Starts Here<span></span></h2>
                <p>Be part of a team that’s transforming urban travel across India. At KarnaCab, every role is an
                    opportunity to grow, innovate, and make a real impact. Join us and help shape the future of safe,
                    reliable, and efficient rides.</p>
                <a href="#" class="btn-about-dark">Work with us</a>
            </div>
        </section>
    </main>
@endsection

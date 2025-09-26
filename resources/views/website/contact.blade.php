@extends('website/layouts/app')
@section('content')
    <!-- ✅ Hero Section -->
    <section class="contact-hero d-flex align-items-center text-center text-white">
        <div class="container">
            <h1 class="hero-title">Get in Touch with KarnaCab</h1>
            <p class="hero-subtitle">Have questions, feedback, or need support? Our team is here to help you. Reach out to us
                anytime, and we’ll make sure your journey with KarnaCab is smooth and hassle-free.</p>
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

                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <form action="{{ route('contact.submit') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name <span>*</span></label>
                                <input type="text" name="name" id="name" class="form-control"
                                    placeholder="Enter your name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address <span>*</span></label>
                                <input type="email" name="email" id="email" class="form-control"
                                    placeholder="Enter your email" required>
                            </div>
                            <div class="mb-3">
                                <label for="mobile" class="form-label">Mobile Number <span>*</span></label>
                                <input type="tel" name="mobile" id="mobile" class="form-control"
                                    placeholder="Enter your mobile number" required>
                            </div>
                            <div class="mb-3">
                                <label for="role" class="form-label">You are a <span>*</span></label>
                                <select name="role" id="role" class="form-select" required>
                                    <option disabled selected>Select</option>
                                    <option value="customer">Customer</option>
                                    <option value="captain">Captain</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="comment" class="form-label">Comment <span>*</span></label>
                                <textarea name="comment" id="comment" rows="4" class="form-control" placeholder="Enter your comment" required></textarea>
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
                            <p>{{ $globalSeo->address }}</p>
                            <p><strong>Email:</strong> {{ $globalSeo->email }}</p>
                            <p><strong>Mobile:</strong> {{ $globalSeo->mobile }}</p>
                        </div>
                        <div class="social-links">
                            @if ($globalSeo->facebook)
                                <a href="{{ $globalSeo->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            @endif
                            @if ($globalSeo->twitter)
                                <a href="{{ $globalSeo->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a>
                            @endif
                            @if ($globalSeo->instagram)
                                <a href="{{ $globalSeo->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a>
                            @endif
                            @if ($globalSeo->linkedin)
                                <a href="{{ $globalSeo->linkedin }}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            @endif
                            @if ($globalSeo->youtube_link)
                                <a href="{{ $globalSeo->youtube_link }}" target="_blank"><i class="fab fa-youtube"></i></a>
                            @endif
                        </div>
                        <div class="mt-2">

                            @if ($globalSeo->map_link)
                                {!! $globalSeo->map_link !!}
                            @endif
                        </div>


                    </div>
                </div>


            </div>
        </div>
    </main>
@endsection

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($getSeo->meta_title) ? $getSeo->meta_title : $title }}</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ Storage::url($globalSeo->favicon) }}" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="{{ asset('website_assets/css/style.css') }}" rel="stylesheet" />
    <meta name="keywords" content="{{ isset($getSeo->meta_keyword) ? $getSeo->meta_keyword : '' }}" />
    <meta name="description" content="{{ isset($getSeo->meta_description) ? $getSeo->meta_description : '' }}" />
    <meta name="robots" content="{{ isset($getSeo->meta_robot) ? $getSeo->meta_robot : '' }}" />
</head>
{{ isset($getSeo->header_script) ? $getSeo->header_script : '' }}
{{ isset($globalSeo->header_script) ? $globalSeo->header_script : '' }}

<body>

    <!-- HEADER -->
    <!-- Header Navbar -->
    <!-- Header Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('/') }}">
                <img src="{{ Storage::url($globalSeo->logo) }}" alt="KarnaCAB Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center">

                    {{-- <li class="nav-item"><a class="nav-link" href="#">Press</a></li> --}}
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('/') ? 'active' : '' }}"
                            href="{{ route('/') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                            href="{{ route('about') }}">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('safety') || request()->routeIs('safety.detail') ? 'active' : '' }}"
                            href="{{ route('safety') }}">Safety</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('career') ? 'active' : '' }}"
                            href="{{ route('career') }}">Careers</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('blogs') || request()->routeIs('blog.detail') ? 'active' : '' }}"
                            href="{{ route('blogs') }}">Blog</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                            href="{{ route('contact') }}">Contact Us</a>
                    </li>

                    <li class="nav-item ms-3">
                        <a class="btn btn-download" href="#">Download App</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="row gy-4">

                <!-- Customer App -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="footer-title">Rider App</h4>
                    <p>Book rides in just a few taps! Our user-friendly app makes travel faster, safer, and more convenient. Get real-time updates, track your ride, and enjoy hassle-free payments.</p>
                    <a href="#"><img src="{{ asset('website_assets/images/gplay.PNG') }}" class="img-fluid mb-2"
                            alt="Google Play"></a>
                    <a href="#"><img src="{{ asset('website_assets/images/apstore.PNG') }}" class="img-fluid"
                            alt="App Store"></a>
                </div>

                <!-- Captain App -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="footer-title">Partner App</h4>
                    <p>Manage your rides and earnings effortlessly. Our Partner App is designed for captains to stay connected, accept trips, track earnings, and optimize schedules — all in one place.</p>
                    <a href="#"><img src="{{ asset('website_assets/images/gplay.PNG') }}" class="img-fluid mb-2"
                            alt="Google Play"></a>
                             <a href="#"><img src="{{ asset('website_assets/images/apstore.PNG') }}" class="img-fluid"
                            alt="App Store"></a>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-2 col-md-6 footer-links">
                    <h4 class="footer-title">Quick Links</h4>
                    <!-- <ul> -->
                    <li><a href="{{ route('/') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('safety') }}">Safety</a></li>
                    <li><a href="{{ route('career') }}">Careers</a></li>
                    <li><a href="{{ route('privacy.policy') }}">Privacy Policy</a></li>
                    <!-- </ul> -->

                </div>

                <!-- Customers -->
                <div class="col-lg-2 col-md-6 footer-links">
                    <h4 class="footer-title">Customers</h4>
                    <li><a href="{{ route('customer.terms.bike') }}">Terms - Bike Taxi</a></li>
                    <li><a href="{{ route('customer.terms.auto') }}">Terms - Cabs & Auto</a></li>
                    <li><a href="{{ route('corporate.affairs') }}">Corporate Affairs</a></li>
                    {{-- <li><a href="{{ route('privacy.policy') }}">Support</a></li> --}}
                </div>

                <!-- Captains -->
                <div class="col-lg-2 col-md-6 footer-links">
                    <h4 class="footer-title">Captains</h4>
                    <li><a href="{{ route('captain.terms.bike') }}">Terms - Bike Taxi</a></li>
                    <li><a href="{{ route('captain.terms.auto') }}">Terms - Cabs & Auto</a></li>
                    <li><a href="{{ route('blogs') }}">Blog</a></li>
                    {{-- <li><a href="termsandcondition.php">Press</a></li> --}}
                    {{-- <li><a href="termsandcondition.php">Captain Support</a></li> --}}
                </div>

                <!-- Contact & Social -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="footer-title">Contact Us</h4>
                    <p>Email: {{ isset($globalSeo->email) ? $globalSeo->email : '' }}</p>
                    <p>Phone: {{ isset($globalSeo->mobile) ? $globalSeo->mobile : '' }}</p>
                    <p>Address: {{ isset($globalSeo->address) ? $globalSeo->address : '' }}</p>
                    <div class="social-icons mt-2">
                        <a href="{{ isset($globalSeo->facebook) ? $globalSeo->facebook : '#' }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="{{ isset($globalSeo->twitter) ? $globalSeo->twitter : '#' }}" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="{{ isset($globalSeo->linkedin) ? $globalSeo->linkedin : '#' }}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a href="{{ isset($globalSeo->instagram) ? $globalSeo->instagram : '#' }}" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="{{ isset($globalSeo->youtube_link) ? $globalSeo->youtube_link : '#' }}" target="_blank"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>

            <!-- Newsletter -->
            <div class="row mt-5">
                <div class="col-md-12 text-center">
                    <h4 class="footer-title mb-3">Subscribe to Our Newsletter</h4>
                    <form class="d-flex justify-content-center" action="#" method="post">
                        <input type="email" class="form-control w-50 me-2" placeholder="Enter your email" required>
                        <button type="submit" class="btn"
                            style="background:#F2B929; color:#206333;">Subscribe</button>
                    </form>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom text-center mt-4 pt-4">
                <p>&copy; 2025 <span class="brand">KarnaCab</span>. All Rights Reserved. Designed with ❤️ by KarnaCab
                    Team.</p>
            </div>
        </div>
    </footer>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh3omxZlCKxzpHnX_5cXFyOE9OaMGqL_E&libraries=places">
    </script>
    <script>
        function initAutocomplete() {
            const pickupInput = document.getElementById('pickup');
            const dropInput = document.getElementById('drop');

            const pickupAutocomplete = new google.maps.places.Autocomplete(pickupInput, {
                types: ['geocode'],
                componentRestrictions: {
                    country: "in"
                }
            });

            const dropAutocomplete = new google.maps.places.Autocomplete(dropInput, {
                types: ['geocode'],
                componentRestrictions: {
                    country: "in"
                }
            });

            pickupAutocomplete.addListener("place_changed", function() {
                const place = pickupAutocomplete.getPlace();
                console.log("Pickup Selected:", place.formatted_address);
            });

            dropAutocomplete.addListener("place_changed", function() {
                const place = dropAutocomplete.getPlace();
                console.log("Drop Selected:", place.formatted_address);
            });
        }

        // Form validation
        document.getElementById('rideForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const pickup = document.getElementById('pickup').value.trim();
            const drop = document.getElementById('drop').value.trim();
            const pickupError = document.getElementById('pickupError');
            const dropError = document.getElementById('dropError');

            let valid = true;

            if (pickup === "") {
                pickupError.style.display = "block";
                valid = false;
            } else {
                pickupError.style.display = "none";
            }

            if (drop === "") {
                dropError.style.display = "block";
                valid = false;
            } else {
                dropError.style.display = "none";
            }

            if (valid) {
                alert("Get more information for booking, use Karnacab Rider Application");
            }
        });

        // Initialize Google autocomplete
        window.onload = initAutocomplete;
    </script>

    {{ isset($getSeo->footer_script) ? $getSeo->footer_script : '' }}
    {{ isset($globalSeo->footer_script) ? $globalSeo->footer_script : '' }}
</body>

</html>

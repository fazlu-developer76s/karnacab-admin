<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ ($title) ? $title : "Karnacab" }}</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="{{ asset('website_assets/css/style.css') }}" rel="stylesheet" />
</head>

<body>

    <!-- HEADER -->
    <!-- Header Navbar -->
    <!-- Header Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('website_assets/images/logo.png') }}" alt="KarnaCAB Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item"><a class="nav-link" href="{{ route('/') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about-us') }}">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Safety</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Careers</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Press</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
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
                    <h4 class="footer-title">Customer App</h4>
                    <p>Download our app to book rides easily and enjoy seamless travel.</p>
                    <a href="#"><img src="{{ asset('website_assets/images/gplay.PNG') }}" class="img-fluid mb-2" alt="Google Play"></a>
                    <a href="#"><img src="{{ asset('website_assets/images/apstore.PNG') }}" class="img-fluid" alt="App Store"></a>
                </div>

                <!-- Captain App -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="footer-title">Captain App</h4>
                    <p>Our dedicated app for captains to manage rides and earnings efficiently.</p>
                    <a href="#"><img src="{{ asset('website_assets/images/gplay.PNG') }}" class="img-fluid" alt="Google Play"></a>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-2 col-md-6 footer-links">
                    <h4 class="footer-title">Quick Links</h4>
                    <!-- <ul> -->
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Safety</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <!-- </ul> -->

                </div>

                <!-- Customers -->
                <div class="col-lg-2 col-md-6 footer-links">
                    <h4 class="footer-title">Customers</h4>
                    <li><a href="termsandcondition.php">Terms - Bike Taxi</a></li>
                    <li><a href="termsandcondition.php">Terms - Cabs & Auto</a></li>
                    <li><a href="termsandcondition.php">Corporate Affairs</a></li>
                    <li><a href="termsandcondition.php">Support</a></li>
                </div>

                <!-- Captains -->
                <div class="col-lg-2 col-md-6 footer-links">
                    <h4 class="footer-title">Captains</h4>
                    <li><a href="termsandcondition.php">Terms - Bike Taxi</a></li>
                    <li><a href="termsandcondition.php">Terms - Cabs & Auto</a></li>
                    <li><a href="termsandcondition.php">Blog</a></li>
                    <li><a href="termsandcondition.php">Press</a></li>
                    <li><a href="termsandcondition.php">Captain Support</a></li>
                </div>

                <!-- Contact & Social -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="footer-title">Contact Us</h4>
                    <p>Email: support@karnacab.com</p>
                    <p>Phone: +91 123 456 7890</p>
                    <p>Address: 123, City Road, State, India</p>
                    <div class="social-icons mt-2">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
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




</body>

</html>

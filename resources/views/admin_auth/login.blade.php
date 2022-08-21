<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title') | world wide </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

   <!-- Favicons -->
  <link href="{{ asset('frontend/assets/img/logo/logo.png')}}" rel="icon">
  <link href="{{ asset('frontend/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
      <link href="{{ asset('frontend/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
      <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
      <link href="{{ asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
      <link href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
      <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

      <!-- Template Main CSS File -->
      <link href="{{ asset('frontend/assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Green - v4.7.0
  * Template URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body style="background-color: #fff; color: #000;">


    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <!-- <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">

            </div>
            <ul class="nav pt-5">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                        aria-expanded="false" style="color: #000;">Language</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">English</a></li>
                        <li><a class="dropdown-item" href="#">Spanish</a></li>
                    </ul>
                </li>
            </ul>
        </div> -->
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center">
            <a href="{{ url('/') }}" class="logo me-auto"><img src="{{ asset('frontend/assets/img/logo.svg')}}" style="width: 150px;" alt="" class="img-fluid"></a>
        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6 mt-5 mt-lg-0">
                        <div class="sign_in_content">
                            <h2>Log In Admin</h2>
                            <p></p>
                        </div>

                        <form action="{{ route('admin.login') }}" method="post">
                            @csrf

                            <div class="form-group mt-3">
                                <label for="" class="mb-3">Email</label>
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mt-3">
                                <label for="" class="mb-3">Password</label>
                                <input type="password"  class="form-control @error('password') is-invalid @enderror"  name="password" placeholder="" required id="myPassword">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="d-flex">
                                <input type="checkbox" id="exampleCheck1" style="margin-top:14px" onclick="myFunction()">
                                <label for="exampleCheck1" class="mt-2 ms-2">show password</label>
                            </div>
                            <div align="right" style="margin-top: -24px;">
                                <a href="{{ route('password.request') }}" style="color: #000">forgot password?</a>
                            </div>


                            <div class="my-3">
                            <!--    <div class="loading">Loading</div>-->
                            <!--    <div class="error-message"></div>-->
                            <!--    <div class="sent-message">Your message has been sent. Thank you!</div>-->
                            </div>
                            <!-- <div class="col-md-12"> -->
                            <button type="submit" class="sign_in_button">Sign in <i class="bi bi-arrow-right"></i></button>
                            <!-- </div> -->
                            
                        </form>
                    </div>
                    <div class="col-lg-3"></div>

                </div>
            </div>
        </section><!-- End Contact Section -->
    </main><!-- End #main -->





    <!-- ======= Footer ======= -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sign_in_footer_top">
                    <div class="back_to_home">
                        <p>Don’t want to continue?</p>
                        <a href="{{ url('/') }}" style="color: #007BFF;text-decoration-line: underline;">Back to Home Page <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="sign_in_footer_bottom mt-3">
                    <p>Copyright © 2022 Worldwide. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>


    <!-- End Footer -->

</body>
  <!-- Vendor JS Files -->
  <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('frontend/assets/js/main.js')}}"></script>

  
    <script>
        function myFunction() {
          var x = document.getElementById("myPassword");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }
    </script>

</body>

</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>@yield('title')</title>
        <meta name="description" content="WORLDWIDE SERVICES is a financial services company that aims to facilitate the financial support of friends and families across the world.
    Keyword:  Worldwide Services, Worldwide Services Plumstead, 92a Plumstead High Street, Financial Services, Financial Services London, Remittance company, Remittance company London, Money Transfer Company, Money Transfer Company London.">
        <meta content="Worldwide West 2 East Services Limited, trading as WORLDWIDE SERVICES, is a financial services company that aims to facilitate the financial support of friends and families across the world. Established in 2011, we are a UK-based money transfer remittance service provider. The company's Financial Conduct Authority Reference number is 563795 and is registered with HMRC (MLR – 57885). Our registered address is at 92A Plumstead High Street, London, SE18 1SL." name="description">
        <meta content="worldwide, 563795, worldwidesvc, worldwide 563795, MLR – 57885, worldwide uk, worldwidesvc uk, 92A Plumstead High Street London – SE18 1SL, United Kingdom, +4402088557777" name="keywords">
        <meta content="Muhammad Ibrahim bin Karim | www.devsstream.com" name="author">
        <!-- Favicons -->
        <link href="{{asset('frontend/assets/img/logo/logo.png')}}" rel="icon">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <!-- Vendor CSS Files -->
        <link href="{{asset('frontend/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
        <!-- Template Main CSS File -->
        <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">
        <!-- --------------------carusel-------------------- -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
      </head>

      <body>
        <div class="bottom_cookies" id="cookie">
            <div class="container my-3">
              <div class="notice d-flex justify-content-between align-items-center">
                <div class="cookie-text" style="color:#D1D1D4">
                  <strong style="color:#fff">We use cookies in the delivery of our services.</strong>We use cookies to analyze website traffic and optimize your website experience. By accepting our use of cookies, your data will be aggregated with all other user data. <a href="cookies.html">learn more</a>
                </div>
                <div class="buttons d-flex flex-column flex-lg-row">
                  <a href="#" id="decline" class="btn btn-dark m-3 decline" data-dismiss="modal">Decline</a>
                  <a href="#" id="allow" class="btn btn-light m-3 allow" data-dismiss="modal">I'm okay with that</a>
                </div>
              </div>
            </div>
          </div>
          @include('layout.menu')

          @yield('content')

          @include('layout.footer')
                <!-- End Footer -->
                <a href="#" class="back-to-top ">
                    <i class="bi bi-arrow-up-short"></i>
                  </a>
                  <!-- Vendor JS Files -->
                  <script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
                  <script src="{{asset('frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
                  <script src="{{asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
                  <script src="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
                  <script src="{{asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script>
                  <!-- Template Main JS File -->
                  <script src="{{asset('frontend/assets/js/main.js')}}"></script>
                  <!-- cookies modal -->
                  <script src="../ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                  <script type="text/javascript" src="../cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
                  <script type="text/javascript">
                    $(document).ready(function() {
                      if ($.cookie('modal_shown') == null) {
                        // $('#cookie').modal('show');
                        $('#cookie').css('display', 'block');
                      }
                    });
                    $('#decline').click(function() {
                      $.cookie('modal_shown', 'yes', {
                        expires: 7,
                        path: 'http://127.0.0.1:8000/'
                      });
                      $('#cookie').css('display', 'none');
                    });
                    $('#allow').click(function() {
                      $.cookie('modal_shown', 'yes', {
                        expires: 7,
                        path: 'http://127.0.0.1:8000/'
                      });
                      $('#cookie').css('display', 'none');
                      // $('#cookie').modal('hide');
                    });
                  </script>
                  <!--Jquery -->
                  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
                  <!-- Owl Carousel -->
                  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
                  <!-- custom JS code after importing jquery and owl -->
                  <script type="text/javascript">
                    $(document).ready(function() {
                      $(".owl-carousel").owlCarousel();
                    });
                    $('.owl-carousel').owlCarousel({
                      loop: true,
                      margin: 20,
                      nav: true,
                      autoplay: true,
                      responsive: {
                        0: {
                          items: 1
                        },
                        768: {
                          items: 2
                        },
                        991: {
                          items: 2
                        }
                      }
                    })
                  </script>   
            </body>
        </html>
        
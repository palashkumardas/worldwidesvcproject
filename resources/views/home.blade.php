@extends('layout.app')

@section('title','Home | Worldwide Services')

@section('content')
  
        <!-- ======= Hero Section ======= -->
        <section class="hero_bg" style="background-image:url('frontend/assets/img/banner/home-bannwer-web.png'); background-size:cover;padding:20% 0;background-position: center;position: relative;">
          <div class="container">
            <p class="text-white hero_p text-center">We make a digital transformation to your <br> Business What we are offering, </p>
          </div>
        </section>
        <main id="main">
          <!-- ======= Featured Services Section ======= -->
          <section class="about-services pt-5">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <h1 class="text-white text-center">What we are offering</h1>
                </div>
              </div>
              <div class="row g-4">
                <!-- --------======---------- -->
                <div class="col-lg-4 col-md-6 col-12">
                  <div class="h-100  web-card">
                    <div style="height: 234px; display: flex;">
                      <img src="{{asset('frontend/assets/img/Laptop.png')}}" class="card-img-top" alt="...">
                    </div>
                    <div class="p-4">
                      <h6>Website Design</h6>
                      <p>We provide you a business website designed by us with our best IT support</p>
                    </div>
                  </div>
                </div>
                <!-- --------======---------- -->
                <div class="col-lg-4 col-md-6 col-12">
                  <div class="h-100  web-card">
                    <div style="height: 234px; display: flex;">
                      <img src="{{asset('frontend/assets/img/Mobile-Set3.png')}}" class="card-img-top">
                    </div>
                    <div class="p-4">
                      <h6>Mobile App</h6>
                      <p>Our best IT team will be there to give you quality & smooth app to run your business and easily get connected with customers.</p>
                    </div>
                  </div>
                </div>
                <!-- --------======---------- -->
                <div class="col-lg-4 col-md-6 col-12">
                  <div class="h-100  web-card">
                    <div style="height: 234px; display: flex;">
                      <img src="{{asset('frontend/assets/img/Shop.png')}}" class="card-img-top" alt="..." style="height:234px">
                    </div>
                    <div class="p-4">
                      <h6>Agent Portal, Face to Face terminal Card</h6>
                      <p>We provide you an efficient shop portal that will help you to attend your face to face customers</p>
                    </div>
                  </div>
                </div>
              </div>
          </section>
          <!-- End Featured Services Section -->
          <!-- ---------------about-section --------- -->
          <section class="about_section">
            <div class="container">
              <!-- --------============------------- -->
              <div class="row gx-2 gy-5 align-items-center justify-content-center">
                <div class="col-md-6 col-12 order-2 order-md-1">
                  <h2>Grow your business through digital transformation</h2>
                  <p class="about_section_content">We are offering money transfer services that will enable you to serve customers locally and internationally.</p>
                </div>
                <div class="col-md-6 col-12 order-1 order-md-2">
                  <div class="play_img">
                    <img class="img-fluid float-start float-md-end" src="{{asset('frontend/assets/img/home-about.png')}}" alt="">
                    <img class="img-fluid play_icon" src="{{asset('frontend/assets/img/Play.png')}}" alt="">
                  </div>
                </div>
              </div>
              <!-- ----------=========----------- -->
              <div class="row g-4 about_customer mt-5">
                <div class="col-lg-4 col-md-6 col-12">
                  <p class='badge ms-3'>1</p>
                  <h6>Measure your performance</h6>
                  <p>Do you want to start your own money transfer business? Do you want to grow your business exponentially through digital transformation? Then look no further. Worldwide Services is the answer for you.</p>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                  <p class='badge ms-3'>2</p>
                  <h6>Custom analytics</h6>
                  <p>We are offering money transfer services that will enable you to serve customers locally and internationally. Our state-of-the-art technology will let you carry out business transactions smoothly and hassle-free.</p>
                </div>
                <!-- -------==========------------ -->
                <div class="col-lg-4 col-md-6 col-12">
                  <p class='badge ms-3'>3</p>
                  <h6>Team Management</h6>
                  <p>We will provide you with a highly secure digital transformation package – an interactive website, a functional and efficient mobile app for online customers, and an Agent Portal Shop for face-to-face and local customers. </p>
                </div>
                <!-- -------==========------------ -->
                <div class="col-lg-4 col-md-6 col-12">
                  <p class='badge ms-3'>4</p>
                  <h6>Build your website</h6>
                  <p>Unlike other money transfer companies, your customers are entirely your own. Once they use your service and are satisfied with it, they will be your customers for life. </p>
                </div>
                <!-- -------==========------------ -->
                <div class="col-lg-4 col-md-6 col-12">
                  <p class='badge ms-3'>5</p>
                  <h6>Connect multiple apps</h6>
                  <p>Customer satisfaction is our utmost priority. Whether they want to physically visit the shop or do it online in the comfort of their own homes, we will make it possible for them.</p>
                </div>
                <!-- -------==========------------ -->
                <div class="col-lg-4 col-md-6 col-12">
                  <p class='badge ms-3'>6</p>
                  <h6>Easy setup</h6>
                  <p>So what are you waiting for? Contact us today, become our agent, and grab this exceptional opportunity to expand your business!</p>
                </div>
              </div>
            </div>
          </section>
          <!-- ------------agent-section--------- -->
          <section class="agent_section">
            <div class="container">
              <h2>Become An Agent</h2>
              <p>Joining Worldwide network could offer your business significant advantage and <br> give you the growth you’ve been seeking. Becoming an Agent is a simple and easy <br> process and we offer you constant support every step of the way. </p>
              <button class="agent_btn">Call us today</button>
            </div>
          </section>
          <!-- ----------agent-app----------- -->
          <section class="agent_app_section">
            <div class="container">
              <div class="row g-4 align-items-center">
                <div class="col-md-5 col-12">
                  <img class="img-fluid" src="{{asset('frontend/assets/img/agent-app.png')}}" alt="">
                </div>
                <div class="col-md-7 col-12 text-center">
                  <h2>Get your app ready for your business!</h2>
                  <p>Would you like to provide your customer an efficient, smooth, easily accessible mobile app? Get it done easily by our experts! We are there to help you to get the best version for your business! Consult with us we will make it easy for you.</p>
                  <h6>We provide you apps in both versions</h6>
                  <div class="row g-4 mt-2">
                    <div class="col-md-6 col-12">
                      <div class="aggent_card">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/Google_Play-Logo.wine.png')}}" alt="">
                        <h6>Google Play</h6>
                        <p>Combined with the ingredients makes for beautiful landings.</p>
                      </div>
                    </div>
                    <div class="col-md-6 col-12">
                      <div class="aggent_card">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/Bitmap.png')}}" alt="">
                        <h6>Apple Store</h6>
                        <p>Combined with the ingredients makes for beautiful landings.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- ------------home-carusel---------- -->
          <section class="home_carusel">
            <div class="container">
              <h3 class="ps-0 ps-md-5">Loved by so many people <br> around the world </h3>
              <div class="carusel_section mt-4">
                <div class="owl-carousel owl-theme px-5 pt-4">
                  <div class="item ">
                    <img style="width:30px" src="{{asset('frontend/assets/img/Shape.png')}}" alt="">
                    <p class="mt-1 mb-5 pb-3">For all my Freelancer / Small Agency followers, I wish I’d discovered Oval long ago - great templated contract.</p>
                    <div class="d-flex ">
                      <div>
                        <img class="img-fluid" src="{{asset('frontend/assets/img/Oval.png')}}" alt="">
                      </div>
                      <div class="item_bottom ms-2 ">
                        <h4>Jay Williams 🇰🇼 </h4>
                        <p>Product Designer</p>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <img style="width:30px" src="{{asset('frontend/assets/img/Shape.png')}}" alt="">
                    <p class="mt-1 mb-4">Oval is probably my all time favorite freelance tool. hands down. the team is super responsive and accessible when i have questions.</p>
                    <div class="d-flex ">
                      <div>
                        <img class="img-fluid" src="{{asset('frontend/assets/img/Oval (1).png')}}" alt="">
                      </div>
                      <div class="item_bottom ms-2 ">
                        <h4>Lydia Olson 🇷🇺</h4>
                        <p>Motion design / animator</p>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <img style="width:30px" src="{{asset('frontend/assets/img/Shape.png')}}" alt="">
                    <p class="mt-1 mb-5 pb-3">For all my Freelancer / Small Agency followers, I wish I’d discovered Oval long ago - great templated contract.</p>
                    <div class="d-flex ">
                      <div>
                        <img class="img-fluid" src="{{asset('frontend/assets/img/Oval.png')}}" alt="">
                      </div>
                      <div class="item_bottom ms-2 ">
                        <h4>Jay Williams 🇰🇼 </h4>
                        <p>Product Designer</p>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <img style="width:30px" src="{{asset('frontend/assets/img/Shape.png')}}" alt="">
                    <p class="mt-1 mb-4">Oval is probably my all time favorite freelance tool. hands down. the team is super responsive and accessible when i have questions.</p>
                    <div class="d-flex ">
                      <div>
                        <img class="img-fluid" src="{{asset('frontend/assets/img/Oval (1).png')}}" alt="">
                      </div>
                      <div class="item_bottom ms-2 ">
                        <h4>Lydia Olson 🇷🇺</h4>
                        <p>Motion design / animator</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- --------============-------- -->
              <div class="carusel_logo row g-4 align-items-center justify-content-center px-0">
                <div class="col-md-2 col-4 text-center">
                  <img class="img-fluid" src="{{asset('frontend//assets/img/carusel-logo/microsoft.png')}}" alt="">
                </div>
                <div class="col-md-2 col-4 text-center">
                  <img class="img-fluid" src="{{asset('frontend//assets/img/carusel-logo/google-newsep-2015-seeklogo.com.png')}}" alt="">
                </div>
                <div class="col-md-2 col-4  text-center">
                  <img class="img-fluid" src="{{asset('frontend//assets/img/carusel-logo/Fill-1.png')}}" alt="">
                </div>
                <div class="col-md-2 col-4 text-center">
                  <img class="img-fluid" src="{{asset('frontend//assets/img/carusel-logo/automatic.png')}}" alt="">
                </div>
                <div class="col-md-2 col-4 text-center">
                  <img class="img-fluid" src="{{asset('frontend//assets/img/carusel-logo/Bitmap.png')}}" alt="">
                </div>
                <div class=" col-md-2 col-4 text-center">
                  <img class="img-fluid" src="{{asset('frontend//assets/img/carusel-logo/Bitmap (1).png')}}" alt="">
                </div>
              </div>
              <p class="text-center text-white mt-5" style="font-family:'Poppins', sans-serif ;font-weight: 400;font-size: 14px;">Some of the many companies that rely on Oval to manage their project </p>
            </div>
          </section>
          <!-- ------------trust_us------------ -->
          <section class="trust-section text-center">
            <div class="container">
              <h2>WHO TRUST US</h2>
              <p>Partner Success Stories <i class="bi bi-angle-right"></i>
              </p>
              <div class="carusel_logo row g-4 align-items-center justify-content-center mt-5">
                <div class="col-md-2 col-4 text-center">
                  <img class="img-fluid" src="{{asset('frontend//assets/img/trust-img/google.png')}}" alt="">
                </div>
                <div class="col-md-2 col-4 text-center">
                  <img class="img-fluid" src="{{asset('frontend//assets/img/trust-img/Amazon logo.png')}}" alt="">
                </div>
                <div class="col-md-2 col-4  text-center">
                  <img class="img-fluid" src="{{asset('frontend//assets/img/trust-img/intel.png')}}" alt="">
                </div>
                <div class="col-md-2 col-4 text-center">
                  <img class="img-fluid" src="{{asset('frontend//assets/img/trust-img/gillette.png')}}" alt="">
                </div>
                <div class="col-md-2 col-4 text-center">
                  <img class="img-fluid" src="{{asset('frontend//assets/img/trust-img/cannon.png')}}" alt="">
                </div>
                <div class=" col-md-2 col-4 text-center">
                  <img class="img-fluid" src="{{asset('frontend//assets/img/trust-img/Atlassian logo.png')}}" alt="">
                </div>
              </div>
            </div>
          </section>
       
          @endsection

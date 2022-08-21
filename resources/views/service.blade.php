@extends('layout.app')

@section('title','Services | Worldwide Services')

@section('content')
  
    <!-- ======= Hero Section ======= -->
    <main id="main">
      <section class="service_section"
          style="background-image: url('frontend/assets/img/main_bg.png');background-size:cover;background-repeat:no-repeat;background-position:center;padding:50px 0">
          <div class="container">
              <div class="text-center">
                  <h2>Our Services</h2>
                  <h6><span><img class="img-fluid" style="margin-top:-5% ;" src="frontend/assets/img/“.png"
                              alt=""></span>How we make your <br>
                      business to have a <br>
                      Digital Transformation<span><img class="img-fluid ps-1" style="margin-top:-3% ;"
                              src="frontend/assets/img/”.png" alt=""></span></h6>
              </div>
              <div class="services_card">
                  <p>We provide you all the tools and facilites to start or to grow your money transfer busniess. If
                      you already have a shop we will provide to you 3 channels to develop your business: a web
                      platform/card machine to place remittances for your customers , a website and IOS/ANDROID APP to
                      your customers place remittances themselves. All 3 chanells are white labeled and we will add
                      your logo and your colour to help your customer to identify yourself and to keep his/her loyalty
                      to you.</p>
                  <p class="mt-4">
                      We also provide you a portal to check all transactions placed in all 3 chanels and a dedicated
                      bank account under your name where you will be able to see all your customers deposits and card
                      payments what will help us to make all remittances to be paid quickly and smoothly.</p>
              </div>
          </div>
      </section>
      <!-- --------service-product---------- -->
      <section class="service_product">
          <div class="container ">
              <div class="row gy-5 gx-4 align-items-center">
                  <!-- ---------=============---------------- -->
                  <div class="col-lg-3 col-12">
                      <div class=" service_img_card   web-card_one  m-0  ">
                          <div>
                              <img  src="frontend/assets/img/services/Your Logo Design 1.png" alt="">
                          </div>
                          <div class="p-4">
                              <h6>Dashboard</h6>
                              <p>We provide you a portal to check all transactions placed in all 3 channels what will
                                  help us to make all remittances to be paid quickly and smoothly</p>
                          </div>
                      </div>
                  </div>
                  <!-- -------=====----------- -->
                  <div class="col-md-1 d-none d-lg-block">
                      <img class="d-block m-auto dash_img" src="frontend/assets/img/Vector 1.png" alt="">
                  </div>
                  <!-- --------======---------- -->
                  <div class="col-lg-8 col-12 ">
                              <div class=" service_img_card  web-card_two d-flex flex-column flex-md-row ">
                                  <div class="service-width_img">
                                      <img  class="d-block m-auto" src="frontend/assets/img/Laptop.png"  alt="...">
                                  </div>
                                  <div class="p-4 service-width">
                                      <p
                                          style="background-color: #EFFAFF;padding:8px 6px;font-size:14px;color:#3CB4E7; text-align:center;border-radius: 10px;">
                                          Website white labaled with your logo</p>
                                      <h6>We will provide your business website with your logo.</h6>
                                      <p>Need your business website to be designed by us? We will be there with
                                          our best IT
                                          team.</p>
                                  </div>
                              </div>
                              <!-- ----------=======----- -->
                              <div class="service_img_card  web-card_two d-flex flex-column flex-md-row card_margin">
                                  <div class="service-width_img">
                                      <img class="d-block m-auto" src="frontend/assets/img/Mobile-Set3.png" >
                                  </div>
                                  <div class="p-4 service-width">
                                      <p
                                          style="background-color: #EFFAFF;padding:8px 6px;font-size:14px;color:#3CB4E7; border-radius: 10px;">
                                          IOS/ Android app white labaled with your logo</p>
                                      <h6>We will provide interactive ios/android app with your business logo.</h6>
                                      <p>Our best IT team will be there to give you quality & smooth app to run your
                                          business
                                          and easily get connected with customers.</p>
                                  </div>
                              </div>
                              <!-- --------============----- -->
                              <div class="service_img_card web-card_two  d-flex flex-column flex-md-row">
                                  <div class="service-width_img">
                                      <img class="d-block m-auto" src="frontend/assets/img/Shop.png"  alt="..."
                                          >
                                  </div>
                                  <div class="p-4 service-width">
                                      <p
                                          style="background-color: #EFFAFF;padding:8px 6px;font-size:14px;color:#3CB4E7; text-align:center;border-radius: 10px;">
                                          Agent Portal, Face to Face terminal Card</p>
                                      <h6>Get your agent portal access easy to run your business efficiently.</h6>
                                      <p>An efficient portal will help you to track your database easily, get your
                                          data store
                                          easily.An efficient portal will help you to track your database easily, get
                                          your
                                          data store easily.</p>
                                  </div>
                              </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- -----------surpport section-------- -->
      <section class="support-section">
          <div class="container">
              <div class="text-center">
                  <h6 class="support_title"><span><img class="img-fluid" style="margin-top:-3.5% ;"
                              src="frontend/assets/img/“ (1).png" alt=""></span> How we gonna pay you <br> and give
                      you <br> Support for that <span><img class="img-fluid" style="margin-top:-1.5% ;"
                              src="frontend/assets/img/” (1).png" alt=""></span></h6>
              </div>
              <div class="services_card" style="background:#C4EBFF!important ;">
                  <p> We will pay you comission for each remittance that you or your customer do. We will also provide
                      you a strong support team for any inquiry making your life easier and your business solid. Our
                      team are availabe 18 hours a day from monday to saturday and 6 hours on sundays and bank
                      holidays in the UK.
                      .</p>
                  <p class="mt-4">
                      We will also support and help you in marketing. Our IT and Marketing team have a dedicated
                      social media developer who will help you to boost your business. We will also suggest promotions
                      from time to time and if you accept the promotion we will promote it for you digitally.</p>
              </div>
          </div>
      </section>
      <section class="agent_section text-black" style="background:white ;">
          <div class="container">
              <h2>Become An Agent</h2>
              <p style="color: #202020;">Joining Worldwide network could offer your business significant advantage and
                  <br> give you the growth you’ve
                  been seeking. Becoming an Agent is a simple and easy <br> process and we offer you constant support
                  every step
                  of the way.
              </p>
              <button style="background-color: #57B5E6;color:white" class="agent_btn">Call us today</button>
          </div>
      </section>
      <!-- -----------service-carusel---------- -->
      <section class=" service-carusel"
          style="background-image: url('frontend/assets/img/main_bg.png');background-size:cover;background-repeat:no-repeat;background-position:center;background-color: transparent;padding: 50px 0;">
          <div class="container">
              <h3 class="ps-0 ps-md-5 text-black">Loved by so many people <br> around the world</h3>
              <div class="carusel_section mt-4">
                  <div class="owl-carousel owl-theme px-5 pt-4">
                      <div class="item h-100">
                          <img style="width:30px" src="{{asset('frontend/assets/img/Shape.png')}}" alt="">
                          <p class="mt-1 mb-5 pb-3">For all my Freelancer / Small Agency followers, I wish I’d
                              discovered Oval long ago - great templated contract.</p>
                          <div class="d-flex ">
                              <div><img class="img-fluid" src="{{asset('frontend/assets/img/Oval.png')}}" alt=""></div>
                              <div class="item_bottom ms-2 ">
                                  <h4>Jay Williams 🇰🇼 </h4>
                                  <p>Product Designer</p>
                              </div>
                          </div>
                      </div>
                      <div class="item h-100">
                          <img style="width:30px" src="{{asset('frontend/assets/img/Shape.png')}}" alt="">
                          <p class="mt-1 mb-4">Oval is probably my all time favorite freelance tool. hands down. the
                              team is super responsive and accessible when i have questions..</p>
                          <div class="d-flex ">
                              <div><img class="img-fluid" src="{{asset('frontend/assets/img/Oval (1).png')}}" alt=""></div>
                              <div class="item_bottom ms-2 ">
                                  <h4>Lydia Olson 🇷🇺</h4>
                                  <p>Motion design / animator</p>
                              </div>
                          </div>
                      </div>
                      <div class="item h-100">
                          <img style="width:30px" src="{{asset('frontend/assets/img/Shape.png')}}" alt="">
                          <p class="mt-1 mb-5 pb-3">For all my Freelancer / Small Agency followers, I wish I’d
                              discovered Oval long
                              ago -
                              great templated contract.</p>
                          <div class="d-flex ">
                              <div><img class="img-fluid" src="{{asset('frontend/assets/img/Oval.png')}}" alt=""></div>
                              <div class="item_bottom ms-2 ">
                                  <h4>Jay Williams 🇰🇼 </h4>
                                  <p>Product Designer</p>
                              </div>
                          </div>
                      </div>
                      <div class="item h-100">
                          <img style="width:30px" src="{{asset('frontend/assets/img/Shape.png')}}" alt="">
                          <p class="mt-1 mb-4">Oval is probably my all time favorite freelance tool. hands down. the
                              team is super
                              responsive and accessible when i have questions.</p>
                          <div class="d-flex ">
                              <div><img class="img-fluid" src="{{asset('frontend/assets/img/Oval (1).png')}}" alt=""></div>
                              <div class="item_bottom ms-2 ">
                                  <h4>Lydia Olson 🇷🇺</h4>
                                  <p>Motion design / animator</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

          </div>
      </section>

  </main>
  <!-- End #main -->
    @endsection
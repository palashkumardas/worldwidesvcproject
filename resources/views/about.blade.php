@extends('layout.app')

@section('title','About | Worldwide Services')
    <!-- ======= Hero Section ======= -->
    <!-- ======= Hero Section ======= -->
    @section('content')
    <div id="banner">
      <div class="container-fluid p-0">
        <div class="d-none d-md-block">
          <img src="{{asset('frontend/assets/img/banner/about-us-web.png')}}" class="img-fluid">
        </div>
        <div class="d-md-none d-sm-block">
          <img src="{{asset('frontend/assets/img/banner/about-us-mobile.png')}}" class="img-fluid">
        </div>
      </div>
    </div>
    <!-- End Hero -->
    <main id="main">
      <!-- ======= Featured Services Section ======= -->
      <section id="featured-services" class="featured-services">
        <div class=" about">
          <div class="container">
            <div class="row my-5">
              <div class="col-md-5">
                <div class="about_content_img_one">
                  <img src="{{asset('frontend/assets/img/about_img/Inside-Office.png')}}" alt="" class="img-fluid my-4">
                </div>
              </div>
              <div class="col-md-7 align-self-center">
                <p class="padding-left">Worldwide West 2 East Services Limited, trading as WORLDWIDE SERVICES, is a financial services company that aims to facilitate the financial support of friends and families across the world. Established in 2011, we are a UK-based money transfer remittance service provider. The company's Financial Conduct Authority Reference number is 563795 and is registered with HMRC (MLR – 57885). Our registered address is at 92A Plumstead High Street, London, SE18 1SL.</p>
              </div>
            </div>
          </div>
          <div style="background-image: url('frontend/assets/img/main_bg.png');background-repeat: no-repeat;background-size: cover;padding: 40px 0;">
            <div class="container ">
              <div class="row ">
                <div class="col-md-7 col-12 align-self-center order-lg-md-1 order-2">
                  <p class="padding-right">The necessity of money transfer stretches far beyond the essence of a transfer of funds. It plays a pivotal role in the lives of our loved ones, wherever they may be in the world, facilitating a better livelihood for those we hold dear to us. In this globalised world, we want to support the growth of all countries, bringing the interconnected countries closer together and essentially, we support small business of migrants providing a digital transformation to keep their business running and growing.</p>
                </div>
                <div class="col-md-5 col-12 order-md-2 order-1">
                  <div class="about_content_img_two">
                    <img src="{{asset('frontend/assets/img/about_img/Office111.png')}}" alt="" class="img-fluid float-md-end float-start my-4">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row my-5">
              <div class="col-md-5">
                <div class="about_content_img_three ">
                  <img src="{{asset('frontend/assets/img/about_img/Office.png')}}" alt="" class="img-fluid my-4">
                </div>
              </div>
              <div class="col-md-7 align-self-center">
                <p class="padding-left">WORLDWIDE SERVICES strives to ensure you receive the fairest service, offering market competitive rates and charges, alongside consistent support availability. With technology always changing around us, it is important to us to offer the different payment methods, so that the agents can continue to offer the service with liability to their customers and their loved ones to access their funds with ease. WORLDWIDE SERVICES feels privileged to play a part in supporting and affecting so many lives across the globe and for that reason our slogan is what it is because we indeed provide to our clients “integrity, accessibility and simplicity"</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Featured Services Section -->
    </main>
    <!-- End #main -->
    @endsection

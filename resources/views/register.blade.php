@extends('layout.app')
@section('title','Register | Worldwide Services')

@section('content')
  

    <main id="main">
      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact login">
        <div class="container">
          <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8 mt-5 mt-lg-0">
              <div class="bg-white p-2 rounded-pill d-block m-auto login_main">
                <a href="{{url('/login')}}">
                  <button class="l_common l_sign rounded-pill ">Sign In</button>
                </a>
                <button class="  l_common login_btn rounded-pill ">Sign UP</button>
              </div>
              <div class="mt-5">
                <div class="sign_in_card">
                  <div class="sign_in_content">
                    <h2>Sign Up</h2>
                    <p class="mt-3 mb-0">Create a free account to see our services</p>
                  </div>
                  <form action="http://worldwidesvc.com/register" method="post" class="mt-5">
                    <input type="hidden" name="_token" value="CZjjbjyQczX9Q74D8zvPXCr3c229vOQZHEeIKRKr">
                    <div class="form-group ">
                      <label for="" class="mb-1">First Name *</label>
                      <input type="text" class="form-control " name="first_name" placeholder="First name" value="" required>
                    </div>
                    <div class="form-group mt-3">
                      <label for="" class="mb-1">Address</label>
                      <input type="text" class="form-control " name="last_name" placeholder="Address" value="" required>
                    </div>
                    <div class="form-group mt-3">
                      <label for="" class="mb-1">Email address *</label>
                      <input type="email" class="form-control " placeholder="Email" name="email" value="" required autocomplete="email">
                    </div>
                    <div class="row">
                      <div class="form-group mt-3 col">
                        <label for="" class="mb-1">Phone Number *</label>
                        <input type="text" class="form-control " name="phone" placeholder="Phone Number" value="" required>
                      </div>
                      <div class="form-group mt-3">
                        <label for="" class="mb-1">Password</label>
                        <input type="password" class="form-control " name="password" required autocomplete="new-password" placeholder="********">
                      </div>
                      <div class="form-group mt-3">
                        <label for="" class="mb-1">Password </label>
                        <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="********">
                      </div>
                      <div class="mt-3">
                        <label for="">Contact Preferences*</label>
                        <br>
                        <small>Please tell us all the ways you want us to contact with you</small>
                        <div class='d-flex align-items-center justify-content-between mt-3'>
                          <div class="form-check me-4">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault11" />
                            <label class="form-check-label" for="flexCheckDefault11">
                              <h6>Email</h6>
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault11" />
                            <label class="form-check-label" for="flexCheckDefault11">
                              <h6>SMS</h6>
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault12" />
                            <label class="form-check-label" for="flexCheckDefault12">
                              <h6>Phone Call</h6>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="">
                        <!-- <div class="loading">Loading</div><div class="error-message"></div><div class="sent-message">Your message has been sent. Thank you!</div> -->
                      </div>
                      <!-- <div class="col-md-12"> -->
                      <button class="sign_in_button mt-4" type="submit">Submit </button>
                      <!-- </div> -->
                      <p align="center" class="mt-3 mb-0">Want to <a href="{{url('/login')}}" style="color: #3CB4E7; text-decoration:none;">login ?</a>
                      </p>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-2"></div>
          </div>
        </div>
      </section>
      <!-- End Contact Section -->
    </main>
    <!-- End #main -->
    @endsection
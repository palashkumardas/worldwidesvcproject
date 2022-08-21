@extends('layout.app')

@section('title','Login | Worldwide Services')


@section('content')
  
    <main id="main">

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact login">
            <div class="container">
                <div class="bg-white p-2 rounded-pill d-block m-auto login_main">
                    <button class="login_btn l_common rounded-pill ">Sign In</button>
                    <a href="{{url('/register')}}"><button class="  l_common l_sign rounded-pill ">Sign UP</button></a>
                </div>
                <div class="mt-5">
                    <div class="sign_in_card">
                        <div class="sign_in_content">
                            <h2>Sign in</h2>
                            <p>We’re so glad you’re here! Now let’s log in to your free account set up so you can
                                get going.</p>
                        </div>
                        <form action="http://worldwidesvc.com/login" method="post">
                            <input type="hidden" name="_token" value="CZjjbjyQczX9Q74D8zvPXCr3c229vOQZHEeIKRKr">
                            <div class="">
                                <label for="exampleFormControlInput1" class="form-label">Your Email</label>
                                <input type="email" class="form-control" placeholder="Email" required />
                            </div>
                            <div class="mt-4">
                                <label for="exampleFormControlInput1" class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="*********" required />
                            </div>

                            <div class="mb-5 mt-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"onclick="myFunction()">
                                    <label class="form-check-label" for="flexCheckDefault"style="font-family: 'Poppins'
                                    font-weight: 600;
                                    font-size: 14px;
                                    color:#000000;
                                    ">
                                        show password
                                    </label>
                                </div>
                                <div class="text-end" style="margin-top: -24px;">
                                    <a href="#" style="font-family: 'Poppins';
                                        font-weight: 600;
                                        font-size: 14px;
                                      color: black;">forgot password?</a>
                                </div>
                            </div>


                            <div class="my-3">
                                <!-- <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div> -->
                            </div>
                            <!-- <div class="col-md-12"> -->
                            <button class="sign_in_button_one w-100">Sign in </button>
                            <!-- </div> -->
                            <p align="center" class="mt-4" style="font-family: 'Poppins';
                            font-weight: 400;
                            font-size: 16px;
                          color: black;">don’t have an account ? <br><a href="{{url('/register')}}"
                                style="font-family: 'Poppins';
                                font-weight: 400;
                                font-size: 16px;
                              color: black;"><span style="color:#57B5E6;">sign up</span> </a>to create new
                                account
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </section><!-- End login Section -->
    </main><!-- End #main -->
    
    @endsection

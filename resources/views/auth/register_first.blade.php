@extends('auth.master')
@section('content')
@section('title')
  Register
@endsection

    <main id="main">

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8 mt-5 mt-lg-0">
                        <div class="sign_in_content">
                            <h2>Create a free account to see our services</h2>
                            <p>Fields marked with a star (*) must be completed.</p>
                        </div>
                        <div class="sign_in_content mt-5">
                            <h1>Create Account</h1>
                            <p>We have variety of services to provide you to make your business smooth, efficient and
                                enough!
                                create free account to get all our service pack details.</p>
                        </div>
                        <p align="center" class="mt-5">start creating account</p>
                        <a href="{{ route('register') }}"><button class="sign_in_button">Next <i class="bi bi-arrow-right"></i></button></a>
                        <!-- </div> -->
                        <p align="center" class="mt-3">already have an account ? <a href="{{ route('login') }}"
                            style="color: #000; text-decoration:underline;">sign in Now</a>
                    </p>
                    </div>
                    <div class="col-lg-2"></div>


                </div>

            </div>
        </section><!-- End Contact Section -->



    </main><!-- End #main -->
 
@endsection

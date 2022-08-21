@extends('auth.master')
@section('content')
@section('title','Login')

 
    <main id="main">

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6 mt-5 mt-lg-0">
                        <div class="sign_in_content">
                            <h2>Log in to see our services</h2>
                            <p>We have variety of services to provide you to make your business smooth, efficient and
                                enough! create free account to get all our service pack details.</p>
                        </div>
                        <form action="{{ route('login') }}" method="post">
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
                                <input type="password"  class="form-control @error('password') is-invalid @enderror"  name="password" placeholder="********************" required>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="d-flex">
                                <input type="checkbox" id="exampleCheck1" style="margin-top:14px">
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
                            <p align="center" class="mt-3">don’t have an account ? <a href="{{ route('user.register.show') }}"
                                    style="color: #000; text-decoration:underline;">sign up to create new account</a>
                            </p>
                        </form>
                    </div>
                    <div class="col-lg-3"></div>


                </div>

            </div>
        </section><!-- End Contact Section -->



    </main><!-- End #main -->

@endsection
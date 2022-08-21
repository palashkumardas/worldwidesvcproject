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
                        <form action="{{ url('register') }}" method="post"class="mt-5">
                            @csrf
                            <div class="form-group mt-3">
                                <label for="" class="mb-3">First Name *</label>
                                <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" placeholder="First name" value="{{ old('first_name') }}" required>

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mt-3">
                                <label for="" class="mb-3">Last Name *</label>
                                <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" placeholder="Last name" value="{{ old('last_name') }}" required>
                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label for="" class="mb-3">Email address *</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="form-group mt-3 col">
                                    <label for="">Mobile Number *</label>
                                  <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Mobile Number" value="{{ old('phone') }}" required>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group mt-3 col">
                                    <label for="inputState">Your Gender *</label>
                                    <select id="inputState" class="form-control" name="gender">
                                      <option selected>Choose...</option>
                                      <option value="Male"> Male</option>
                                      <option value="Female"> Female</option>
                                      <option value="Other"> Other</option>
                                    </select>
                                </div>
                              </div>

                            <div class="form-group mt-3">
                                <label for="inputState">Select  ​​your country *</label>
                                <select id="inputState" class="form-control" name="country">
                                  <option selected disabled="">Choose...</option>
                                  <option value="Unided Kingdom">Unided Kingdom</option>
                                  <option value="Brazil">Brazil</option>
                                </select>
                            </div>

                            <div class="form-group mt-3">
                                <label for="" class="mb-3">Password *</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mt-3">
                                <label for="" class="mb-3">Password *</label>
                                <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="my-3">
                                <!-- <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div> -->
                            </div>
                            <!-- <div class="col-md-12"> -->
                            <button class="sign_in_button" type="submit">Submit <i class="bi bi-arrow-right"></i></button>
                            <!-- </div> -->
                            <p align="center" class="mt-3">already have an account ? <a href="{{ route('login') }}"
                                    style="color: #000; text-decoration:underline;">sign in Now</a>
                            </p>
                        </form>
                    </div>
                    <div class="col-lg-2"></div>


                </div>

            </div>
        </section><!-- End Contact Section -->



    </main><!-- End #main -->
@endsection
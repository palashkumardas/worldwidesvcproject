@extends('auth.master')
@section('content')
@section('title','Verify Email Address')


    <main id="main">

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" style="height:300px">

                <div class="row justify-content-center" >
                    <div class="col-md-8">
                        <div class="card">
                            
                            <div class="card-header">
                                <h2 class="text-center" style="color:#59B5E7">Thanks you for registering with us</h2>
                                To complete your Registration
                            </div>

                            <div class="card-body">
                                @if (session('resent'))
                                    <div class="alert alert-success" role="alert">
                                        A fresh verification link has been sent to your email address.
                                    </div>
                                @endif

                                <strong>We've sent you an email that contains a link to verify your email address to complete your registration.</strong>
                                Please check your spam inbox if you can't find the mail.
                                <span>If you did not receive the email</span>
                                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                                </form>
                            </div>
                            <div class="card-footer">
                                <p class="text-center">Verify Your Email Address</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->
    </main><!-- End #main -->
@endsection


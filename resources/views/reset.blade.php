@extends('layout.app')

@section('title','Password Reset | Worldwide Services')
    <!-- ======= Hero Section ======= -->
    <!-- ======= Hero Section ======= -->
    @section('content')
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                   
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">
    
                        </ul>
    
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                                                                                        <li class="nav-item">
                                        <a class="nav-link" href="{{url('/login')}}">Login</a>
                                    </li>
                                
                                                                <li class="nav-item">
                                        <a class="nav-link" href="{{url('/register')}}">Register</a>
                                    </li>
                                                                            </ul>
                    </div>
                </div>
            </nav>
    
            <main class="py-4">
                <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Reset Password</div>
    
                    <div class="card-body">
                        
                        <form method="POST" action="http://worldwidesvc.com/password/email">
                            <input type="hidden" name="_token" value="CZjjbjyQczX9Q74D8zvPXCr3c229vOQZHEeIKRKr">
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">Email Address</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control " name="email" value="" required autocomplete="email" autofocus>
    
                                                                </div>
                            </div>
    
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Send Password Reset Link
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
            </main>
        </div>
@endsection
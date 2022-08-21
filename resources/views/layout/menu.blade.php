
        <!-- ======= Header ======= -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
            <div class="container">
              <a href="{{url('/')}}" class="img-fluid">
                <img src="{{asset('frontend/assets/img/logo/logo.png')}}" alt="">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link active" href="{{url('/')}}">Home </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/about')}}">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/service')}}">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/contact')}}">Contact Us</a>
                  </li>
                  <a class="nav-link join" href="{{url('/user')}}">Join Us</a>
                </ul>
              </div>
            </div>
          </nav>
          <!-- End Header-->
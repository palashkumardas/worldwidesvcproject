<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User Profile-->
        <div class="user-profile">
            <div class="user-pro-body">
                <div>
                    <img src="{{asset('backend/assets/images/logo.jpg')}}" alt="user-img" class="img-circle">
                </div>
                <div class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu" data-toggle="dropdown" role="button" aria-haspopup="true"
                        {{-- aria-expanded="false">{{Auth::admin()->name}} --}}
                        <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu animated flipInY">
                        <!-- text-->
                        <a href="javascript:void(0)" class="dropdown-item">
                            <i class="ti-user"></i> My Profile</a>
                        <!-- text-->
                        <!-- text-->
                        <div class="dropdown-divider"></div>
                        <!-- text-->
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off"></i> Logout</a>
                        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                            
                        <!-- text-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li>
                    <a class="waves-effect waves-dark" href="{{ url('admin/dashboard') }}" aria-expanded="false">
                        <i class="icon-speedometer"></i> 
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-bar-chart-alt"></i><span class="hide-menu">Settings</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('admin.about') }}">About Us</a></li>
                        <li><a href="{{ route('admin.contact') }}">Contact Us</a></li>
                        <li><a href="{{ route('admin.policy') }}">Privacy & Policy</a></li>
                        <li><a href="{{ route('admin.terms') }}">Terms & Condition</a></li>
                        <li><a href="{{ route('admin.cookies') }}">Cookies Policy</a></li>
                       
                    </ul>
                </li>
               
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="icon-speedometer"></i> 
                        <span class="hide-menu">Services</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Testimonial</a></li>
                    </ul>
                </li>
                           
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="icon-speedometer"></i> 
                        <span class="hide-menu">Partners</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('partner.index') }}">Our Partners</a></li>
                        <li><a href="{{ route('payout-partner.index') }}">Payout Partners</a></li>
                    </ul>
                </li>
            
               
                <li>
                    <a class="waves-effect waves-dark" href="{{ route('user.list') }}" aria-expanded="false">
                        <i class="icon-speedometer"></i> 
                        <span class="hide-menu">User List</span>
                    </a>
                </li>
            

                <!-- <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-user"></i>
                        <span class="hide-menu">User</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="{{ url('users') }}">User List</a>
                        </li>
                    </ul>
                </li> -->
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
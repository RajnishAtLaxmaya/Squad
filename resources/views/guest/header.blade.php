<header class="header">
        <div class="header-inner">
            <nav
                class="navbar navbar-expand-lg bg-barren barren-head navbar fixed-top justify-content-sm-start pt-0 pb-0">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon">
                            <i class="fa-solid fa-bars"></i>
                        </span>
                    </button>
                    <a class="navbar-brand order-1 order-lg-0 ml-lg-0 ml-2 me-auto" href="{{route('home')}}">
                        <div class="res-main-logo">
                            <img src="images/logo-icon.svg" alt="">
                        </div>
                        <div class="main-logo" id="logo">
                            <img src="images/logo.svg" alt="">
                            <img class="logo-inverse" src="images/dark-logo.svg" alt="">
                        </div>
                    </a>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <div class="offcanvas-logo" id="offcanvasNavbarLabel">
                                <img src="images/logo-icon.svg" alt="">
                            </div>
                            <button type="button" class="close-btn" data-bs-dismiss="offcanvas" aria-label="Close">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>
                        <div class="offcanvas-body">
                            <div class="offcanvas-top-area">
                               
                            </div>
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe_5">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Explore Events
                                    </a>
                                    <ul class="dropdown-menu dropdown-submenu">
                                        <li><a class="dropdown-item" href="explore_events.html">Explore Events</a></li>
                                        <li><a class="dropdown-item" href="venue_event_detail_view.html">Venue Event
                                                Detail View</a></li>
                                        <li><a class="dropdown-item" href="online_event_detail_view.html">Online Event
                                                Detail View</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pricing.html">Pricing</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Blog
                                    </a>
                                    <ul class="dropdown-menu dropdown-submenu">
                                        <li><a class="dropdown-item" href="our_blog.html">Our Blog</a></li>
                                        <li><a class="dropdown-item" href="blog_detail_view.html">Blog Detail View</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Help
                                    </a>
                                    <ul class="dropdown-menu dropdown-submenu">
                                        <li><a class="dropdown-item" href="faq.html">FAQ</a></li>
                                        <li><a class="dropdown-item" href="help_center.html">Help Center</a></li>
                                        <li><a class="dropdown-item" href="contact_us.html">Contact Us</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Pages
                                    </a>
                                    <ul class="dropdown-menu dropdown-submenu">
                                        
                                       
                                       
                                   
                                       
                                        <li><a class="dropdown-item" href="{{route('privacy_policy')}}">Terms &
                                                Conditions</a></li>
                                        <li><a class="dropdown-item" href="{{route('terms_and_conditions')}}">Privacy Policy</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="offcanvas-footer">
                            <div class="offcanvas-social">
                                <h5>Follow Us</h5>
                                <ul class="social-links">
                                    <li><a href="#" class="social-link"><i
                                                class="fab fa-facebook-square"></i></a>
                                    <li><a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                                    <li><a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                                    <li><a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                                    <li><a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="right-header order-2">
                        <ul class="align-self-stretch">
                            
                            <li class="create-btn " data-bs-toggle="modal" data-bs-target="#loginModal">
                                {{-- <select class="custom-select" id="signin-dropdown" onchange="navigateToPage()">
									<option selected disabled>Sign In</option>
									<option value="/signin-user">User</option>
									<option value="/org-signin">Organiser</option>
									<option value="/signin-admin">Admin</option>
								</select> --}}
                                Log In
                            </li>
                            <li class="dropdown account-dropdown">
                                <a href="#" class="account-link" role="button" id="accountClick"
                                    data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="https://img.freepik.com/premium-photo/male-female-profile-avatar-user-avatars-gender-icons_1020867-75342.jpg" alt="">
                                    <i class="fas fa-caret-down arrow-icon"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-account dropdown-menu-end"
                                    aria-labelledby="accountClick">
                                    <li>
                                        <div class="dropdown-account-header">
                                            <div class="account-holder-avatar">
                                                <img src="https://img.freepik.com/premium-photo/male-female-profile-avatar-user-avatars-gender-icons_1020867-75342.jpg" alt="">
                                            </div>
                                            <h5>Guest</h5>
                                          
                                        </div>
                                    </li>
                                  
                                </ul>
                            </li>
                            <li>
                                <div class="night_mode_switch__btn">
                                    <div id="night-mode" class="fas fa-moon fa-sun"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="overlay"></div>
        </div>
    </header>
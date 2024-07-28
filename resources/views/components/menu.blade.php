<header>
    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-wrapper d-flex align-items-center justify-content-between">
                            <div class="header-left d-flex align-items-center justify-content-between">
                                <!-- Logo-->
                                <div class="logo logo-large light-logo">
                                    <a href="{{route('home')}}"><img
                                            src="{{asset('assets/images/logo/Logo-charitfix.png')}}" alt="logo"></a>
                                </div>
                                <!-- Logo Mobile-->
                                <div class="logo logo-mobile light-logo">
                                    <a href="{{route('home')}}"><img src="assets/images/icon/favicon.png" alt="img"></a>
                                </div>
                            </div>
                            <div class="search-container">
                                <input type="text" id="searchField" class="search-field" placeholder="Search...">
                                <button id="closeSearch" class="close-search-btn"><i class="ri-close-line"></i>
                                </button>
                            </div>

                            <!-- Main-menu for desktop -->
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul class="listing" id="navigation">
                                        <li class="single-list"><a href="{{route('home')}}"
                                                class="single {{request()->is('/')? 'active': ""}}">Home</a></li>

                                        <li class="single-list"><a href="{{route('about')}}"
                                                class="single {{request()->is('about')? 'active': ""}}">About</a></li>

                                        <li class="single-list"><a href="donation.html" class="single">Donation</a></li>

                                        <li class="single-list"><a href="{{route('blogs')}}"
                                                class="single {{request()->is('blogs') ? 'active': ""}}">Blog</a>
                                        </li>

                                        <li class="single-list">
                                            <a href="javascript:void(0)" class="single">Pages <i
                                                    class="ri-arrow-down-s-line"></i></a>
                                            <ul class="submenu">
                                                <li class="single-list"><a href="volunteer.html"
                                                        class="single">Volunteer</a></li>
                                                <li class="single-list"><a href="donate-payment.html"
                                                        class="single">donate pay</a></li>
                                                <li class="single-list"><a href="blog-details.html" class="single">Blog
                                                        Details</a></li>
                                                <li class="single-list"><a href="event-details.html"
                                                        class="single">event Details</a></li>
                                                <li class="single-list"><a href="donation-details.html"
                                                        class="single">donation Details</a></li>
                                                <li class="single-list"><a href="volunteer-details.html"
                                                        class="single">Volunteer Details</a></li>
                                                <li class="single-list">
                                                    <a href="javascript:void(0)" class="single">Login<i
                                                            class="ri-arrow-right-s-line"></i></a>
                                                    <ul class="submenu">
                                                        <li class="single-list"><a href="login.html"
                                                                class="single">Login</a></li>
                                                        <li class="single-list"><a href="register.html"
                                                                class="single">Registration</a></li>
                                                        <li class="single-list"><a href="forgot-pass.html"
                                                                class="single">Forgot Password</a></li>
                                                        <li class="single-list"><a href="verification.html"
                                                                class="single">Verification</a></li>
                                                        <li class="single-list"><a href="new-password.html"
                                                                class="single">New Password</a></li>
                                                    </ul>
                                                </li>
                                                <li class="single-list"><a href="faq.html" class="single">FAQs</a></li>
                                                <li class="single-list"><a href="privacy-policy.html"
                                                        class="single">privacy policy</a></li>
                                                <li class="single-list"><a href="terms-condition.html"
                                                        class="single">terms-condition</a></li>
                                            </ul>
                                        </li>
                                        <li class="single-list"><a href="{{route('contact')}}" class="single {{request()->is('contact') ? 'active': ""}}">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                            <div class="header-right">
                                <div class="cart">
                                    <!-- search button -->
                                    <a href="javascript:void(0)" class="rounded-btn search-bar"><i
                                            class="ri-search-line"></i></a>
                                    <a href="{{route('login')}}" class="btn-primary-fill pill-btn">Log
                                        in</a>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="div">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
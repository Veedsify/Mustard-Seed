@extends("layout.home.app")
@section("content")
    <div class="loading-page" id="preloader-active">
      <div class="counter">
          <p class="text text-capitalize">loading</p>
          <span class="number">0%</span>
          <span class="line"></span>
      </div>
    </div>
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
                      <a href="index.html"><img src="assets/images/logo/Logo-charitfix.png" alt="logo"></a>
                    </div>
                    <!-- Logo Mobile-->
                    <div class="logo logo-mobile light-logo">
                      <a href="index.html"><img src="assets/images/icon/favicon.png" alt="img"></a>
                    </div>
                  </div>

                  <div class="search-container">
                    <input type="text" id="searchField" class="search-field" placeholder="Search...">
                    <button id="closeSearch" class="close-search-btn"><i class="ri-close-line"></i></button>
                  </div>

                  <!-- Main-menu for desktop -->

                  <div class="header-right">
                    <div class="cart">
                        <!-- search button -->
                        <a href="javascript:void(0)" class="rounded-btn search-bar"><i class="ri-search-line"></i></a>
                        <a href="login.html" class="btn-primary-fill pill-btn">Log in</a>
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
    <main>
      <!-- Hero area S t a r t-->
      <section class="hero-area">
        <div class="single-slider hero-padding">
          <div class="container">
            <div class="row justify-content-between">
              <div class="col-xxl-6 col-xl-6 col-lg-6 my-auto">
                <div class="hero-caption-one mb-20">
                  <h4 class="key-title font-700 mb-20 wow fadeInUp" data-wow-delay="0.0s">Speak Hope for the Homeless</h4>
                  <h1 class="title font-700 wow fadeInUp" data-wow-delay="0.1s">Donate to children & senior citizens</h1>
                  <p class="pera wow fadeInUp" data-wow-delay="0.3s">Involves donating one's body after death for medical research, education, or anatomical dissection. Body donation plays a crucial role in advancing medical science</p>
                  <div class="d-flex gap-20 flex-wrap">
                    <a href="donation.html" class="btn-primary-fill hero-btn wow fadeInLeft" data-wow-delay="0.4s">Donate Now</a>
                    <a href="volunteer.html" class="btn-tertiary-fill hero-btn wow fadeInRight" data-wow-delay="0.4s">Join Volunteers</a>
                  </div>
                </div>
              </div>
              <div class="col-xxl-6 col-xl-6 col-lg-6">
                <div class="d-flex gap-44">
                  <div class="hero-image position-relative d-none d-lg-block">
                    <img src="assets/images/hero/hero-1.png" alt="img" class="w-100 tilt-effect wow fadeInUp" data-wow-delay="0.1s">
                  </div>
                  <div class="hero-count-section flex flex-column gap-60">
                    <div class="hero-count wow fadeInUp" data-wow-delay="0.0s">
                      <h4 class="title">12+</h4>
                      <p class="pera">
                        Years of <br>
                        Experience
                      </p>
                    </div>
                    <div class="hero-count wow fadeInUp" data-wow-delay="0.2s">
                      <h4 class="title">140+</h4>
                      <p class="pera">
                        Thousands <br>
                        volunteers
                      </p>
                    </div>
                    <div class="hero-count  wow fadeInUp" data-wow-delay="0.3s">
                      <h4 class="title">500+</h4>
                      <p class="pera">
                        Worid wide <br>
                        Offices
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End-of Hero-->

      <!-- helpful area S t a r t-->
      <section class="helpful-area">
        <div class="container">
          <div class="row gy-24">
            <div class="col-xl-3 col-md-6 col-lg-6">
              <div class="helpful-card h-calc  wow fadeInLeft" data-wow-delay="0.2s">
                <div class="helpful-card-icon">
                  <i class="ri-shake-hands-line"></i>
                </div>
                <div class="helpful-card-caption">
                  <h4 class="caption-title">Support</h4>
                  <p class="caption-para">When deciding which charity to donate to, it important to do your research.</p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 col-lg-6">
              <div class="helpful-card h-calc  wow fadeInLeft" data-wow-delay="0.0s">
                <div class="helpful-card-icon">
                  <i class="ri-graduation-cap-line"></i>
                </div>
                <div class="helpful-card-caption">
                  <h4 class="caption-title">Education</h4>
                  <p class="caption-para">When deciding which charity to donate to, it important to do your research.</p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 col-lg-6">
              <div class="helpful-card h-calc wow fadeInRight" data-wow-delay="0.0s">
                <div class="helpful-card-icon">
                  <i class="ri-user-line"></i>
                </div>
                <div class="helpful-card-caption">
                  <h4 class="caption-title">Volunteers</h4>
                  <p class="caption-para">When deciding which charity to donate to, it important to do your research.</p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 col-lg-6">
              <div class="helpful-card h-calc  wow fadeInRight" data-wow-delay="0.2s">
                <div class="helpful-card-icon">
                  <i class="ri-money-dollar-circle-line"></i>
                </div>
                <div class="helpful-card-caption">
                  <h4 class="caption-title">Donations</h4>
                  <p class="caption-para">When deciding which charity to donate to, it important to do your research.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End-of helpful-->

      <!-- urgent Area S t a r t -->
      <section class="urgent-area section-padding2">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-7">
              <!-- Section Tittle -->
              <div class="section-tittle text-center mb-50">
                <span class="sub-tittle text-capitalize font-600">In urgent cases</span>
                <h2 class="title font-700">The best way is to find yourself</h2>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-xxl-7 col-xl-8 col-lg-8 p-0 urgent-area-slide xs-p-12">
              <!-- Single Slider-->
              <div class="image-container position-relative h-100">
                <img class="w-100 h-100" src="assets/images/gallery/urgent-1.png" alt="img">
                <div class="image-overlay-text">
                  <div class="flex gap-20 mb-10">
                    <div class="edu flex gap-10">
                      <i class="ri-file-3-line"></i>
                      <p class="pera">Education</p>
                    </div>
                    <div class="map flex gap-10">
                      <i class="ri-map-pin-line"></i>
                      <p class="pera">Africa</p>
                    </div>
                  </div>
                  <div class="overlay-title">
                    <h4 class="title max-w-567">
                      Help differently abled children So
                      feel confident
                    </h4>
                  </div>
                </div>
              </div>
              <!-- Single Slider-->
              <div class="image-container position-relative h-100">
                <img class="w-100 h-100" src="assets/images/gallery/urgent-1.png" alt="img">
                <div class="image-overlay-text">
                  <div class="flex gap-20 mb-16">
                    <div class="edu flex gap-10">
                      <i class="ri-file-3-line"></i>
                      <p class="pera">Education</p>
                    </div>
                    <div class="map flex gap-10">
                      <i class="ri-map-pin-line"></i>
                      <p class="pera">Africa</p>
                    </div>
                  </div>
                  <div class="overlay-title">
                    <h4 class="title max-w-567">
                      Help differently abled children So
                      feel confident
                    </h4>
                  </div>
                </div>
              </div>
              <!-- Single Slider -->
              <div class="image-container position-relative h-100">
                <img class="w-100 h-100" src="assets/images/gallery/urgent-1.png" alt="img">
                <div class="image-overlay-text">
                  <div class="flex gap-20 mb-16">
                    <div class="edu flex gap-10">
                      <i class="ri-file-3-line"></i>
                      <p class="pera">Education</p>
                    </div>
                    <div class="map flex gap-10">
                      <i class="ri-map-pin-line"></i>
                      <p class="pera">Africa</p>
                    </div>
                  </div>
                  <div class="overlay-title">
                    <h4 class="title max-w-567">
                      Help differently abled children So
                      feel confident
                    </h4>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xxl-3 col-xl-4 col-lg-4 p-0 xs-p-12">
              <div class="image-right-card">
                <div class="tab-section tab-section-one" id="tab-section-one">
                  <div class="counting-day flex gap-10 mb-10">
                    <i class="ri-time-line"></i>
                    <p class="pera">652 Days Remaining</p>
                  </div>
                  <div>
                    <h4 class="title">The Universal Hands-free lighting Solution</h4>
                  </div>
                  <div>
                    <p class="subtitle">Fund programs that help children escape poverty by providing vocational training.</p>
                  </div>
                  <div class="progress custom-progress">
                    <div class="progress-bar" style="width: 65%">
                      <p class="pera">65%</p>
                    </div>
                  </div>
                  <div class="flex justify-content-between mt-8">
                    <div class="charges">
                      <h4 class="title">Goals</h4>
                      <p class="pera">$15.000</p>
                    </div>
                    <div class="charges">
                      <h4 class="title">Raised</h4>
                      <p class="pera">$15.000</p>
                    </div>
                    <div class="forward-btn">
                      <i class="ri-reply-fill"></i>
                    </div>
                  </div>
                </div>
                <div class="tab-section tab-section-two" id="tab-section-two">
                  <div class="counting-day flex gap-10 mb-10">
                    <i class="ri-time-line"></i>
                    <p class="pera">652 Days Remaining</p>
                  </div>
                  <div>
                    <h4 class="title">The Universal Hands-free lighting Solution</h4>
                  </div>
                  <div>
                    <p class="subtitle">Fund programs that help children escape poverty by providing vocational training.</p>
                  </div>
                  <div class="progress custom-progress">
                    <div class="progress-bar" style="width: 25%">
                      <p class="pera">25%</p>
                    </div>
                  </div>
                  <div class="flex justify-content-between mt-8">
                    <div class="charges">
                      <h4 class="title">Goals</h4>
                      <p class="pera">$15.000</p>
                    </div>
                    <div class="charges">
                      <h4 class="title">Raised</h4>
                      <p class="pera">$15.000</p>
                    </div>
                    <div class="forward-btn">
                      <i class="ri-reply-fill"></i>
                    </div>
                  </div>
                </div>
                <div class="flex justify-content-center mt-30">
                  <div class="tab-btn">
                    <a href="javascript:void(0)" class="urgent-tab active" data-tab-id="tab-section-one">Donate</a>
                    <a href="javascript:void(0)" class="urgent-tab" data-tab-id="tab-section-two">Details</a>
                  </div>
                </div>

                <!-- Your tab sections remain the same -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End-of urgent area -->

      <!-- Any Question Area S t a r t -->
      <section class="question-area bottom-padding">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 my-auto">
              <!-- Section Tittle -->
              <div class="section-tittle mb-50">
                <h2 class="title font-700">Any Questions</h2>
                <p class="pera">When deciding which charity to donate to, it's important to do your search and find one that aligns with your values and interests.</p>
              </div>
              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Have you weighed the potential risks and benefits?</button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">When deciding which charity to donate to, it's important to do your search.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed additional-styles" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">How will you gather feedback from stakeholders</button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">When deciding which charity to donate to, it's important to do your search.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed additional-styles" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">There any sustainability or ethical to take into account?</button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">When deciding which charity to donate to, it's important to do your search.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed additional-styles" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">There any sustainability or ethical to take into account?</button>
                  </h2>
                  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">When deciding which charity to donate to, it's important to do your search.</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-5">
              <img class="w-100 d-none d-lg-block tilt-effect" src="assets/images/gallery/que.png" alt="image">
            </div>
          </div>
        </div>
      </section>
      <!-- End-of Question Area -->

      <!-- Our event S t a r t-->
      <section class="our-event bottom-padding">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-7">
              <!-- Section Tittle -->
              <div class="section-tittle text-center mb-50">
                <span class="sub-tittle text-capitalize font-600">Our event</span>
                <h2 class="title font-700">Our Upcoming Events</h2>
              </div>
            </div>
          </div>
          <div class="row gy-24">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 view-wrapper">
              <div class="single-event h-calc wow fadeInUp" data-wow-delay="0.0s">
                <div class="event-img position-relative">
                  <a href="event-details.html"> <img src="assets/images/gallery/event-2.png" class="img-fluid w-100" alt="img"> </a>
                </div>
                <div class="event-info">
                  <div class="d-flex justify-content-between align-items-center gap-6">
                    <div class="event-info-title">
                      <div class="flex gap-15 mb-18 align-items-center flex-wrap">
                        <div class="date flex gap-12 align-items-center">
                          <i class="ri-time-line"></i>
                          <p class="info">30 Jun 2023</p>
                        </div>
                        <div class="map flex gap-12 align-items-center">
                          <i class="ri-map-pin-line"></i>
                          <p class="info">South . Korea</p>
                        </div>
                      </div>
                      <h4><a class="title text-capitalize" href="event-details.html">Free medical camping</a></h4>
                    </div>
                    <a href="event-details.html" class="btn-arrow"><i class="ri-arrow-right-line"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 view-wrapper">
              <div class="single-event h-calc wow fadeInUp" data-wow-delay="0.1s">
                <div class="event-img position-relative">
                  <a href="event-details.html"> <img src="assets/images/gallery/event-3.png" class="img-fluid w-100" alt="img"> </a>
                </div>
                <div class="event-info">
                  <div class="d-flex justify-content-between align-items-center gap-6">
                    <div class="event-info-title">
                      <div class="flex gap-15 mb-18 align-items-center flex-wrap">
                        <div class="date flex gap-12 align-items-center">
                          <i class="ri-time-line"></i>
                          <p class="info">30 Jun 2023</p>
                        </div>
                        <div class="map flex gap-12 align-items-center">
                          <i class="ri-map-pin-line"></i>
                          <p class="info">South . Korea</p>
                        </div>
                      </div>
                      <h4><a class="title text-capitalize" href="event-details.html">Free medical camping</a></h4>
                    </div>
                    <a href="event-details.html" class="btn-arrow"><i class="ri-arrow-right-line"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 view-wrapper">
              <div class="single-event h-calc wow fadeInUp" data-wow-delay="0.2s">
                <div class="event-img position-relative">
                  <a href="event-details.html"> <img src="assets/images/gallery/event-2.png" class="img-fluid w-100" alt="img"> </a>
                </div>
                <div class="event-info">
                  <div class="d-flex justify-content-between align-items-center gap-6">
                    <div class="event-info-title">
                      <div class="flex gap-15 mb-18 align-items-center flex-wrap">
                        <div class="date flex gap-12 align-items-center">
                          <i class="ri-time-line"></i>
                          <p class="info">30 Jun 2023</p>
                        </div>
                        <div class="map flex gap-12 align-items-center">
                          <i class="ri-map-pin-line"></i>
                          <p class="info">South . Korea</p>
                        </div>
                      </div>
                      <h4><a class="title text-capitalize" href="event-details.html">Free medical camping</a></h4>
                    </div>
                    <a href="event-details.html" class="btn-arrow"><i class="ri-arrow-right-line"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End-of All Product -->

      <!-- Testimonial S t a r t-->
      <section class="testimonial-section bottom-padding">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-7">
              <!-- Section Tittle -->
              <div class="section-tittle text-center mb-50">
                <span class="sub-tittle text-capitalize font-600">Testimonials</span>
                <h2 class="title font-700">What People Say</h2>
              </div>
            </div>
          </div>
          <div class="row justify-content-center g-24">
            <div class="col-lg-10 col-12 testimonial-slider">
              <div class="single-testimonial position-relative">
                <div class="client-info">
                  <div class="client-details">
                    <h3 class="name">Robart Jonson</h3>
                    <p class="location">United , Canada</p>
                  </div>
                  <div class="rating">
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                  </div>
                </div>
                <div class="position-relative">
                  <p class="pera">
                    <i>These questions are used to provoke thought and discussion. They can be used to challenge the other person's assumptions, such as "Do you really think that's true?", or to get them to think about a different perspective, such as "What if we tried it this way? The specific questions to ask may vary depending on the context and the information you are seeking.</i>
                  </p>
                  <div class="position-absolute quote">
                    <div class="rounded-btn">
                      <i class="ri-double-quotes-r"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="single-testimonial position-relative">
                <div class="client-info">
                  <div class="client-details">
                    <h3 class="name">Adam John</h3>
                    <p class="location">United , UAE</p>
                  </div>

                  <div class="rating">
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                  </div>
                </div>
                <div class="position-relative">
                  <p class="pera pb-80">
                    <i>These questions are used to provoke thought and discussion. They can be used to challenge the other person's assumptions, such as "Do you really think that's true?", or to get them to think about a different perspective, such as "What if we tried it this way? The specific questions to ask may vary depending on the context and the information you are seeking.</i>
                  </p>
                  <div class="position-absolute quote">
                    <div class="rounded-btn">
                      <i class="ri-double-quotes-r"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="single-testimonial position-relative">
                <div class="client-info">
                  <div class="client-details">
                    <h3 class="name">John Doe</h3>
                    <p class="location">Mexico, USA</p>
                  </div>

                  <div class="rating">
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                  </div>
                </div>
                <div class="position-relative">
                  <p class="pera pb-80">
                    <i>These questions are used to provoke thought and discussion. They can be used to challenge the other person's assumptions, such as "Do you really think that's true?", or to get them to think about a different perspective, such as "What if we tried it this way? The specific questions to ask may vary depending on the context and the information you are seeking.</i>
                  </p>
                  <div class="position-absolute quote">
                    <div class="rounded-btn">
                      <i class="ri-double-quotes-r"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End-of Testimonial -->

      <!-- Blog S t a r t -->
      <section class="blog-section bottom-padding">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-7">
              <!-- Section Tittle -->
              <div class="section-tittle text-center mb-50">
                <span class="sub-tittle text-capitalize font-600">Blog</span>
                <h2 class="title font-700">Our Blog & Feeds</h2>
              </div>
            </div>
          </div>
          <div class="row gy-24">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 view-wrapper">
              <div class="single-blog h-calc wow fadeInUp" data-wow-delay="0.2s">
                <div class="blog-img position-relative">
                  <a href="blog-details.html"> <img src="assets/images/gallery/blog-1.png" class="img-fluid w-100" alt="img"> </a>
                </div>
                  <div class="blog-info">
                      <div class="blog-info-title">
                        <div class="flex gap-16 align-items-center">
                          <div class="user flex gap-10 align-items-center">
                            <i class="ri-user-line"></i>
                            <p class="info">By: admin</p>
                          </div>
                          <div class="donate flex gap-10 align-items-center">
                            <i class="ri-chat-3-line"></i>
                            <p class="info">Donation</p>
                          </div>
                        </div>
                        <h4 class="title text-capitalize"><a href="blog-details.html">We assure you that your donation will be used wisely.</a></h4>
                        <p class="subtitle">We understand that there are many people organization The seeking support,</p>
                      </div>
                  </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 view-wrapper">
              <div class="single-blog h-calc wow fadeInUp" data-wow-delay="0.0s">
                <div class="blog-img position-relative">
                  <a href="blog-details.html"> <img src="assets/images/gallery/blog-2.png" class="img-fluid w-100" alt="img"> </a>

                </div>
                <div class="blog-info">
                  <div class="blog-info-title">
                    <div class="flex gap-16 align-items-center">
                      <div class="user flex gap-10 align-items-center">
                        <i class="ri-user-line"></i>
                        <p class="info">By: admin</p>
                      </div>
                      <div class="donate flex gap-10 align-items-center">
                        <i class="ri-chat-3-line"></i>
                        <p class="info">Donation</p>
                      </div>
                    </div>
                    <h4 class="title text-capitalize"><a href="blog-details.html">We assure you that your donation will be used wisely.</a></h4>
                    <p class="subtitle">We understand that there are many people organization The seeking support,</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 view-wrapper">
              <div class="single-blog h-calc wow fadeInUp" data-wow-delay="0.2s">
                <div class="blog-img position-relative">
                  <a href="blog-details.html"> <img src="assets/images/gallery/blog-3.png" class="img-fluid w-100" alt="img"> </a>
                </div>
                  <div class="blog-info">
                    <div class="blog-info-title">
                      <div class="flex gap-16 align-items-center">
                        <div class="user flex gap-10 align-items-center">
                          <i class="ri-user-line"></i>
                          <p class="info">By: admin</p>
                        </div>
                        <div class="donate flex gap-10 align-items-center">
                          <i class="ri-chat-3-line"></i>
                          <p class="info">Donation</p>
                        </div>
                      </div>
                      <h4 class="title text-capitalize"><a href="blog-details.html">We assure you that your donation will be used wisely.</a></h4>
                      <p class="subtitle">We understand that there are many people organization The seeking support,</p>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End-of Blog -->

      <!-- Gallery S t a r t -->
      <div class="gallery-area">
        <div class="gallery-slider d-flex">
          <div class="gallery-img">
            <img src="assets/images/gallery/gallery-1.png" alt="img">
          </div>
          <div class="gallery-img">
            <img src="assets/images/gallery/gallery-2.png" alt="img">
          </div>
          <div class="gallery-img">
            <img src="assets/images/gallery/gallery-3.png" alt="img">
          </div>
          <div class="gallery-img">
            <img src="assets/images/gallery/gallery-4.png" alt="img">
          </div>
          <div class="gallery-img">
            <img src="assets/images/gallery/gallery-2.png" alt="img">
          </div>
          <div class="gallery-img">
            <img src="assets/images/gallery/gallery-3.png" alt="img">
          </div>
          <div class="gallery-img">
            <img src="assets/images/gallery/gallery-1.png" alt="img">
          </div>
        </div>
      </div>
      <!-- End-of Gallery -->
    </main>
    <!-- Footer S t a r t -->
    <footer>
      <div class="footer-wrapper footer-bg-one">
        <div class="container">
          <div class="footer-menu">
            <div class="col-lg-12">
              <div class="menu-wrapper d-flex align-items-center justify-content-between">
                <div class="header-left d-flex align-items-center justify-content-between">
                  <!-- Logo-->
                  <div class="logo">
                    <a href="index.html"><img src="assets/images/logo/dark.png" alt="logo"></a>
                  </div>
                </div>
                <!-- Footer-menu -->
                <div class="main-menu d-none d-lg-block">
                  <nav>
                    <ul class="listing" id="navigation2">
                      <li class="single-list"><a href="index.html" class="single">Home</a></li>
                      <li class="single-list"><a href="donation.html" class="single">Donation</a></li>
                      <li class="single-list"><a href="about.html" class="single">About</a></li>
                      <li class="single-list"><a href="blog.html" class="single">Blog</a></li>
                      <li class="single-list"><a href="contact-us.html" class="single">Contact</a></li>
                    </ul>
                  </nav>
                </div>
                <!-- Right button -->
                <ul class="cart">
                  <li class="cart-list"><a href="donate-payment.html" class="donate-btn">Donate</a></li>
                </ul>
              </div>
            </div>
          </div>
          <hr class="footer-line">
          <div class="footer-imp-link row g-4 justify-content-between">
            <div class="col-xl-2 col-lg-6">
              <div class="footer-link">
                <h4 class="title">Explore Links</h4>
                <ul class="imp-link">
                  <li class="single-list">
                    <a class="single" href="javascript:void(0)">About Company</a>
                  </li>
                  <li class="single-list">
                    <a class="single" href="javascript:void(0)">Latest Projects</a>
                  </li>
                  <li class="single-list">
                    <a class="single" href="javascript:void(0)">Latest Blog</a>
                  </li>
                  <li class="single-list">
                    <a class="single" href="javascript:void(0)">Our Testimonials</a>
                  </li>
                  <li class="single-list">
                    <a class="single" href="javascript:void(0)">Our Mission</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-xl-2 col-lg-6">
              <div class="footer-link">
                <h4 class="title">Get Support</h4>
                <ul class="imp-link">
                  <li class="single-list">
                    <a class="single" href="javascript:void(0)">About</a>
                  </li>
                  <li class="single-list">
                    <a class="single" href="javascript:void(0)">How it Works</a>
                  </li>
                  <li class="single-list">
                    <a class="single" href="javascript:void(0)">Knowledge Hub</a>
                  </li>
                  <li class="single-list">
                    <a class="single" href="javascript:void(0)">Success Stories</a>
                  </li>
                  <li class="single-list">
                    <a class="single" href="javascript:void(0)">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-xl-3 col-lg-5">
              <div class="footer-link">
                <h4 class="title">Get Support</h4>
                <ul class="imp-link">
                  <li class="single-list">
                    <div class="d-flex align-items-center gap-10 mb-20">
                      <div class="imp-icon">
                        <i class="ri-mail-fill"></i>
                      </div>
                      <a class="single" href="javascript:void(0)">donation@gmail.com</a>
                    </div>
                  </li>
                  <li class="single-list">
                    <div class="d-flex align-items-center gap-10 mb-20">
                      <div class="imp-icon">
                        <i class="ri-phone-fill"></i>
                      </div>
                      <a class="single" href="javascript:void(0)">(+88) 111-222-333</a>
                    </div>
                  </li>
                  <li class="single-list">
                    <div class="d-flex align-items-center gap-10 mb-20">
                      <div class="imp-icon">
                        <i class="ri-map-pin-2-fill"></i>
                      </div>
                      <a class="single" href="javascript:void(0)">Tropical Cyclone, Volcano</a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6">
              <div class="footer-link">
                <h4 class="title">Projects</h4>
                <ul class="imp-link">
                  <li class="single-list">
                    <div class="d-flex gap-20 mb-20 align-items-center">
                      <div class="project-img">
                        <a href="donation-details.html">
                          <img src="assets/images/gallery/project-1.png" alt="image">
                        </a>
                      </div>

                      <div class="project-info">
                        <p class="project-date">12.Oct.2023</p>
                        <h4 class="project-title"><a href="donation-details.html">18 Best Charity Marketing Champions</a></h4>
                      </div>
                    </div>
                  </li>
                  <li class="single-list">
                    <div class="d-flex gap-20">
                      <div class="project-img">
                        <a href="donation-details.html">
                          <img src="assets/images/gallery/project-2.png" alt="image">
                        </a>
                      </div>
                      <div class="project-info">
                        <p class="project-date">20.Oct.2023</p>
                        <h4 class="project-title"><a href="donation-details.html">Charity starts from home. You Can't Even Help,</a></h4>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <hr class="footer-line">
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
          <div class="container">
            <div class="footer-border">
              <div class="row">
                <div class="col-xl-12">
                  <div class="footer-copy-right text-center">
                    <p class="pera">Copyright © 2023 initTheme. All rights reserved.</p>
                    <div class="footer-social-link">
                      <ul class="listing">
                        <li class="single-list">
                          <a class="single" href=""><i class="ri-facebook-fill"></i></a>
                        </li>
                        <li class="single-list">
                          <a class="single" href=""><i class="ri-youtube-fill"></i></a>
                        </li>
                        <li class="single-list">
                          <a class="single" href=""><i class="ri-instagram-line"></i></a>
                        </li>
                        <li class="single-list">
                          <a class="single" href=""><i class="ri-linkedin-fill"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End-of Footer -->
    <!-- Scroll Up  -->
    <div class="progressParent" id="back-top">
      <svg class="backCircle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
      </svg>
    </div>
    <!-- Add an overlay element -->
    <div class="overlay"></div>
@endsection
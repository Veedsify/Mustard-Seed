@extends('layout.home.app')
@section('title', 'Login')
@section('content')
<main>
  <!-- Breadcrumb Area S t a r t -->
  <section class="breadcrumb-section breadcrumb-bg">
    <div class="container">
      <div class="breadcrumb-text">
        <h1 class="title wow fadeInUp" data-wow-delay="0.1s">login</h1>
      </div>
    </div>
  </section>
  <!-- End-of Breadcrumb Area -->

  <!-- Login area S t a r t  -->
  <div class="login-area section-padding">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10">
          <div class="login-card">
            <!-- Logo -->
            <div class="logo mb-40">
              <a href="index.blade.php" class="mb-30 d-block"><img src="assets/images/logo/Logo-charitfix.png"
                  alt="logo"></a>
            </div>
            <!-- Form -->
            <form action="#" method="POST">
              <div class="position-relative contact-form mb-24">
                <label class="contact-label">Email </label>
                <input class="form-control contact-input" type="text" placeholder="Enter Your Email">
              </div>

              <div class="contact-form mb-24">
                <div class="position-relative ">
                  <div class="d-flex justify-content-between aligin-items-center">
                    <label class="contact-label">Password</label>
                    <a href="forgot-pass.html"><span class="text-primary text-15"> Forgot password? </span></a>
                  </div>
                  <input type="password" class="form-control contact-input password-input" id="txtPasswordLogin"
                    placeholder="Enter Password">
                  <i class="toggle-password ri-eye-line"></i>
                </div>
              </div>

              <a href="javascript:void(0)" class="btn-primary-fill justify-content-center">
                <span class="d-flex justify-content-center gap-6">
                  <span>Login</span>
                </span>
              </a>
            </form>

            <div class="login-footer">
              <div class="create-account">
                <p>
                  Don’t have an account?
                  <a href="register.html">
                    <span>Register</span>
                  </a>
                </p>
              </div>
              <a href="javascript:void(0)" class="login-btn d-flex align-items-center justify-content-center gap-10">
                <img src="assets/images/icon/google-icon.png" alt="img" class="m-0">
                <span> login with Google</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End-of Login -->
</main>
@endsection
@extends('layout.master')
@section('title', 'Create An Account - Quickad')

@section('content')

<div id="titlebar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Register</h2>
                <!-- Breadcrumbs -->
                <nav id="breadcrumbs">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>Register</li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>
</div>


<div class="container">
   <div class="row">
      <div class="col-xl-5 margin-0-auto">
         <div class="login-register-page">
            <!-- Welcome Text -->
            <div class="welcome-text">
               <h3 style="font-size: 26px;">Let's create your account!</h3>
               <span>Already have an account? <a href="login.html">Login</a></span>
            </div>
            <div class="social-login-buttons">
               <button class="facebook-login ripple-effect" onclick="fblogin()"><i class="fa fa-facebook"></i> Log In via Facebook
               </button>
               <button class="google-login ripple-effect" onclick="gmlogin()"><i class="fa fa-google"></i> Log In via Google
               </button>
            </div>
            <div class="social-login-separator"><span>or</span></div>
            <form method="post" id="register-account-form" action="#" accept-charset="UTF-8">
               <div class="form-group">
                  <div class="input-with-icon-left">
                     <i class="la la-user"></i>
                     <input type="text" class="input-text with-border" placeholder="Full Name" value="" id="name" name="name" onBlur="checkAvailabilityName()" required/>
                  </div>
                  <span id="name-availability-status"></span>
               </div>
               <div class="form-group">
                  <div class="input-with-icon-left">
                     <i class="la la-user"></i>
                     <input type="text" class="input-text with-border" placeholder="Username" value="" id="Rusername" name="username" onBlur="checkAvailabilityUsername()" required/>
                  </div>
                  <span id="user-availability-status"></span>
               </div>
               <div class="form-group">
                  <div class="input-with-icon-left">
                     <i class="la la-envelope"></i>
                     <input type="text" class="input-text with-border" placeholder="Email" value="" name="email" id="email" onBlur="checkAvailabilityEmail()" required/>
                  </div>
                  <span id="email-availability-status"></span>
               </div>
               <div class="form-group">
                  <div class="input-with-icon-left">
                     <i class="la la-unlock"></i>
                     <input type="password" class="input-text with-border" placeholder="Password" id="Rpassword" name="password" onBlur="checkAvailabilityPassword()" required/>
                  </div>
                  <span id="password-availability-status"></span>
               </div>
               <div class="form-group">
                  <div class="text-center">
                     <div style="display: inline-block;" class="g-recaptcha" data-sitekey="6Lci1yMTAAAAABJia18zO75rtOmzihv44DWZP9vS"></div>
                  </div>
                  <span></span>
               </div>
               <span class="text-center">By clicking on “Register Now” button you are agree to our Terms & Condition</span>
               <button class="button full-width button-sliding-icon ripple-effect margin-top-10" name="submit" type="submit">Register <i class="icon-feather-arrow-right"></i></button>
            </form>
         </div>
      </div>
   </div>
</div>
<div class="margin-top-70"></div>


@endsection
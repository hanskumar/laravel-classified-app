<!-- Sign In Popup -->
<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs popup-dialog">
   <ul class="popup-tabs-nav">
      <li><a href="#login">Login</a></li>
   </ul>
   <div class="popup-tabs-container">
      <div class="popup-tab-content" id="login">
         <div class="welcome-text">
            <h3>Welcome Back</h3>
            <span>Don't have an account? <a href="signup.html">Sign Up Now!</a></span>
         </div>
         <div class="social-login-buttons">
            <button class="facebook-login ripple-effect" onclick="fblogin()"><i class="fa fa-facebook"></i> Log In via Facebook</button>
            <button class="google-login ripple-effect" onclick="gmlogin()"><i class="fa fa-google"></i> Log In via Google</button>
         </div>
         <div class="social-login-separator"><span>or</span></div>
         <form id="login-form" method="post" action="https://classified.bylancer.com/login?ref=/">
            <div id="login-status" class="notification error" style="display:none"></div>
            <div class="input-with-icon-left">
               <i class="la la-user"></i>
               <input type="text" class="input-text with-border" name="username" id="username"
                  placeholder="Username / Email" required/>
            </div>
            <div class="input-with-icon-left">
               <i class="la la-unlock"></i>
               <input type="password" class="input-text with-border" name="password" id="password"
                  placeholder="Password" required/>
            </div>
            <a href="loginef86.html?fstart=1" class="forgot-password">Forgot Password</a>
            <button id="login-button" class="button full-width button-sliding-icon ripple-effect" type="submit" name="submit">Login <i class="icon-feather-arrow-right"></i></button>
         </form>
      </div>
   </div>
</div>
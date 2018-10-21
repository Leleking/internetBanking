

<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap material admin template">
    <meta name="author" content="">
    
    <title>Login V2 | Remark Material Admin Template</title>
    
    <link rel="apple-touch-icon" href="/assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="/assets/images/favicon.ico">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="/assets/css/site.min.css">
    
    <!-- Plugins -->
    <link rel="stylesheet" href="/assets/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="/assets/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="/assets/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="/assets/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="/assets/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="/assets/vendor/flag-icon-css/flag-icon.css">
    <link rel="stylesheet" href="/assets/vendor/waves/waves.css">
        <link rel="stylesheet" href="/assets/examples/css/pages/login-v2.css">
    
    
    <!-- Fonts -->
    <link rel="stylesheet" href="/assets/fonts/material-design/material-design.min.css">
    <link rel="stylesheet" href="/assets/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    
    <!--[if lt IE 9]>
    <script src="/assets/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="/assets/vendor/media-match/media.match.min.js"></script>
    <script src="/assets/vendor/respond/respond.min.js"></script>
    <![endif]-->
    
    <!-- Scripts -->
    <script src="/assets/vendor/breakpoints/breakpoints.js"></script>
    <script>
      Breakpoints();
    </script>
  </head>
  <body class="animsition page-login-v2 layout-full page-dark">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


    <!-- Page -->
    <div class="page" data-animsition-in="fade-in" data-animsition-out="fade-out">
      <div class="page-content">
        <div class="page-brand-info">
          <div class="brand">
            <h2 class="brand-text font-size-40">TUCU</h2>
          </div>
          <p class="font-size-20">Trust Universal Credit Union a bank with a great experience.</p>
        </div>

        <div class="page-login-main">
          <div class="brand hidden-md-up">
            <h3 class="brand-text font-size-40">Login</h3>
          </div>
          <center><img class="brand-img" width="100px" height="90px" src="/img/logo.jpg" alt="..."></center>
          <h3 class="font-size-24"><center>login</center></h3>
          <p>Please login with your account number, password and your pin number</p>

          <form method="post" action="loginUser" autocomplete="off">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
           <div class="row">
             <div class="col-md-8">
                    <div class="form-group form-material floating" data-plugin="formMaterial">
                            <input type="text" class="form-control empty" id="" name="acct_num" required>
                            <label class="floating-label">Account Number</label>
                    </div>
                    @if ($errors->has('acct_num'))
                        <span class="help-block">
                            <strong style="color:red">{{ $errors->first('acct_num') }}</strong>
                        </span>
                    @endif
            </div>
            <div class="col-md-4">
                    <div class="form-group form-material floating" data-plugin="formMaterial">
                            <input type="text" class="form-control empty" id="" name="pin" required>
                            <label class="floating-label">Pin</label>
                    </div>
                    @if ($errors->has('pin'))
                        <span class="help-block">
                            <strong>{{ $errors->first('pin') }}</strong>
                        </span>
                    @endif
           </div>
           </div>
            <div class="form-group form-material floating" data-plugin="formMaterial">
                <input type="password" class="form-control empty" id="inputPassword" name="password">
                <label class="floating-label" for="inputPassword">Password</label>
              </div>
              @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
              @endif
            <div class="form-group clearfix">
              <div class="checkbox-custom checkbox-inline checkbox-primary float-left">
                <input type="checkbox" id="remember" name="checkbox">
                <label for="inputCheckbox">Remember me</label>
              </div>
              <a class="float-right" href="forgot-password.html">Forgot password?</a>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Sign in</button>
          </form>
          @if(Request::get('err') !== null)
                <p style='padding:15px;' class='bg-danger'>{{ Request::get('err') }}</p>
            @endif

         

          <footer class="page-copyright">
            <p>WEBAPP BY GEO</p>
            <p>© 2018. All RIGHT RESERVED.</p>
            <div class="social">
              <a class="btn btn-icon btn-round social-twitter mx-5" href="javascript:void(0)">
            <i class="icon bd-twitter" aria-hidden="true"></i>
          </a>
              <a class="btn btn-icon btn-round social-facebook mx-5" href="javascript:void(0)">
            <i class="icon bd-facebook" aria-hidden="true"></i>
          </a>
              <a class="btn btn-icon btn-round social-google-plus mx-5" href="javascript:void(0)">
            <i class="icon bd-google-plus" aria-hidden="true"></i>
          </a>
            </div>
          </footer>
        </div>

      </div>
    </div>
    <!-- End Page -->


    <!-- Core  -->
    <script src="/assets/vendor/babel-external-helpers/babel-external-helpers.js"></script>
    <script src="/assets/vendor/jquery/jquery.js"></script>
    <script src="/assets/vendor/popper-js/umd/popper.min.js"></script>
    <script src="/assets/vendor/bootstrap/bootstrap.js"></script>
    <script src="/assets/vendor/animsition/animsition.js"></script>
    <script src="/assets/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="/assets/vendor/asscrollbar/jquery-asScrollbar.js"></script>
    <script src="/assets/vendor/asscrollable/jquery-asScrollable.js"></script>
    <script src="/assets/vendor/waves/waves.js"></script>
    
    <!-- Plugins -->
    <script src="/assets/vendor/switchery/switchery.js"></script>
    <script src="/assets/vendor/intro-js/intro.js"></script>
    <script src="/assets/vendor/screenfull/screenfull.js"></script>
    <script src="/assets/vendor/slidepanel/jquery-slidePanel.js"></script>
        <script src="/assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
    
    <!-- Scripts -->
    <script src="/assets/js/Component.js"></script>
    <script src="/assets/js/Plugin.js"></script>
    <script src="/assets/js/Base.js"></script>
    <script src="/assets/js/Config.js"></script>
    
    <script src="/assets/js/Section/Menubar.js"></script>
    <script src="/assets/js/Section/Sidebar.js"></script>
    <script src="/assets/js/Section/PageAside.js"></script>
    <script src="/assets/js/Plugin/menu.js"></script>
    
    <!-- Config -->
    <script src="/assets/js/config/colors.js"></script>
    <script src="/assets/js/config/tour.js"></script>
    <script>Config.set('assets', '/assets');</script>
    
    <!-- Page -->
    <script src="/assets/js/Site.js"></script>
    <script src="/assets/js/Plugin/asscrollable.js"></script>
    <script src="/assets/js/Plugin/slidepanel.js"></script>
    <script src="/assets/js/Plugin/switchery.js"></script>
        <script src="/assets/js/Plugin/jquery-placeholder.js"></script>
        <script src="/assets/js/Plugin/material.js"></script>
    
    <script>
      (function(document, window, $){
        'use strict';
    
        var Site = window.Site;
        $(document).ready(function(){
          Site.run();
        });
      })(document, window, jQuery);
    </script>
  </body>
</html>

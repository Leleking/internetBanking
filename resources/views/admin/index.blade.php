

<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap material admin template">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Menubar Fold | Remark Material Admin Template</title>
    
    <link rel="apple-touch-icon" href="/assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="/assets/images/favicon.ico">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="/assets/css/site.min.css">
    <script src="/assets/vendor/jquery/jquery.js"></script>
    @yield('css')
    <!-- Plugins -->
    <link rel="stylesheet" href="/assets/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="/assets/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="/assets/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="/assets/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="/assets/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="/assets/vendor/flag-icon-css/flag-icon.css">
    <link rel="stylesheet" href="/assets/vendor/waves/waves.css">
    
    
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
  <body class="animsition site-menubar-fold">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

   @include('partials.header')

    <!-- Page -->
    
        @yield('content')
      </div>
    </div>
    <!-- End Page -->


    <!-- Footer -->
    <footer class="site-footer">
      <div class="site-footer-legal">© 2018 <a href="http://themeforest.net/item/remark-responsive-bootstrap-admin-template/11989202">Remark</a></div>
      <div class="site-footer-right">
        Crafted with <i class="red-600 icon md-favorite"></i> by <a href="https://themeforest.net/user/creation-studio">Creation Studio</a>
      </div>
    </footer>
    <!-- Core  -->
    <script src="/assets/vendor/babel-external-helpers/babel-external-helpers.js"></script>
    <script src="/assets/vendor/popper-js/umd/popper.min.js"></script>
    <script src="/assets/vendor/bootstrap/bootstrap.js"></script>
    <script src="/assets/vendor/animsition/animsition.js"></script>
    <script src="/assets/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="/assets/vendor/asscrollbar/jquery-asScrollbar.js"></script>
    <script src="/assets/vendor/asscrollable/jquery-asScrollable.js"></script>
    <script src="/assets/vendor/waves/waves.js"></script>
    @yield('js')
    <script src="/assets/vendor/switchery/switchery.js"></script>
    <script src="/assets/vendor/intro-js/intro.js"></script>
    <script src="/assets/vendor/screenfull/screenfull.js"></script>
    <script src="/assets/vendor/slidepanel/jquery-slidePanel.js"></script>
    
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

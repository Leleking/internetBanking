<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega navbar-inverse"
role="navigation">

<div class="navbar-header">
  <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
    data-toggle="menubar">
    <span class="sr-only">Toggle navigation</span>
    <span class="hamburger-bar"></span>
  </button>
  <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
    data-toggle="collapse">
    <i class="icon md-more" aria-hidden="true"></i>
  </button>
  <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
    <img class="navbar-brand-logo" src="/assets/images/logo.png" title="Remark">
    <span class="navbar-brand-text hidden-xs-down"> Remark</span>
  </div>
  <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-search"
    data-toggle="collapse">
    <span class="sr-only">Toggle Search</span>
    <i class="icon md-search" aria-hidden="true"></i>
  </button>
</div>

<div class="navbar-container container-fluid">
  <!-- Navbar Collapse -->
  <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
    <!-- Navbar Toolbar -->
    <ul class="nav navbar-toolbar">
      <li class="nav-item hidden-float" id="toggleMenubar">
        <a class="nav-link" data-toggle="menubar" href="#" role="button">
          <i class="icon hamburger hamburger-arrow-left">
            <span class="sr-only">Toggle menubar</span>
            <span class="hamburger-bar"></span>
          </i>
        </a>
      </li>
      <li class="nav-item hidden-sm-down" id="toggleFullscreen">
        <a class="nav-link icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
          <span class="sr-only">Toggle fullscreen</span>
        </a>
      </li>
    </ul>
    <!-- End Navbar Toolbar -->

    <!-- Navbar Toolbar Right -->
    <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
      <li class="nav-item dropdown">
        <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
          data-animation="scale-up" role="button">
          <span class="avatar avatar-online">
            <img src="/assets/portraits/5.jpg" alt="...">
            <i></i>
          </span>
        </a>
        <div class="dropdown-menu" role="menu">
          <a class="dropdown-item" href="/user/profile" role="menuitem"><i class="icon md-account" aria-hidden="true"></i> Profile</a>
          <a class="dropdown-item" href="/user/changePassword" role="menuitem"><i class="icon md-card" aria-hidden="true"></i>Change Password</a>
          <a class="dropdown-item" href="/user/changePassword" role="menuitem"><i class="icon md-card" aria-hidden="true"></i>Change Pin</a>                
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/logout" role="menuitem"><i class="icon md-power" aria-hidden="true"></i> Logout</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" title="Notifications"
          aria-expanded="false" data-animation="scale-up" role="button">
          <i class="icon md-notifications" aria-hidden="true"></i>
          <span class="badge badge-pill badge-danger up">5</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
          <div class="dropdown-menu-header">
            <h5>NOTIFICATIONS</h5>
            <span class="badge badge-round badge-danger">New 5</span>
          </div>

          <div class="list-group">
            <div data-role="container">
              <div data-role="content">
                <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                  <div class="media">
                    <div class="pr-10">
                      <i class="icon md-receipt bg-red-600 white icon-circle" aria-hidden="true"></i>
                    </div>
                    <div class="media-body">
                      <h6 class="media-heading">A new order has been placed</h6>
                      <time class="media-meta" datetime="2017-06-12T20:50:48+08:00">5 hours ago</time>
                    </div>
                  </div>
                </a>
                <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                  <div class="media">
                    <div class="pr-10">
                      <i class="icon md-account bg-green-600 white icon-circle" aria-hidden="true"></i>
                    </div>
                    <div class="media-body">
                      <h6 class="media-heading">Completed the task</h6>
                      <time class="media-meta" datetime="2017-06-11T18:29:20+08:00">2 days ago</time>
                    </div>
                  </div>
                </a>
                <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                  <div class="media">
                    <div class="pr-10">
                      <i class="icon md-settings bg-red-600 white icon-circle" aria-hidden="true"></i>
                    </div>
                    <div class="media-body">
                      <h6 class="media-heading">Settings updated</h6>
                      <time class="media-meta" datetime="2017-06-11T14:05:00+08:00">2 days ago</time>
                    </div>
                  </div>
                </a>
                <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                  <div class="media">
                    <div class="pr-10">
                      <i class="icon md-calendar bg-blue-600 white icon-circle" aria-hidden="true"></i>
                    </div>
                    <div class="media-body">
                      <h6 class="media-heading">Event started</h6>
                      <time class="media-meta" datetime="2017-06-10T13:50:18+08:00">3 days ago</time>
                    </div>
                  </div>
                </a>
                <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                  <div class="media">
                    <div class="pr-10">
                      <i class="icon md-comment bg-orange-600 white icon-circle" aria-hidden="true"></i>
                    </div>
                    <div class="media-body">
                      <h6 class="media-heading">Message received</h6>
                      <time class="media-meta" datetime="2017-06-10T12:34:48+08:00">3 days ago</time>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="dropdown-menu-footer">
            <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
              <i class="icon md-settings" aria-hidden="true"></i>
            </a>
            <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
              All notifications
            </a>
          </div>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" title="Messages"
          aria-expanded="false" data-animation="scale-up" role="button">
          <i class="icon md-email" aria-hidden="true"></i>
          <span class="badge badge-pill badge-info up">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
          <div class="dropdown-menu-header" role="presentation">
            <h5>MESSAGES</h5>
            <span class="badge badge-round badge-info">New 3</span>
          </div>

          <div class="list-group" role="presentation">
            <div data-role="container">
              <div data-role="content">
                <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                  <div class="media">
                    <div class="pr-10">
                      <span class="avatar avatar-sm avatar-online">
                        <img src="/assets/portraits/2.jpg" alt="..." />
                        <i></i>
                      </span>
                    </div>
                    <div class="media-body">
                      <h6 class="media-heading">Mary Adams</h6>
                      <div class="media-meta">
                        <time datetime="2017-06-17T20:22:05+08:00">30 minutes ago</time>
                      </div>
                      <div class="media-detail">Anyways, i would like just do it</div>
                    </div>
                  </div>
                </a>
                <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                  <div class="media">
                    <div class="pr-10">
                      <span class="avatar avatar-sm avatar-off">
                        <img src="/assets/portraits/3.jpg" alt="..." />
                        <i></i>
                      </span>
                    </div>
                    <div class="media-body">
                      <h6 class="media-heading">Caleb Richards</h6>
                      <div class="media-meta">
                        <time datetime="2017-06-17T12:30:30+08:00">12 hours ago</time>
                      </div>
                      <div class="media-detail">I checheck the document. But there seems</div>
                    </div>
                  </div>
                </a>
                <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                  <div class="media">
                    <div class="pr-10">
                      <span class="avatar avatar-sm avatar-busy">
                        <img src="/assets/portraits/4.jpg" alt="..." />
                        <i></i>
                      </span>
                    </div>
                    <div class="media-body">
                      <h6 class="media-heading">June Lane</h6>
                      <div class="media-meta">
                        <time datetime="2017-06-16T18:38:40+08:00">2 days ago</time>
                      </div>
                      <div class="media-detail">Lorem ipsum Id consectetur et minim</div>
                    </div>
                  </div>
                </a>
                <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                  <div class="media">
                    <div class="pr-10">
                      <span class="avatar avatar-sm avatar-away">
                        <img src="/assets/portraits/5.jpg" alt="..." />
                        <i></i>
                      </span>
                    </div>
                    <div class="media-body">
                      <h6 class="media-heading">Edward Fletcher</h6>
                      <div class="media-meta">
                        <time datetime="2017-06-15T20:34:48+08:00">3 days ago</time>
                      </div>
                      <div class="media-detail">Dolor et irure cupidatat commodo nostrud nostrud.</div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="dropdown-menu-footer" role="presentation">
            <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
              <i class="icon md-settings" aria-hidden="true"></i>
            </a>
            <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
              See all messages
            </a>
          </div>
        </div>
      </li>
      <li class="nav-item" id="toggleChat">
        <a class="nav-link" data-toggle="site-sidebar" href="javascript:void(0)" title="Chat"
          data-url="../site-sidebar.tpl">
          <i class="icon md-comment" aria-hidden="true"></i>
        </a>
      </li>
    </ul>
    <!-- End Navbar Toolbar Right -->

    <div class="navbar-brand navbar-brand-center">
      <a>
        <img class="navbar-brand-logo navbar-brand-logo-normal" src="/img/logo.jpg"
          title="trust">
        <img class="navbar-brand-logo navbar-brand-logo-special" src="/assets/images/logo-colored.png"
          title="Remark">
      </a>
    </div>
  </div>
  <!-- End Navbar Collapse -->

  <!-- Site Navbar Seach -->

  <!-- End Site Navbar Seach -->
</div>
</nav>    
<div class="site-menubar">
<div class="site-menubar-header">
  <div class="cover overlay">
    <img class="cover-image" src="/assets//examples/images/dashboard-header.jpg"
      alt="...">
    <div class="overlay-panel vertical-align overlay-background">
      <div class="vertical-align-middle">
        <a class="avatar avatar-lg" href="javascript:void(0)">
          <img src="/assets/portraits/1.jpg" alt="">
        </a>
        <div class="site-menubar-info">
          <h5 class="site-menubar-user">{{auth()->user()->name}}</h5>
          <p class="site-menubar-email">{{auth()->user()->email}}</p>
        </div>
      </div>
    </div>
  </div>
</div>  <div class="site-menubar-body">
  <div>
    <div>
      <ul class="site-menu" data-plugin="menu">
       @if(auth()->user()->isAdmin())
        <li class="site-menu-item">
            <a class="animsition-link" href="/admin/userDetails">
                    <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                    <span class="site-menu-title">Users</span>
                </a>
        </li>
        <li class="site-menu-item">
            <a class="animsition-link" href="/admin/transaction">
                    <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                    <span class="site-menu-title">Transactions</span>
                </a>
        </li>
        <li class="site-menu-item">
            <a class="animsition-link" href="/admin/add/customer">
                    <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                    <span class="site-menu-title">Add User</span>
                </a>
        </li>
        @endif
          <li class="site-menu-item">
              <a class="animsition-link" href="/user/account/summary">
                      <i class="site-menu-icon md-view-compact" aria-hidden="true"></i>
                      <span class="site-menu-title">Account Summary</span>
                  </a>
          </li>
          <li class="site-menu-item">
              <a class="animsition-link" href="/user/account/detail">
                      <i  class="site-menu-icon md-puzzle-piece" aria-hidden="true"></i>
                      <span class="site-menu-title">Account Details</span>
                  </a>
          </li>
          <li class="site-menu-item">
              <a class="animsition-link" href="/user/fund/transfer">
                      <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                      <span class="site-menu-title">Fund Transfers</span>
              </a>
          </li>
      </ul>      
    </div>
  </div>
</div>
</div>
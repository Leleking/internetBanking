@extends('user.index')
@section('content')
<div class="page">
        <div class="page-content container-fluid">
          <div class="row">
            <div class="col-lg-3">
              <!-- Page Widget -->
              <div class="card card-shadow text-center">
                <div class="card-block">
                  <a class="avatar avatar-lg" href="javascript:void(0)">
                    <img src="/assets/portraits/5.jpg" alt="...">
                  </a>
                  <h4 class="profile-user">Terrance arnold</h4>
                  <p class="profile-job">Art director</p>
                </div>
               
              </div>
              <!-- End Page Widget -->
            </div>
  
            <div class="col-lg-9">
              <!-- Panel -->
              <div class="panel">
                <div class="panel-body nav-tabs-animate nav-tabs-horizontal" data-plugin="tabs">
                  <ul class="nav nav-tabs nav-tabs-line" role="tablist">
                    <li class="nav-item" role="presentation"><a class="active nav-link" data-toggle="tab" href="#activities"
                        aria-controls="activities" role="tab">Activities <span class="badge badge-pill badge-danger">5</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#profile" aria-controls="profile"
                        role="tab">Profile</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#messages" aria-controls="messages"
                        role="tab">Messages</a></li>
                    <li class="nav-item dropdown">
                      <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" aria-expanded="false">Menu </a>
                      <div class="dropdown-menu" role="menu">
                        <a class="active dropdown-item" data-toggle="tab" href="#activities" aria-controls="activities"
                          role="tab">Activities <span class="badge badge-pill badge-danger">5</span></a>
                        <a class="dropdown-item" data-toggle="tab" href="#profile" aria-controls="profile"
                          role="tab">Profile</a>
                        <a class="dropdown-item" data-toggle="tab" href="#messages" aria-controls="messages"
                          role="tab">Messages</a>
                      </div>
                    </li>
                  </ul>
  
                  <div class="tab-content">
                    <div class="tab-pane active animation-slide-left" id="activities" role="tabpanel">
                      <ul class="list-group">
                        <li class="list-group-item">
                          <div class="media">
                            <div class="pr-20">
                              <a class="avatar" href="javascript:void(0)">
                                <img class="img-fluid" src="/assets/portraits/2.jpg"
                                  alt="...">
                              </a>
                            </div>
                            <div class="media-body">
                              <h5 class="mt-0 mb-5">Ida Fleming
                                <small>posted an updated</small>
                              </h5>
                              <small>active 14 minutes ago</small>
                              <div class="profile-brief">“Check if it can be corrected with overflow : hidden”</div>
                            </div>
                          </div>
                        </li>
  
                       
  
                       
                      </ul>
                      <a class="btn btn-block btn-default profile-readMore" href="javascript:void(0)"
                        role="button">Show All</a>
                    </div>
  
                    <div class="tab-pane animation-slide-left" id="profile" role="tabpanel">
                     
                    </div>
  
                    <div class="tab-pane animation-slide-left" id="messages" role="tabpanel">
                     
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Panel -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Page -->
  
@endsection
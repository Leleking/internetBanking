@extends('user.index')
@section('content')
<div class="page">
        <div class="page-header">
                <h1 class="page-title">My Account Details</h1>
                <div class="page-header-actions">
                        <a style="color:white" class="btn btn-sm btn-primary btn-round" data-target="#examplePositionSidebar" data-toggle="modal">
                      <i class="icon md-link" aria-hidden="true"></i>
                     <span class="hidden-sm-down" >Settings</span>
                    </a>
                      </div>
              </div>
        <div class="page-content container-fluid">
<div class="panel">
  <header class="panel-heading">
    <h3 class="panel-title">&nbsp;</h3>
  </header>
  <div class="panel-body">
      <div class="row">
            <div class="col-xxl-5 col-lg-6">
                    <!-- Panel Projects -->
                    <div class="panel" id="projects">
                      <div class="panel-heading">
                        <h3 class="panel-title">User Information</h3>
                      </div>
                      <div class="table-responsive">
                        <table class="table table-striped">
                          <tbody>
                            <tr>
                              <td>User Fullname</td>
                              <td>
                                 {{auth()->user()->name}}
                              </td>
                             
                            </tr>
                            <tr>
                              <td>Email ID</td>
                              <td>
                               {{auth()->user()->email}}
                              </td>
                            </tr>
                            <tr>
                              <td>Phone Number</td>
                              <td>
                                {{auth()->user()->phone}}
                              </td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>{{auth()->user()->userDetail->address}}</td>
                            </tr>
                            <tr>
                                <td>City</td>
                                    <td>{{auth()->user()->userDetail->city}}</td>
                            </tr>
                            <tr>
                            <td>Zip</td>
                            <td>{{auth()->user()->userDetail->zip}}</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- End Panel Projects -->
                  </div>
        
                  <div class="col-xxl-7 col-lg-6">
                    <!-- Panel Projects Status -->
                    <div class="panel" id="projects-status">
                      <div class="panel-heading">
                        <h3 class="panel-title">
                          Account Details
                          <span class="badge badge-pill badge-info">5</span>
                        </h3>
                      </div>
                      <div class="table-responsive">
                        <table class="table table-striped">
                          <thead>
                                <tr>
                                        <td>Account Number</td>
                                        <td>
                                                <input type="text" class="form-control" value="{{auth()->user()->account->acct_num}}" readonly>
                                        </td>
                                       
                                      </tr>
                                      <tr>
                                        <td>Account Type</td>
                                        <td>
                                                <input type="text" class="form-control" value="{{auth()->user()->account->type}}" readonly>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Balance</td>
                                        <td>
                                        <input type="text" class="form-control" value="GHC{{auth()->user()->account->balance}}" readonly>
                                        </td>
                                      </tr>
                                      <tr>
                                          <td>Pin</td>
                                          <td><input type="number" class="form-control" value="{{auth()->user()->account->pin}}" readonly></td>
                                      </tr>
                                      <tr>
                                          <td>Status</td>
                                              <td>@if(auth()->user()->account->status) Active @else Inactive @endif </td>
                                      </tr>
                                      
                          </tbody>
                        </table>
                      </div>
                    </div>
      </div>
       
  </div>
</div>
        </div>
</div>
@endsection
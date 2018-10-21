@extends('admin.index')
@section('css')

@endsection

@section('content')
<!-- Panel Table Tools -->

<div class="page">
        <div class="page-header">
                <h1 class="page-title">User Account Details</h1>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="">Home</a></li>
                  <li class="breadcrumb-item"><a href="javascript:void(0)">Tables</a></li>
                  <li class="breadcrumb-item active"></li>
                </ol>
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
                                {{$user->name}}   
                              </td>
                             
                            </tr>
                            <tr>
                              <td>Email ID</td>
                              <td>
                               {{$user->email}}
                              </td>
                            </tr>
                            <tr>
                              <td>Phone Number</td>
                              <td>
                                {{$user->phone}}
                              </td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>{{$user->userDetail['address']}}</td>
                            </tr>
                            <tr>
                                <td>City</td>
                                    <td>{{$user->userDetail['city']}}</td>
                            </tr>
                            <tr>
                            <td>Zip</td>
                            <td>{{$user->userDetail['zip']}}</td>
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
                                                <input type="text" class="form-control" value="{{$user->account->acct_num}}" readonly>
                                        </td>
                                       
                                      </tr>
                                      <tr>
                                        <td>Account Type</td>
                                        <td>
                                                <input type="text" class="form-control" value="{{$user->account->type}}" readonly>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Balance</td>
                                        <td>
                                        <input type="text" class="form-control" value="GHC{{$user->account->balance}}" readonly>
                                        </td>
                                      </tr>
                                      <tr>
                                          <td>Pin</td>
                                          <td><input type="number" class="form-control" value="{{$user->account->pin}}" readonly></td>
                                      </tr>
                                      <tr>
                                          <td>Status</td>
                                              <td>@if($user->account->status) Active @else Inactive @endif </td>
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
<!-- End Panel Table Tools -->
 
                         

                          <!-- Modal -->
                          <div class="modal fade" id="examplePositionSidebar" aria-hidden="true" aria-labelledby="examplePositionSidebar"
                            role="dialog" tabindex="-1">
                            <div class="modal-dialog modal-simple modal-sidebar modal-sm">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                  <h4 class="modal-title">Modal Title</h4>
                                </div>
                                <div class="modal-body">
                                  <p>One fine body…</p>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-primary btn-block">Save changes</button>
                                  <button type="button" class="btn btn-default btn-block btn-pure" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- End Modal -->
                        </div>
                      </div>
                      <!-- End Example Sidebar -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            

                        
                        <!-- Modal -->
                        <div class="modal fade" id="examplePositionSidebar" aria-hidden="true" aria-labelledby="examplePositionSidebar"
                          role="dialog" tabindex="-1">
                          <div class="modal-dialog modal-simple modal-sidebar modal-sm">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">×</span>
                                </button>
                                <h4 class="modal-title">Modal Title</h4>
                              </div>
                              <div class="modal-body">
                                <p>One fine body…</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-primary btn-block">Save changes</button>
                                <button type="button" class="btn btn-default btn-block btn-pure" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End Modal -->
                      


@endsection

@section('js')
@endsection
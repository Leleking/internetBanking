@extends('admin.index')
@section('css')

@endsection

@section('content')
<!-- Panel Table Tools -->
<div class="page">
        <div class="page-content container-fluid">
<div class="panel">
  <header class="panel-heading">
    <h3 class="panel-title">Table Tools</h3>
  </header>
  <div class="panel-body">
    <table class="table table-hover dataTable table-striped w-full" id="exampleTableTools">
      <thead>
        <tr>
          <th>User Name</th>
          <th>Account No.</th>
          <th>Balance</th>
          <th>Account Type</th>
          <th>Account Status</th>
          <th>Statement</th>
        </tr>
      </thead>
      
      <tbody>
          @foreach($user as $users)
        <tr>
          <td><a href='/admin/showUserDetails/{{$users->id}}'>{{$users->name}}</a></td>
          <td>{{$users->account['acct_num']}}</td>
          <td>{{$users->account['balance']}}</td>
          <td>{{$users->account['type']}}</td>
          <td>@if($users->status)  <button type="button" class="btn btn-success">Active</button> @else  <button type="button" class="btn btn-warning">Inactive</button> @endif</td>
          <td>
              <div class="btn-group" role="group">
                  <button type="button" class="btn btn-dark dropdown-toggle" id="exampleIconDropdown4"
                    data-toggle="dropdown" aria-expanded="false">
                    <i class="icon md-chart-donut" aria-hidden="true"></i>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="exampleIconDropdown4" role="menu">
                      @if($users->status) <a class="dropdown-item" href="javascript:void(0)" role="menuitem">Deactivate</a> @else <a class="dropdown-item" href="javascript:void(0)" role="menuitem">Activate</a> @endif</li>
                    <a class="dropdown-item" href="/admin/showUserTransaction/{{$users->id}}" role="menuitem">View Transactions</a></li>
                  </div>
                </div>
          </td>
        </tr>
        @endforeach
     
      </tbody>
    </table>
  </div>
</div>
        </div>
</div>
<!-- End Panel Table Tools -->

@endsection

@section('js')
@endsection
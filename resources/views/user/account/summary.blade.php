@extends('user.index')
@section('content')
<!-- Panel Table Tools -->
<div class="page-content">

        <!-- Panel Example 1 -->
        <div class="panel">
          <header class="panel-heading">
            <h3 class="panel-title">
              Example 1
            </h3>
          </header>
          <div class="panel-body">
            <div class="example table-responsive">
              <table class="table table-striped table-bordered" data-plugin="floatThead">
                <thead>
                  <tr>
                    <th></th>
                    <th>Tx No</th>
                    <th>Amount</th>
                    <th>Tx Type</th>
                    <th>Receiver's Acct No</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody aria-relevant="all" aria-live="polite">
                @foreach(auth()->user()->transaction as $transactions)
                  <tr class="odd">
                    <td>@if($transactions->status) <i class="icon md-lock" aria-hidden="true"> @endif</td>
                    <td>
                      <h5>Sleep</h5>
                      <small>Tx ID: {{$transactions->tx_no}} | {{Carbon\Carbon::parse($transactions->created_at)->format('l jS \of F Y  h:i A')}}</small>
                    </td>
                    <td>
                            <h5>{{$transactions->amount}}</h5>
                                  
                          </td>
                    <td>
                      <div class="text-warning time-from-now">{{$transactions->tx_type}}</div>
                    </td>
                    <td>{{$transactions->to_acct}}</td>
                    <td>
                      <h5>{{$transactions->description}}</h5>
                    </td>
                    <td>
                      <h5>@if(!$transactions->status)  <span class="badge badge-warning">Pending</span> @elseif($transactions->status == 1)  <span class="badge badge-info">Approved</span> @else <span class="badge badge-danger">Cancelled</span>  @endif</h5>
                    </td>
                    <td>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- End Panel Example 1 -->

<!-- End Panel Table Tools -->

@endsection
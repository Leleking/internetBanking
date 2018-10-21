@extends('user.index')
@section('content')
<div class="page">
     <!-- Panel Table Tools -->
        <div class="panel">
          <header class="panel-heading">
            <h3 class="panel-title">Table Tools</h3>
          </header>
          <div class="panel-body">
            <table class="table table-hover dataTable table-striped w-full" id="exampleTableTools">
              <thead>
                <tr>
                        <th>Tx No</th>
                        <th>Amount</th>
                        <th>Tx Type</th>
                        <th>Receiver's Acct No</th>
                        <th>Date</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                </tr>
              </thead>
              <tbody>
               @foreach($transaction as $transactions)
               <tr>
                    <td>{{$transactions->tx_no}}</td>
                    <td>{{$transactions->amount}}</td>
                    <td>{{$transactions->tx_type}}</td>
                    <td>{{$transactions->to_acct}}</td>
                    <td>{{Carbon\Carbon::parse($transactions->created_at)->format('l jS \of F Y  h:i A')}}</td>
                    <td>{{$transactions->description}}</td>
                    <td>@if($transactions->status)  <button type="button" class="btn btn-success">Active</button> @else  <button type="button" class="btn btn-warning">Inactive</button> @endif</td>
                    <td></td>
               </tr>
              @endforeach
                
               
              </tbody>
            </table>
          </div>
        </div>
        <!-- End Panel Table Tools 
</div>
@endsection
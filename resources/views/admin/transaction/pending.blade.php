@extends('user.index')
@section('content')
<div class="page">
        <!-- Panel Table Tools -->
           <div class="panel">
             <header class="panel-heading">
               <h3 class="panel-title">Table Tools</h3>
             </header>
             @if(session('message'))
             <div>
                     <div class="alert alert-success">
                             <strong>Success!</strong>  {{session('message')}}
                     </div>
             </div>
             @endif
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
                     <td>@if(!$transactions->status) pending @endif</td>
                     <td>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-dark dropdown-toggle" id="exampleIconDropdown4"
                                  data-toggle="dropdown" aria-expanded="false">
                                  <i class="icon md-chart-donut" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="exampleIconDropdown4" role="menu">
                                  <li><a class="dropdown-item" href="/admin/request/approve/{{$transactions->id}}" role="menuitem">Approve</a></li>
                                  <li><a class="dropdown-item" href="/admin/request/approve/{{$transactions->id}}" role="menuitem">Cancel Request</a></li>
                                </div>
                              </div>
                     </td>
                   </tr>
                  @endforeach
                 </tbody>
               </table>
             </div>
           </div>
           <!-- End Panel Table Tools 
   </div>
@endsection
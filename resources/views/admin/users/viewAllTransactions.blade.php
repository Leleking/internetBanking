@extends('user.index')
@section('css')
<link rel="stylesheet" href="/assets/vendor/datatables.net-bs4/dataTables.bootstrap4.css">
<link rel="stylesheet" href="/assets/vendor/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.css">
<link rel="stylesheet" href="/assets/vendor/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.css">
<link rel="stylesheet" href="/assets/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.css">
<link rel="stylesheet" href="/assets/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.css">
<link rel="stylesheet" href="/assets/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.css">
<link rel="stylesheet" href="/assets/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.css">
<link rel="stylesheet" href="/assets/vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.css">
<link rel="stylesheet" href="/assets/examples/css/tables/datatable.css">
@endsection
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
                     <td>{{$transactions->status}}</td>
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
@section('js')
<script src="/assets/vendor/datatables.net/jquery.dataTables.js"></script>
        <script src="/assets/vendor/datatables.net-bs4/dataTables.bootstrap4.js"></script>
        <script src="/assets/vendor/datatables.net-fixedheader/dataTables.fixedHeader.js"></script>
        <script src="/assets/vendor/datatables.net-fixedcolumns/dataTables.fixedColumns.js"></script>
        <script src="/assets/vendor/datatables.net-rowgroup/dataTables.rowGroup.js"></script>
        <script src="/assets/vendor/datatables.net-scroller/dataTables.scroller.js"></script>
        <script src="/assets/vendor/datatables.net-responsive/dataTables.responsive.js"></script>
        <script src="/assets/vendor/datatables.net-responsive-bs4/responsive.bootstrap4.js"></script>
        <script src="/assets/vendor/datatables.net-buttons/dataTables.buttons.js"></script>
        <script src="/assets/vendor/datatables.net-buttons/buttons.html5.js"></script>
        <script src="/assets/vendor/datatables.net-buttons/buttons.flash.js"></script>
        <script src="/assets/vendor/datatables.net-buttons/buttons.print.js"></script>
        <script src="/assets/vendor/datatables.net-buttons/buttons.colVis.js"></script>
        <script src="/assets/vendor/datatables.net-buttons-bs4/buttons.bootstrap4.js"></script>
        <script src="/assets/vendor/asrange/jquery-asRange.min.js"></script>
        <script src="/assets/vendor/bootbox/bootbox.js"></script>
    
@endsection
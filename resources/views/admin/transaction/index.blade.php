@extends('admin.index')
@section('css')
<link rel="stylesheet" href="/css/sweetalert.css">
@endsection
@section('content')
<div class="page">
        <div class="page-header">
          <h1 class="page-title">Transactions</h1>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Widgets</a></li>
            <li class="breadcrumb-item active">Statistics</li>
          </ol>
        </div>
<div class="row">
        <div class="col-xl-6 col-lg-12">
          <div class="row">
            <div class="col-lg-6" data-target="#exampleFormModal" data-toggle="modal">
                  <div class="card card-block p-25">
                    <div class="counter counter-lg">
                      <span class="counter-number">+</span>
                      <div class="counter-label text-uppercase">Add new transactions</div>
                    </div>
                  </div>
            </div>
            <div class="col-lg-6">
              <div class="card card-block p-25">
                <a href="/admin/viewAllTransactions">
                <div class="counter counter-lg">
                  <div class="counter-number-group">
                    <span class="counter-number"> <i class="icon md-chart" aria-hidden="true"></i></span>
                  </div>
                  <div class="counter-label text-uppercase">View all transactions</div>
                </div>
                </a>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card card-block p-25 bg-blue-600">
                <div class="counter counter-lg counter-inverse">
                  <div class="counter-label text-uppercase">Debit Transactions</div>
                  <span class="counter-number">{{$debit}}</span>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card card-block p-25 bg-purple-600">
                <div class="counter counter-lg counter-inverse">
                  <div class="counter-label text-uppercase">Credit Transactions</div>
                  <div class="counter-number-group">
                    <span class="counter-number">{{$credit}}</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-6 col-lg-12">
          <!-- Card -->
          <div class="card-group">
            <div class="card card-block p-0">
              <div class="counter counter-md vertical-align bg-white h-300">
                <div class="counter-icon p-30 green-600" style="position:absolute;top:0;left:0;">
                  <i class="icon md-chart" aria-hidden="true"></i>
                </div>
                <a href="/admin/transaction/pending">
                <div class="counter-number-group font-size-30 vertical-align-middle">
                  <span class="counter-icon green-600 mr-10"><i class="md-trending-up"></i></span>
                  <span class="counter-number">{{$pending}}</span>
                  <div class="font-size-20 mt-3">Pending</div>
                </div>
                </a>
              </div>
            </div>
            <div class="card card-block p-0">
              <div class="vertical-align text-center bg-red-700 white p-30 h-300">
                <div class="vertical-align-middle font-size-40">
                 <small>Generate Token</small>
                </div>
              </div>
            </div>
          </div>
          <!-- End Card -->
        </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleFormModal" aria-hidden="false" aria-labelledby="exampleFormModalLabel"
  role="dialog" tabindex="-1">
  <div class="modal-dialog modal-simple">
    <form class="modal-content" name="funds"> 
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="exampleFormModalLabel">Funds Transfer</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-xl-6 form-group">
              <label for="sacct_num">Receivers Account Number</label>
            <input type="text"  id="acct_num" onchange="getName('/user/fund/transaction/getReceiverName');" class="form-control" name="acct_num" placeholder="">
          </div>
          <div class="col-xl-6 form-group">
              <label for="sacct_num">Receivers name <img id="loading" src="/img/spin.gif" width="50px" height="50px"> <span id="ajaxError" onload="hide()"><small style="color:red">Account number not found</small></span></label>
            <input type="text" class="form-control" name="r_name" placeholder="">
          </div>
          <div class="col-xl-6 form-group">
              <label for="sacct_num">Amount To Transfer</label>
            <input type="number" class="form-control" step="any" name="amount" placeholder="GHC">
          </div>
          <div class="col-xl-12 form-group">
              <label for="sacct_num">Description</label>
            <textarea class="form-control" name="description" rows="5" placeholder="Transfer Description"></textarea>
          </div>
          <div class="col-md-12 float-right">
            <button id="submit" class="btn btn-primary" data-dismiss="modal" type="button">Send</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- End Modal -->
@endsection
@section('js')
<script>
    $(document).ready(function(){
    $('#loading').hide();
    $('#ajaxError').hide();
    $('#submit').click(function(e){
        e.preventDefault();
       if(ajaxPostFunction('/admin/fund/creditAccount')) {
        $('#progressbar').css('width','80%');
       }
        
    
    })
  
    })
</script>
<script src="/js/sweetalert/sweetalert.min.js"></script>
<script src="/js/ajax.js"></script>
@endsection

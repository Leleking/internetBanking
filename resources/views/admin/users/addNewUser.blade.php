@extends('admin.index')
@section('css')
<link rel="stylesheet" href="/css/sweetalert.css">
@endsection
@section('content')
<div class="page">
        <div class="page-header">
          <h1 class="page-title">Material Elements</h1>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Forms</a></li>
            <li class="breadcrumb-item active">Material</li>
          </ol>
        </div>
        <div class="page-content container-fluid">
          <div class="row">
            <div class="col-md-6">
              <!-- Panel Static Labels -->
              <div class="panel">
                <div class="panel-heading">
                  <h3 class="panel-title">User</h3>
                </div>
                <div class="panel-body container-fluid">
                  <form>
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="inputText">Name</label>
                      <input type="text" class="form-control" id="inputText" name="name" placeholder=""
                      />
                    </div>
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="inputEmail">Email</label>
                      <input type="email" class="form-control" id="inputEmail" name="email" placeholder=""
                      />
                    </div>
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="inputPassword">Phone</label>
                      <input type="text" class="form-control" id="inputPassword" name="phone"
                        placeholder="" />
                    </div>
                    <div class="form-group form-material" data-plugin="formMaterial">
                      <label class="form-control-label" for="inputFile">Gender</label>
                      <select name="gender"  class="form-control" id="">
                          <option value="0">male</option>
                          <option value="1">female</option>
                      </select>
                    </div>
                </div>
              </div>
              <!-- End Panel Static Labels -->
            </div>
  
            <div class="col-md-6">
              <!-- Panel Floating Labels -->
              <div class="panel">
                <div class="panel-heading">
                  <h3 class="panel-title">Address</h3>
                </div>
                <div class="panel-body container-fluid">
                    <div class="form-group form-material floating" data-plugin="formMaterial">
                      <input type="text" class="form-control" name="address" />
                      <label class="floating-label">Address</label>
                    </div>
                    <div class="form-group form-material floating" data-plugin="formMaterial">
                      <input type="text" class="form-control" name="city" />
                      <label class="floating-label">City</label>
                    </div>
                    <div class="form-group form-material floating" data-plugin="formMaterial">
                      <input type="text" class="form-control" name="zip" />
                      <label class="floating-label">Zip</label>
                    </div>
                    <div class="form-group form-material floating" data-plugin="formMaterial">
                            <button class="btn btn-primary" id="submit">Add new</button>
                    </div>
                   
                  </form>
                </div>
              </div>
              <!-- End Panel Floating Labels -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Page -->
  
  
@endsection
@section('js')
<script>
$(document).ready(function(){
    $('#loading').hide();
    $('#ajaxError').hide();
    $('#submit').click(function(e){
        e.preventDefault();
       if(ajaxPostFunction('/admin/addNewUser')) {
        $('#progressbar').css('width','80%');
       }
        
    
    })
  
    })
</script>
<script src="/js/sweetalert/sweetalert.min.js"></script>
<script src="/js/ajax.js"></script>
@endsection
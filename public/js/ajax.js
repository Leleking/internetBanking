
 

function ajaxPostFunction(to){
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
var data = $('form').serialize();
$.ajax({
type: "POST",
url: to,
data: data,
beforeSend: function(){
    swal('Loading...');
},
success: function(data) {
    //swal("Good job!", data.response, "success");
  swal('Great',data.response,'success');
  //$('#reset').click();
},
error: function(errors,status,xhr){
    var err = errors.responseJSON.errors;
   $.each(err,function(key,value){
    sweetAlert("Oops...", value+"!!", "error");
   }) ;

}




   
});
};
function getName(to){
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
        var acct_num = document.funds.acct_num.value;
  $.ajax({
    type: "POST",
    url: to,
    data: {acct_num:acct_num},
    beforeSend: function(){
        $('#loading').show();
    },
    success: function(data) {
        //swal("Good job!", data.response, "success");
      //swal('Great',data.response,'success');
      //$('#reset').click();
      $('#loading').hide();
      if(data.response){
       document.funds.r_name.value = data.response;
      }else{
          document.funds.r_name.value = '';
            $('#ajaxError').show();
      }
    },
    error: function(errors,status,xhr){
        var err = errors.responseJSON.errors;
       $.each(err,function(key,value){
        sweetAlert("Oops...", value+"!!", "error");
       }) ;
    
    }

  });
}

// This simple method rounds a number to two decimal places.
function round(x) {
  return Math.round(x*100)/100;
}

/*

*/
function ajaxPostPayEmiFunction(to){
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
var data = $('form').serialize();
$.ajax({
type: "POST",
url: to,
data: data,
beforeSend: function(){
    swal('Loading...');
},
success: function(data) {
    //swal("Good job!", data.response, "success");
  swal('Great',data.response,'success');
  //$('#reset').click();
},
error: function(errors,status,xhr){
    var err = errors.responseJSON.errors;
   $.each(err,function(key,value){
    sweetAlert("Oops...", value+"!!", "error");
   }) ;

}




   
});
};

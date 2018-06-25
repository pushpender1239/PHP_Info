<?php 
$('#req123').click(function () {
     var otp = $('#otp12').val();                 
    var otp1 = $('#otp123').val();                                  
    jQuery.ajax{                     
        url: "",                     
        method: 'POST',                     
        dataType: 'json',                     
        data: {                                                  
            otp: otp1,                         
            cnf_otp: otp                                 
        },                     
        success: function (data)                     
        {                         
            
            if(data.status == true)                        
            {                       
                $( "#enqueryModal" ).modal('hide');                            
                $('#contact_info').show();                             
                $('#contshow').hide();                         
            }                        
            else                         
            {                             
                //$( "#enqueryModal" ).modal('hide');                             
                swal({                            
                    title: "Ooops...!!",                             
                    text: "Some error occoured processing request...please try again.",                             type: "warning",                             
                    showCancelButton: false,                             
                    confirmButtonClass: 'btn btn-warning',                             
                    confirmButtonText: 'OK'                             
                });                         
            }                     
        }                 
    });             
});

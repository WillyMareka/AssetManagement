$(document).ready(function(){


$(".js-example-placeholder-single").select2({
  placeholder: "Select: Please select one",
  allowClear: true
});


$(".js-example-placeholder-single").select2({
  placeholder: "Select: House no -- Estate Name",
  allowClear: true
});

$('#asset-house').hide();

$(".js-example-placeholder-single").select2({
  placeholder: "Select an Option",
  allowClear: true
});


   $(".transaction_other").hide();

   // $(".transaction_other").attr();
   


 $('#paymentmethod').change(function(){
		
		var tran_other = $('#paymentmethod option:selected').val();
		if (tran_other != 'Cash') {
			$('.transaction_other').slideDown();
			$('#paymenttrans').prop('required',true);
		}else{
			$('.transaction_other').slideUp();
			$('#paymenttrans').prop('required',false);
		};
	});

 // $(".js-example-placeholder-single").select2({
 //     placeholder: "Select the Payment Method",
 //     allowClear: true
 //  });


    $('#paymentfor_1').change(function(){
      $("#payment_1").prop("disabled", !$(this).is(':checked'));
    });

    $('#paymentfor_2').change(function(){
      $("#payment_2").prop("disabled", !$(this).is(':checked'));
    });

    $('#paymentfor_3').change(function(){
      $("#payment_3").prop("disabled", !$(this).is(':checked'));
    });


     $(function(){
            $("#table_search_estate").change(function(){  
                     /*dropdown post */// 
                     
                     var query = $(this).serialize();
                    
                     $.ajax({
                        type: "POST",  
                        url: base_url + 'tenant/buildDropHouses', 
                        data: query,  
                        dataType: 'json',
                        success:function(data){ 
                           $('#asset-house').show();
                           $("#houseDrp").select2({
                            data: data
                           }); 
                           console.log(data);
                        }  
                     });  
            });  
       });





// ....Function for registering estates.... //
 $(function(){
       $("#estateregistration").submit(function(){
          


         var formData = new FormData($(this)[0]);
 
         $.ajax({
           type: "POST",
           url: base_url + 'estate/estateregistration',
           data: formData,
           async: false,
           cache: false,
           contentType: false,
           processData: false,
           success: function(data){
               // ....After successful registration, then....//
              
              swal({   title: "Estate Registration",   text: "Estate has been registered",   timer: 3000 });


           }
 
         });
 
         return false;  //stop the actual form post !important!
 
      });
   });

     // ....end of function.... //




     // ....Function for editing estates.... //
 $(function(){
       $("#estateediting").submit(function(){
          
  
   

         var formData = new FormData($(this)[0]);
 
         $.ajax({
           type: "POST",
           url: base_url + 'estate/editestate',
           data: formData,
           async: false,
           cache: false,
           contentType: false,
           processData: false,
           success: function(data){
               // ....After successful editing, then....//
              
              swal({   title: "Estate Editing",   text: "Estate has been updated",   timer: 3000 });

              
             

           }
 
         });
 
         return false;  //stop the actual form post !important!
 
      });
   });

     // ....end of function.... //




// ....Function for registering houses.... //
 $(function(){
       $("#houseregistration").submit(function(){
          


         var formData = new FormData($(this)[0]);
 
         $.ajax({
           type: "POST",
           url: base_url +'house/houseregistration',
           data: formData,
           async: false,
           cache: false,
           contentType: false,
           processData: false,
           success: function(data){
               // ....After successful registration, then....//
              
              swal({   title: "House Registration",   text: "House has been registered",   timer: 3000 });


           }
 
         });
 
         return false;  //stop the actual form post !important!
 
      });
   });

     // ....end of function.... //




     // ....Function for editing houses.... //
 $(function(){
       $("#houseediting").submit(function(){
          
  
   

         var formData = new FormData($(this)[0]);
 
         $.ajax({
           type: "POST",
           url: base_url + 'house/edithouse',
           data: formData,
           async: false,
           cache: false,
           contentType: false,
           processData: false,
           success: function(data){
               // ....After successful editing, then....//
              //alert(data);
              swal({   title: "House Editing",   text: "House has been updated",   timer: 3000 });

           }
 
         });
 
         return false;  //stop the actual form post !important!
 
      });
   });




// ....Function for logging in.... //
 $(function(){
       $("#loginauthentication").submit(function(){
         

         var formData = new FormData($(this)[0]);
 
         $.ajax({
           type: "POST",
           url: base_url + 'login/auth',
           data: formData,
           async: false,
           cache: false,
           contentType: false,
           processData: false,
           success: function(msg){
            //alert(msg);
               if(msg === 'incorrect'){
                  $("#username").attr("placeholder", "Username").val("").focus().blur();
                  $("#password").attr("placeholder", "Password").val("").focus().blur();
                  swal({   title: "Incorrect Credentials",   text: "The wrong Username or Password",   timer: 3000 });

               }else if(msg === 'inactive'){
                  $("#username").attr("placeholder", "Username").val("").focus().blur();
                  $("#password").attr("placeholder", "Password").val("").focus().blur();
                  swal({   title: "Account Inactive",   text: "Your Account is Inactive",   timer: 3000 });

               }else if(msg === 'session'){
                  $("#username").attr("placeholder", "Username").val("").focus().blur();
                  $("#password").attr("placeholder", "Password").val("").focus().blur();
                  swal({   title: "Session Failure",   text: "Your Session has failed to start",   timer: 3000 });

               }else if(msg === 'validation'){
                  $("#username").attr("placeholder", "Username").val("").focus().blur();
                  $("#password").attr("placeholder", "Password").val("").focus().blur();
                  swal({   title: "Validation Error",   text: "Your Credentials are not valid",   timer: 3000 });

               }else{
                    if(msg === '1'){
                      $(location).attr('href', 'hr');
                    }else if(msg === '2'){
                      $(location).attr('href', 'caretaker');
                    }else{
                        $("#username").attr("placeholder", "Username").val("").focus().blur();
                        $("#password").attr("placeholder", "Password").val("").focus().blur();
                        swal({   title: "User Type",   text: "The User Type is not found",   timer: 3000 });
                    }
               }
            }
         });
 
         return false;  //stop the actual form post !important!
 
       });
      });

     // ....end of function.... //





    // ....Function for registering tenants.... //
 $(function(){
       $("#paymentransaction").submit(function(){
          

         var formData = new FormData($(this)[0]);

 
         $.ajax({
           type: "POST",
           url: base_url + 'payments/paymenttransaction',
           data: formData,
           async: false,
           cache: false,
           contentType: false,
           processData: false,
           success: function(data){
               // ....After successful registration, then....//
              $('#paymentbutton').click(function(){
                   $('#paymentransaction')[0].reset();
               });
              swal({   title: "Payment Done",   text: "Payment has been Recorded",   timer: 3000 });


           }
 
         });
 
         return false;  //stop the actual form post !important!
 
      });
   });

     // ....end of function.... //






function validate()
{
   // var emailID = document.tenantregistration.email.value;
   // atpos = emailID.indexOf("@");
   // dotpos = emailID.lastIndexOf(".");
   // if (atpos < 1 || ( dotpos - atpos < 2 )) 
   // {
   //     alert("Please enter correct email ID")
   //     document.tenantregistration.email.focus() ;
   //     return false;
   // }
   return( true );
}



// ....Function for registering tenants.... //
 $(function(){
       $("#tenantregistration").submit(function(){
   
     
         var formData = new FormData($(this)[0]);
 
         $.ajax({
           type: "POST",
           url: base_url + 'tenant/registration',
           data: formData,
           async: false,
           cache: false,
           contentType: false,
           processData: false,
           success: function(data){
               // ....After successful registration, then....//
              
              swal({   title: "Tenant Registration",   text: "Tenant has been registered, please move to assign house",   timer: 3000 });

              

           }
 
         });
         $("#registerten").click(function(){
              $("#assignten").tabs( "option", "active", 2 );
         });
 
         return false;  //stop the actual form post !important!
 
      });
   });

     // ....end of function.... //



     // ....Function for assigning tenants.... //
 $(function(){
       $("#tenantassigning").submit(function(){

         var formData = new FormData($(this)[0]);
 
         $.ajax({
           type: "POST",
           url: base_url + 'tenant/assignhouse',
           data: formData,
           async: false,
           cache: false,
           contentType: false,
           processData: false,
           success: function(data){
               // ....After successful assigning, then....//
               
              swal({   title: "Tenant Assigning",   text: "Tenant has been assigned house",   timer: 3000 });

             
             

           }
 
         });
 
         return false;  //stop the actual form post !important!
 
      });
   });

     // ....end of function.... //




     // ....Function for editing tenants.... //
 $(function(){
       $("#tenantediting").submit(function(){
          
  
     

         var formData = new FormData($(this)[0]);
 
         $.ajax({
           type: "POST",
           url: base_url + 'tenant/edittenant',
           data: formData,
           async: false,
           cache: false,
           contentType: false,
           processData: false,
           success: function(data){
               // ....After successful editing, then....//
              
              swal({   title: "Tenant Editing",   text: "Tenant has been updated",   timer: 3000 });

           }
 
         });
 
         return false;  //stop the actual form post !important!
 
      });
   });

     // ....end of function.... //

    
                  
            
            
         











});
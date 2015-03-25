$(document).ready(function(){
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


    // ....Function for registering tenants.... //
 $(function(){
       $("#paymentransaction").submit(function(){
          

         var formData = new FormData($(this)[0]);
 
         $.ajax({
           type: "POST",
           url: "payments/paymenttransaction",
           data: formData,
           async: false,
           cache: false,
           contentType: false,
           processData: false,
           success: function(data){
               // ....After successful registration, then....//
              
              swal({   title: "Payment Done",   text: "Payment has been Recorded",   timer: 3000 });


           }
 
         });
 
         return false;  //stop the actual form post !important!
 
      });
   });

     // ....end of function.... //



});
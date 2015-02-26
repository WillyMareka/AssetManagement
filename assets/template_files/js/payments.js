$(document).ready(function(){
   $(".transaction_other").hide();

   // $(".transaction_other").attr();

 $()

 $('#paymentlmethod').change(function(){
		
		var tran_other = $('#paymentlmethod option:selected').val();
		if (tran_other != 'Cash') {
			$('.transaction_other').slideDown();
			$('#paymenttrans').prop('required',true);
		}else{
			$('.transaction_other').slideUp();
			$('#paymenttrans').prop('required',false);
		};
	});


    $('#paymentfor_1').change(function(){
      $("#payment_1").prop("disabled", !$(this).is(':checked'));
    });

    $('#paymentfor_2').change(function(){
      $("#payment_2").prop("disabled", !$(this).is(':checked'));
    });

    $('#paymentfor_3').change(function(){
      $("#payment_3").prop("disabled", !$(this).is(':checked'));
    });



});
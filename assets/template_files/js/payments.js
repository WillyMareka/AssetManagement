$(document).ready(function(){
   $(".transaction_other").hide();



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






});
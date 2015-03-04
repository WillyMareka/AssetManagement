$(document).ready(function(){

$('#tenantreg').hide();

// ....Function for registering tenants.... //
 $(function(){
       $("#tenantregistration").submit(function(){


         var formData = new FormData($(this)[0]);
 
         $.ajax({
           type: "POST",
           url: "tenant/registration",
           data: formData,
           async: false,
           cache: false,
           contentType: false,
           processData: false,
           success: function(data){
               // ....After successful registration, then....//
              
              swal({   title: "Tenant Registration",   text: "Tenant has been registered, please assign house",   timer: 3000 });

              $("#registerten").click(function(){
              $("#assignten").tabs( "option", "active", 2 );
              });

           }
 
         });
 
         return false;  //stop the actual form post !important!
 
      });
   });

     // ....end of function.... //



});



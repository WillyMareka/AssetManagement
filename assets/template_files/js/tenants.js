$(document).ready(function(){



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
               
               


              $("#registerten").click(function(){
              $("#assignten").tabs( "option", "active", 2 );
              });

           }
 
         });
 
         return false;  //stop the actual form post !important!
 
      });
   });



});



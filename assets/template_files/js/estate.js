$(document).ready(function(){


$(".js-example-placeholder-single").select2({
  placeholder: "Select: Please select one",
  allowClear: true
});


// ....Function for registering estates.... //
 $(function(){
       $("#estateregistration").submit(function(){
          


         var formData = new FormData($(this)[0]);
 
         $.ajax({
           type: "POST",
           url: "estate/estateregistration",
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
           url: "estate/editestate",
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










});



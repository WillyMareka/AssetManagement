$(document).ready(function(){


$(".js-example-placeholder-single").select2({
  placeholder: "Select: House no -- Estate Name",
  allowClear: true
});


// ....Function for registering houses.... //
 $(function(){
       $("#houseregistration").submit(function(){
          


         var formData = new FormData($(this)[0]);
 
         $.ajax({
           type: "POST",
           url: "house/houseregistration",
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
           url: "<?php echo base_url();?>house/edithouse",
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

     // ....end of function.... //










});



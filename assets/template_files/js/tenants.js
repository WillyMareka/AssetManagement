$(document).ready(function(){

$('#tenantreg').hide();


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
          
         

           if( document.tenantregistration.tenantfname.value == "" )
   {
   	  swal({   title: "Tenant First Name",   text: "Please the first name!",   timer: 2000 });
     
     document.tenantregistration.tenantfname.focus() ;
     return false;
   }

   
   if( document.tenantregistration.tenantlname.value == "" )
   {
   	swal({   title: "Tenant Last Name",   text: "Please the last name!",   timer: 2000 });
     
     document.tenantregistration.tenantlname.focus() ;
     return false;
   }

   if( document.tenantregistration.nationalpass.value == "" )
   {
   	swal({   title: "Tenant National ID / Passport No",   text: "Please the National ID / Passport!",   timer: 2000 });
     
     document.tenantregistration.nationalpass.focus() ;
     return false;
   }

   
   if( document.tenantregistration.phonenumber.value == "" ||
           isNaN( document.tenantregistration.phonenumber.value ) ||
           document.tenantregistration.phonenumber.value.length != 10 )
   {
   	swal({   title: "Tenant Mobile Number",   text: "Please provide a number in the format 07########",   timer: 2000 });
     
     document.tenantregistration.phonenumber.focus() ;
     return false;
   }

   if( document.tenantregistration.tenantstatus.value == "" )
   {
   	swal({   title: "Tenant Status",   text: "Please select the status!",   timer: 2000 });
     
     document.tenantregistration.tenantstatus.focus() ;
     return false;
   }

   // return true;
     

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



$(document).ready(function(){

// var $tabs = $('.tabtenant').tabs({ selected: 0, disabled: [1,2,3] }); 
// $("#registertenant").click(function(){
//    $tabs.tabs('enable', 1).tabs('select', 1).tabs('disable', 0);        
// }); 

//action="<?php echo base_url() .'tenant/registration';?>"

 $(function(){
       $("#tenantregistration").submit(function(){
         dataString = $("#tenantregistration").serialize();
 
         $.ajax({
           type: "POST",
           url: "tenant/registration",
           data: dataString,
 
           success: function(data){
               //alert(dataString);
           }
 
         });
 
         return false;  //stop the actual form post !important!
 
      });
   });



});
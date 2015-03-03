$(document).ready(function(){

// var $tabs = $('.tabtenant').tabs({ selected: 0, disabled: [1,2,3] }); 
// $("#registertenant").click(function(){
//    $tabs.tabs('enable', 1).tabs('select', 1).tabs('disable', 0);        
// }); 

//action="<?php echo base_url() .'tenant/registration';?>"


 $("#insert").click(function() 
    {
        var kunnr = $("#kunnr").val;
        var sKey = $("#skey").val;
        var sVal = $("#sval").val;
        var dataString = "kunnr="+kunnr+"&sKey="+sKey+"&sVal="sVal;
        $.ajax(
        {
            type: "GET",
                url: "your url", // in the page of url write the code to insert in db
                data: dataString,
                success: function(result) 
                {               
                    alert(result); // you can just check whether the row is inserted or not.
                }
            });
    });



});
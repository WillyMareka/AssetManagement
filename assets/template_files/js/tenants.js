$(document).ready(function(){

// var $tabs = $('.tabtenant').tabs({ selected: 0, disabled: [1,2,3] }); 
// $("#registertenant").click(function(){
//    $tabs.tabs('enable', 1).tabs('select', 1).tabs('disable', 0);        
// }); 

$(".tabtenant").tabs(); 

    $(".tabtenant").tabs( "option", "disabled", [ 1 ] );

    $("#registertenant").click(function () {
        $(".tabtenant").tabs( "enable", $(".tabtenant").tabs('option', 'active')+1 );
        $(".tabtenant").tabs( "option", "active", $("#tabs").tabs('option', 'active')+1 );
    });

    $(".btnPrev").click(function () {
        $(".tabtenant").tabs( "option", "active", $(".tabtenant").tabs('option', 'active')-1 );
    });



});
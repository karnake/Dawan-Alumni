$(function () {
    $("#pop-sign").hide();
    $("#btn-sign").click(function(){
        $("#pop-sign").show();
        $("section").addClass('blur');
    });
    $("#close-sign").click(function(){
        $("#pop-sign").hide();
        $("section").removeClass('blur');
    });
    
});

$(function () {
    $("#pop-connexion").hide();
    $("#btn-connexion").click(function(){
        $("#pop-connexion").show();
        $("section").addClass('blur');

    });
    $("#close-connexion").click(function(){
        $("#pop-connexion").hide();
        $("section").removeClass('blur');
    });
});
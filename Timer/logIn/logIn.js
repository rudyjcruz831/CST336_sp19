$(document).on('click', '.updateLink1', function() {
    console.log("Update link clicked");
    $("#signUpmodel").modal("show");

});
$(document).ready(function(){
    
    
    
    $.ajax({
        type: "POST",
        url: "logIn.php",
        dataType: "json",
        data : {},
        success:function(data, status){
            console.log(data);
        } 
    });//end of ejax call to logIn.php
}); // end of document ready 
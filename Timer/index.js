$(document).on('click', '.updateLink', function() {
    console.log("Update link clicked");
    $("#manageTime").modal("show");
    // console.log($("name[appt1]").val());
    $("#timeEnterbutton").on('click' , function(){
            console.log("Start Time: " + $('#appt1').val());    
            console.log("End Time: "+  $('#appt2').val());
            console.log("Date: " + $('#appt0').val());
    })// end of timeEnterButton
    $("#logOutButton").on('click', function(){
        console.log("Log out Butten press");
    });// end of logOutBotton
});
$(document).ready(function() {$
    $("#logOutButton").on('click', function(){
        console.log("Log out Butten press");
    });// end of logOutBotton
    $.ajax({
        type: "GET",
        url: "index.php",
        dataType: "json",
        success:function(data, status){
            console.log(data);
        } 
    }); // end of ajax call
    
// <?php
//  session_start();
//  $_SESSION['first'] = 'rudy';
 
// ?>
    
}); // end of docuemtn ready
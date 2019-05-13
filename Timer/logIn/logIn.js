$(document).on('click', '.updateLink1', function() {
    console.log("Update link clicked");
    $("#signUpmodel").modal("show");

});
$(document).ready(function(){
    
    $("#logInButton").on(click, function(){
        
    }); // end of login In button (no modal)
    
    
    $("#signUpbuttonModel").on('click', function(){
        // e.preventDefault();
        var firstName = $("#firstNameModal").val();
        var secondName = $("#lastNameModal").val();
        var email = $("#inputEmailModal").val();
        var password = $("#inputPasswordModel").val();
        
        if(firstName === "" || secondName === "" || email === "" || password == "")
        {
            console.log("text insode skmasdlkfanfdl");
        }
        else{
            $.ajax({
            type: "POST",
            url: "logIn.php",
            dataType: "json",
            data: {
            "name": $("#firstNameModal").val(),
            "lastName":secondName,    
            "email": email,
            "password" :password,
        },
        success:function(data, status){
            if(data['success'] == false)
            {
                console.log("Hello World")
            }
        } 
        
        });//end of Sign Up button Listener Modal
            window.location = "../index.html"
        }
    
}); // end of document ready
});
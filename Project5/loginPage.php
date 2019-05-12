<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        
        <script>
            /*global $*/
            $(document).ready(function(){
            $("#emailButton").on("click", function(e){
                $emailInput = $("#emailInput").val();
                e.preventDefault();
                
                function emailValidation(email){
                    return /\S+@\S+\.\S+/.test(email);
                }
                if(emailValidation($emailInput))
                {
                    window.location = "index.php"
                }
                else
                    $("#emailHelpLine").html("Incorrect Format");
                
            });
            
        });// end of document ready
        </script>
    
    
    </head>
    <body>
        <form class="form-inline">
          <div class="form-group">
            <label for="emailInput">Email</label>
            <input type="email" id="emailInput" class="form-control mx-sm-3">
            <small id="emailHelpLine" class="text-muted">
                Enter email
            </small>
          </div>
          <button class="btn btn-primary" type="submit" id="emailButton">Submit form</button>
        </form>
    </body>

    
</html>
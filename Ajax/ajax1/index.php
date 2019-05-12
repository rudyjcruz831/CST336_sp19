<!DOCTYPE html>
<html>
    <head>
        <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
        
        <title> </title>
    </head>
    <body>
        <form>
            Username: <input type="text" id="username">
            <span style="coloe:red" id"usernameValidation"></span> <br/>
        </form>
        
        <script>
        /* global $*/
            $("#username").change(function (){
                console.log($(this).val())
                $.ajax({
                type: "get"
                url:"api/usernameLookup.php"
                data: 
                {
                    "username": $(this).val()
                }
                success: function(data, status)
            })
                
                
            })
            

            
        </script>


    </body>
    
    
</html>
<!DOCTYPE html>
<html>
    <head>
        <title>Match @ Cinder</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        

    <script>
        /*global $*/
        $(document).ready(function(){
            $.ajax({
                type:"GET",
                url: "api/getUserInfo.php",
                dataType: "json",
                success: function(data, status)
                {
                    $("#userImg").html("");
                    $("#userName").html("");
                    $("#userInfoP").html("");
                    
                    data.forEach(function(key){
                        $("#userImg").append("<img src='" + key['picture_url'] + "' width='300' /> <br />");                    
                        $("#userName").append("<h3> About @"+ key['username'] + "</h3>");
                        $("#userInfoP").append("<p>"+ key['about_me'] +"<p/>");
                        
                    });
                }
            });// end of getting user info
            
            
            $("#like").on("click", function(){
                $.ajax({
                    type:"GET",
                    url: "api/getNextUserInfo.php",
                    dataType: "json",
                    success: function(data, status)
                    {
                     
                        $("#userImg").html("");
                        $("#userName").html("");
                        $("#userInfoP").html("");
       
                        data.forEach(function(key){
                            $("#userImg").append("<img src='" + key['picture_url'] + "' width='300' /> <br />");                    
                            $("#userName").append("<h3> About @"+ key['username'] + "</h3>");
                            $("#userInfoP").append("<p>"+ key['about_me'] +"<p/>");
                            
                        });
                    }
                });
            });// end of getting Next user
            $("#dislike").on("click", function(){
                $.ajax({
                    type:"GET",
                    url: "api/getNextUserInfo.php",
                    dataType: "json",
                    success: function(data, status)
                    {
                     
                        $("#userImg").html("");
                        $("#userName").html("");
                        $("#userInfoP").html("");
       
                        data.forEach(function(key){
                            $("#userImg").append("<img src='" + key['picture_url'] + "' width='300' /> <br />");                    
                            $("#userName").append("<h3> About @"+ key['username'] + "</h3>");
                            $("#userInfoP").append("<p>"+ key['about_me'] +"<p/>");
                            
                        });
                    }
                });
            });// end of getting Next user
            $("#dontKnow").on("click", function(){
                $.ajax({
                    type:"GET",
                    url: "api/getNextUserInfo.php",
                    dataType: "json",
                    success: function(data, status)
                    {
                     
                        $("#userImg").html("");
                        $("#userName").html("");
                        $("#userInfoP").html("");
       
                        data.forEach(function(key){
                            $("#userImg").append("<img src='" + key['picture_url'] + "' width='300' /> <br />");                    
                            $("#userName").append("<h3> About @"+ key['username'] + "</h3>");
                            $("#userInfoP").append("<p>"+ key['about_me'] +"<p/>");
                            
                        });
                    }
                });
            });// end of getting Next user
            
            
        });//end of $(document).ready
    
    </script>
    </head>
    <body>

        <header>
            <nav>
                <div>
                    <a href="index.php" id="match" >Match</a>
                </div>
                <div> | </div>
                <div>
                    <a href="history.php" id="history">History</a>
                </div>
            </nav>
            
            <div><h1>Match</h1></div>
        </header>
        
        <div id="centerDiv">
            
            <div id="userImg"></div>
            
            <div id="userInfo">
                 <div id="userName"></div>
                 <div id="userInfoP"></div>
            </div>
            
        </div>
        
        <footer>
            <button id="dislike">Dislike</button>
            <button id="dontKnow">?</button>
            <button id="like">Like</button>
        </footer>
        
    
    </body>
</html>
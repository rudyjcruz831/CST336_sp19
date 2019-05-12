<!DOCTYPE html>
<html>
    <head>
        <title> Lab8_externalAPI </title>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
       
        <script>
            /*global $*/
            $("document").ready(function(){
                $.ajax(function(){
                    type: "GET",
                    url: "api/pixabay.php",
                    dataType: "json",
                    data: {
                        
                    }
                    success: function(data, status)
                    {
                    
                    }
                })//end of getting searched images
                
                
            });//end of document ready
        </script>
    
    
    </head>
    <body>
            <form>
                <label for="serachImg">Search: </label>
                <input type="text" name="searchImg" id= "searchimg"/>
                <!--<input type="submit" value="Submit"/>-->
            </form>
            <br>
            <button id= "searchButton">Search</button>
            
            <table id= tableImg>
                <tr>
                    <th>first</th>
                    <th>second</th>
                    <th>third</th>
                </tr>
                <tr>
                    <td></td>
                </tr>
            </table>
            
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <title>OtterMart Product Search </title>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <script type="text/javascript" src="<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
"></script>

    <script>
        $(document).ready(function(){
                $.ajax({
                type: "GET",
                url: "api/getCategories.php",
                dataType: "json",
                success: function(data, status){
                    
                }
            });
        });
    </script>


    </head>
    <body>
        <div>
            <h1>OtterMart Product Search</h1>
            <form>
                
                <label for="product">Product: </label>
                <input type="text" name="product" id="product"/>
                <br>
                <label for="categoryS">Category:</label> 
                    <select name="category" id="categoryS">
                        <option value="">Select One</option>
                    </select>
                    
                <br>
                Price: From <input type="text" name="priceFrom" size="7"/>
                        To <input type="text" name="priceTo" size="7"/>
                <br>
                Order result by:
                <br>
                
                <input type="radio" name="orderBy" value= "price"/> Price <br>
                <input type="radio" name="orderBy" value ="name"/> Name <br>
                
                <br><br>
            </form>
            <button id = "searchForm">Search</button>
        </div>
        
        <hr>
        
    </body>
</html>
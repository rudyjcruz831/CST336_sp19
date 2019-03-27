<!DOCTYPE html>
<html>
    <head>
        <title>OtterMart Product Search </title>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        /*global $*/
        $(document).ready(function(){
            $.ajax({
                type: "GET",
                url: "api/getCategories.php",
                dataType: "json",
                success: function(data, status)
                {
                    data.forEach(function(key){
                        $("[name=category]").append("<option value = " + key["catId"]+ ">" + key["catName"] +  "</option>");
                    });
                }
            });// End getCategorise
            
            $("#searchForm").on("click", function(){
               $.ajax({
                    type:"GET",
                    url:"api/getSearchResults.php",
                    dataType: "json",
                    data: {
                        "product" : $("[name=product]").val(), 
                        "category" : $("[name=category]").val(),
                        "priceFrom" : $("[name=priceFrom]").val(),
                        "priceTo" : $("[name=priceTo]").val(), 
                        "orderBy" : $("[name=orderBy]:checked").val(), 
                    },
                    success: function(data, status)
                    {
                        $("#result").html("<h3> Product Found: </h3>");
                        data.forEach(function(key){
                            $("#result").append(key['productName'] + " " + key['productDescription'] + " $" + key['price'] + "<br>");
                            $("#result").append("<a href='#' class ='historyLink' id='" + key['productId'] + "'>History </a> ")
                        });
                    }
               }); 
            });// End of searchForm
            
            $(document).on("click", '.historyLink', function(){
                $('#purchaseHistoryModal').modal("show");
                $.ajax({
                    type: "GET",
                    url: "api/getPurchaseHistory.php",
                    dataType: "json",
                    data : {"productId" : $(this).attr("id")},
                    success: function(data, status){
                        if(data.length != 0){ // checks if the API returns empty list
                            $("#history").html("");
                            $("#history").append(data[0]['productName'] + "<br />");
                            $("#history").append("<img src='" + data[0]['productImage'] + "' width='200' /> <br />");
                            data.forEach(function(key){
                                $("#history").append("Purchase Date: " + key['purchaseDate']+ "<br />");
                                $("#history").append("Unit Price: " + key['unitPrice'] + "<br />" );
                                $("#history").append("Quantity : " + key['quantity'] + "<br />" );
                            });                       
                        }
                        else{
                            $("#history").html("No purchased hisotry for this item.");
                        }
                    }
                });
            });// End historyLink
            
            
        });//End of $(document).ready()
    </script>


    </head>
    <body>
        <div>
            <h1>OtterMart Product Search</h1>
            <form>
                
                <label for="product">Product: </label>
                <input type="text" name="product" id="product"/>
                <br>
                <label for="category">Category:</label> 
                    <select name="category" id="category">
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
        
        <br>
        <hr>
        <div id="result"></div>
        <hr>
        
        <div class="modal" tabindex="-1" role="dialog" id="purchaseHistoryModal">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Product History</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div id="history"></div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        
    </body>
</html>
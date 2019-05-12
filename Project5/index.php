<!DOCTYPE html>
<html>
    <head>
        <title>Pictures</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
          <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
        <script>
        /*global $*/
            $(document).ready(function(){
                $.ajax({
                    type:"GET",
                    url:"api/getImages.php",
                    dataType: "json",
                    success: function(data, status)
                    {
                        $("#tableDiv").html("<h3>hello</h3>");
                        var eTable="<table>";
                        
                        // data.function(function(key){
                            $dataSize = data.length;
                              for(var i=0; i<data.length;i = i+3)
                              {
                                eTable += "<tr>";
                                eTable += "<td><img src="+ data[i%$dataSize]['media']+"></img</td>";
                                eTable += "<td><img src="+ data[i+1%$dataSize]['media']+"></img</td>";
                                eTable += "<td><img src="+ data[i+2%$dataSize]['media']+"></img</td>";
                                eTable += "</tr>";
                              }
                        
                      eTable +="</table>";
                      $('#tableDiv').html(eTable);
                    
                    }
                    
                });// end of getting images
 
                
                $.ajax({
                  type:"POST",
                  url: "api/setImages.php",
                  dataType:"json",
                  data: arr
                });// end of post
            }); // end of Document ready
            
            
            
        </script>
    </head>
    <body>
        
          <nav>
            <div class="nav-wrapper">
              <a href="#" class="brand-logo center">Photo Galary </a>
              <ul id="nav-web" class="right hide-on-sml-and-down">
                <li><a href="loginPage.php">SignIn</a></li>
              </ul>
            </div>
          </nav>
          <div>
      
          <form method="POST" enctype="multipart/form-data">
            <input type="file" name="fileName" />
            <input type="submit"  name="uploadForm" value="Upload File" />
          </div>
        <!--<div><img src=""></img></div>-->

            
        <div id="tableDiv"></div>        
        <!--<table border="1" align="center" width="70%">-->
        <!--<caption>Picture Gallery</caption>-->
        <!--<tr>-->
        <!--<td><img src="#" id= "oneOne"></img></td>-->
        <!--<td><img src="#" id= "oneTwo"></img></td>-->
        <!--<td><img src="#" id= "oneThree"></img></td>-->
        <!--</tr>-->
        <!--<tr>-->
        <!--<td><img src="#"id= "twoOne"></img></td>-->
        <!--<td><img src="#"id= "twoTwo"></img></td>-->
        <!--<td><img src="#"id= "twoThree"></img></td>-->
        <!--</tr>-->
        <!--</table>-->
        
    </body>
</html>
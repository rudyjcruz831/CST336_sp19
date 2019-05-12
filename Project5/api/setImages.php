<?php
  include 'dbConnection.php';

  $dbConn = getDatabaseConnection("c9");
  if ($_FILES["fileName"]["error"] > 0) {
    echo "Error: " . $_FILES["fileName"]["error"] . "<br>";
  }
  else {
    echo "Upload: " . $_FILES["fileName"]["name"] . "<br>";
    echo "Type: " . $_FILES["fileName"]["type"] . "<br>";
    echo "Size: " . ($_FILES["fileName"]["size"] / 1024) . " KB<br>";
    echo "Stored in: " . $_FILES["fileName"]["tmp_name"];
  
  
    $binaryData = file_get_contents($_FILES["fileName"]["tmp_name"]);
    $sql = "INSERT INTO c9 . picture_info (email_address, caption, media)
            VALUES (:email_address,:caption, :media)";
    $stm=$dbConn->prepare($sql);
    $arr = array(":email_address"=>"rudy@12333",
               ":caption"=> "woo",
               ":media"=>$binaryData);
    $stm->execute($arr);
    echo "<br />File saved into database <br /><br />";                    
  }
?>
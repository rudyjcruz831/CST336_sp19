<?php
    include '../dbConnection.php';
    
    $conn = getDatabaseConnection("ottermart");
        
    $sql = "SELECT catId, catName FROM om_category ORDER BY catName";
    
    $stmt = $conn->prepare($sql);
    //$stmt->execute();
    
    $stmt -> execute (  array ( ':id' => '1')  );
    
    // Process the results if there are any
    if ($stmt->rowCount() > 0) {
        while ($row = $stmt -> fetch())  {
            echo  $row['field1_name'] . ", " . $row['field2_name'];
        }
    }
    else {
        echo "No data found";
    }
    
?>
<?php
    
    include '../dbConnection.php';
    
    $conn = getDatabaseConnection("ottermart");

    $np =array();   
    
    
    $sql = "SELECT *
            FROM om_product
            NATURAL JOIN om_purchase 
            WHERE productId = :pId";   
    
    $stmt = $conn->prepare($sql);
    $stmt->execute($np);
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($records);
?>
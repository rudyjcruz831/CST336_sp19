<?php
    include '../dbConnection.php';
    
    $conn = getDatabaseConnection("cinder");
    
    $randomNum = rand(1,20);
    
    $namedParameter = array();
    $namedParameter[":user1"] = rand(1,20);
    
    
    $sql =  "SELECT * FROM user WHERE id = :user1";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute($namedParameter);
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($records);
?>
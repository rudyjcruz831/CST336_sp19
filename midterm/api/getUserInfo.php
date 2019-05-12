<?php
    include '../dbConnection.php';
    
    $conn = getDatabaseConnection("cinder");
    
    
    
    $sql =  "SELECT * FROM user WHERE id = 1";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($records);
?>
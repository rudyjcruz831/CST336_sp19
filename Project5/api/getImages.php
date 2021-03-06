<?php
    include '../dbConnection.php';
    
    $conn = getDatabaseConnection("c9");
    
    $stmt = $dbConn->prepare($sql);
    $sql = "SELECT * FROM ";
    $stmt->execute( array(":fileId"=> $_GET['fileId']));
    
    $stmt->bindColumn('media', $data, PDO::PARAM_LOB);
    $record = $stmt->fetch(PDO::FETCH_BOUND);
    
    if (!empty($record)){
        header('Content-Type:' . $record['fileType']);   //specifies the mime type
        header('Content-Disposition: inline;');
        echo $data;
    }

?>
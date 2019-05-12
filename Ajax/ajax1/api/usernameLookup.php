<?php
    $username = array("eddy", "rudy","juan", "carlos" );
    
    if (in_array($_GET['username'], $username)){
        echo "Unavailable";
    }else{
        echo "Available";
    }
?>
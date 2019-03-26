<?php   

function getDatabaseConnection($dbname = 'ottermart')
{
    $host = 'localhost';//cloud9
    //$dbname = 'tcp'
    $username = 'root';
    $password = '';
    
    
    //creates db connection 
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname",$username, $password);
    
    //display errors when when accessing tables
    $dbConn -> setAttribute(POD::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    return $dbConn;
}

?>
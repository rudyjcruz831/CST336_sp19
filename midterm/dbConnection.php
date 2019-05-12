<?php   

function getDatabaseConnection()
{
    $connUrl = getenv('JAWSDB_MARIA_URL');
    $hasConnUrl = !empty($connUrl);
    
    $connParts = null;

    
    if ($hasConnUrl){
        //console.log("hasConnUrl true");
        $connParts = parse_url($connUrl);
    }

    $host = $hasConnUrl ? $connParts['host'] : getenv('IP');
    $dbname = $hasConnUrl ? ltrim($connParts['path'],'/') : 'cinder';
    $username = $hasConnUrl ? $connParts['user'] : getenv('C9_USER');
    $password = $hasConnUrl ? $connParts['pass'] : '';
    
    //creates db connection 
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname;charset=UTF8;",$username, $password);
    
    //display errors when when accessing tables
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    return $dbConn;
}

?>

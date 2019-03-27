<?php   

function getDatabaseConnection()
{
    // $connParts = parse_url($url);

    // $host = $connParts['host'];
    // $dbname = ltrim($connParts['path'], '/');
    // $username = $connParts['user'];
    // $password = $connParts['pass'];
    
    $connUrl = getenv('JAWSDB_MARIA_URL');
    $hasConnUrl = !empty($connUrl);
    
    $connParts = null;

    
    if ($hasConnUrl){
        //console.log("hasConnUrl true");
        $connParts = parse_url($connUrl);
    }
    //print_r($connParts);
    
    //var_dump($hasConnUrl);
    $host = $hasConnUrl ? $connParts['host'] : getenv('IP');
    $dbname = $hasConnUrl ? ltrim($connParts['path'],'/') : 'ottermart';
    $username = $hasConnUrl ? $connParts['user'] : getenv('C9_USER');
    $password = $hasConnUrl ? $connParts['pass'] : '';
    
    //creates db connection 
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname",$username, $password);
    
    //display errors when when accessing tables
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    return $dbConn;
}

?>

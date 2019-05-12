<?php


class dhb{
        private $host;
        private $dbname;
        private $username;
        private $password;
        
        protected function getDatabaseConnection(){
            $connUrl = getenv('JAWSDB_MARIA_URL');
            $hasConnUrl = !empty($connUrl);
            $connParts = null;
            if ($hasConnUrl) {
                $connParts = parse_url($connUrl);
            }        
                $host = $hasConnUrl ? $connParts['host']: getenv('IP');
                $dbname = $hasConnUrl ? ltrim($connParts['path'],'/') : 'schedules';
                $username = $hasConnUrl ? $connParts['user'] : getenv('C9_USER');
                $password = $hasConnUrl ? $connParts['pass'] : '';
                
                $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                
                $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                return $dbConn;
        }
    
} 


?>
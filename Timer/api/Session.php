<?php
    class Session{
        
        //$_SESSION[$key] = $value
        public static function set($key, $value)
        {
            $_SESSION[$key] = $value;
        }
        public static function get($key)
        {
            if(isset($_SESSION[$key])){
              return $_SESSION[$key];  
            }
            else 
                return false;
            
        }
    }

?>
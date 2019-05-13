<?php
    class Session{
        private static $_sessionStart = false;
        public static function start(){
            if(self::$_sessionStart == false){
                session_start();
                self::$_sessionStart = true;
            }
        }
        //$_SESSION[$key] = $value
        public static function set($key, $value){
            $_SESSION[$key] = $value;
        }
        public static function get($key){
            if(isset($_SESSION[$key])){
              return $_SESSION[$key];  
            }
            else 
                return false;
        }
        public static function getSession(){
            echo json_encode($_SESSION);
        }
        
        public static function endSession(){
            session_destroy();
        }
    }
?>
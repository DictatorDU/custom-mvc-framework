<?php
class session{
 public static function init(){
   if(version_compare(phpversion(),'5.0.4','<')){
     if(session_id() == ""){
       session_start();
     }
   }else{
     if(session_status() == PHP_SESSION_NONE){
       session_start();
     }
   }
  }
   public static function set($key,$value){
     $_SESSION[$key] = $value;
   }

   public static function get($key){
     if(isset($_SESSION[$key])){
       return $_SESSION[$key];
     }else{
       return false;
     }
   }
   public static function chkSession(){
     self::init();
     if(self::get("login") == false){
        self::sessionDestroy();
        header("location:".BASE_URL."login");
     }
   }
   public static function chkSessionStared(){
     self::init();
     if(self::get("login") == true){
       header("location:".BASE_URL."admin/index");;
     }
   }

   public static function sessionDestroy(){
     //self::init();
     session_destroy();
     session_unset();
   }
 }
?>

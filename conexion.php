<?php
class Conexion {
  public static function conectar (){
    //mysql://q7fb6081h1qkjz25:kmvp41qtyzigonm1@zj2x67aktl2o6q2n.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/cwaec7rvaedukdq6
    $user = "q7fb6081h1qkjz25";
    $host = "kmvp41qtyzigonm1@zj2x67aktl2o6q2n.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $db_name = "cwaec7rvaedukdq6";
    $pass =  "kmvp41qtyzigonm1";
    return new myqli($host, $user, $pass, $db_name, 3306);
  }
   public static function ejecuctarSQL($sql){
     return self::conectar()->query($sql);
   }
   public static function cerrarConexion(){
     return self::conectar()->close();
   }
}
?>
    
    
    

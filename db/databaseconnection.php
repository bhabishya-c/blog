<?php
class databaseconnection{
    public static function connection(){
try{
    return new PDO("mysql:host=localhost;dbname=blogging site","root","");
}catch(PDOException $e) {
    $e->getMessage();
  }
}
}
$connection=databaseconnection::connection();
?>

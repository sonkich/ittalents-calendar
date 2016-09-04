<?php
 $db_host = "localhost";
 $db_name = "it-calendar";
 $db_user = "root";
 $db_pass = "";

 try{

  $db_con = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);

 }
 catch(PDOException $e){
  echo $e->getMessage();
 }

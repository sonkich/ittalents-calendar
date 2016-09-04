<?php
session_start();
require_once 'dbconfig.php';
$errors = [];
$response = [];

if(!empty($_POST)){
   $username = $_POST["register-acc"];
   $password = $_POST["register-password"];
   $password2 = $_POST["register-password2"];
   $email = $_POST["email"];
   $name = $_POST["name"];


   $stmt = $db_con->prepare("SELECT * FROM users WHERE username=:username");
   $stmt->execute(array(":username"=>$username));
   $count = $stmt->rowCount();

   if($count == 0){
      $check = securityCheck($username , $password , $password2 , $email , $name , $errors);

      if($check){
         $stmt = $db_con->prepare("INSERT INTO users(username,email,password,name)
                                    VALUES(:username, :email, :password, :name)");
         $stmt->bindParam(":username",$username);
         $stmt->bindParam(":email",$email);
         $stmt->bindParam(":password",$password);
         $stmt->bindParam(":name",$name);

         $stmt->execute();
      }
   }else{
      $errors[] = "User name already exists";
   }
}else{
   $errors[] = "Please enter all fields";
}

$response["errors"] = $errors;

echo json_encode($response);

function securityCheck($username,$password,$password2,$email,$name,&$errors){

   if(strlen($username) < 4){
      $errors[] = "Username must be at least 4 characters";
   }

   if(strlen($password) < 6 || strlen($password) > 20){
      $errors[] = "Password must be between 6 and 20 characters";
   }

   if($password != $password2){
      $errors[] = "Password does not match the confirm password";
   }

   if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $errors[] = "Enter valid email address";
   }

   if(strlen($name) == 0){
      $errors[] = "Enter First name";
   }

   if(count($errors) == 0){
      return true;
   }

   return false;
}

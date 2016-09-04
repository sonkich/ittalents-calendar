<?php
  session_start();
  require_once 'dbconfig.php';
  $errors = [];
  $response = [];
if(!empty($_POST)){

   $name = $_POST['login-acc'];
   $pas = $_POST['login-password'];


   if(secureCheck($name , $pas)){
      $stmt = $db_con->prepare("SELECT * FROM users WHERE username=:username");
      $stmt->execute(array(":username"=>$name));
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      $count = $stmt->rowCount();

      if($count == 1){
         if($row['password'] == $pas){
            $response['firstname'] = $row['name'];
            $response['username'] = $row['username'];
            $_SESSION['user_session'] = $row['user_id'];
         }else{
            $errors[] = "Wrong username or password";
         }
      }else{
         $errors[] = "Wrong username or password";
      }
   }else{
      $errors[] = "Username and password cannot be empty";
   }





}else{

   $errors[] = "Enter username and password";

}

$response['errors'] = $errors;

echo json_encode($response);



function secureCheck($username , $password) {
   if(strlen($username) == 0){
      return false;
   }

   if(strlen($password) == 0){
      return false;
   }

   return true;
}

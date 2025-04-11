<?php
if(isset($_POST['submit'])){
if(isset($_POST['password']) && isset($_POST['email'])){
    $_SESSION['password']=$_POST['password'];
    $_SESSION['email']=$_POST['email'];
    extract($_POST);
    if(!empty($_SESSION['email']) && !empty($_POST['password'])){
        include "connexion/connexion.php";
        $q=$db->prepare("SELECT * FROM admin WHERE EmailAdmin = :EmailAdmin ");
 $q->execute([
 'EmailAdmin' => $_SESSION['email']
 ]);
 $result = $q->fetch();

 if($result == true){
  error_reporting(0);
 $pass=$result['PasswordAdmin'];
 if($_POST['password'] == $pass){	 
  header("Location:liste.php"); 
 
 } else{
 echo"Adresse e-mail ou mot de passe incorrect";
 }
}else{
    echo"Adresse e-mail ou mot de passe incorrect";
}
}
}
}
?>
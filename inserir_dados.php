<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();  

include './action/aPessoas.php';
//session_start();  
    
// echo $_SESSION['username'];

$a = new mPessoas();
$pdo = $a->connect();
       

      //Pegar o id que foi inserido (já que o campo id é autoincrement e nós não passamos nada)
//$inscricaoId = $pdo->lastInsertId();
/* @var $usuario type */
$username = $_POST['Username'];
$email = $_POST['email'];
$password = $_POST['password'];
$social  = $_POST['social'];



// $nome = filter_var(INPUT_GET,'username', FILTER_SANITIZE_STRING);
// $senha = filter_var('password', FILTER_SANITIZE_STRING);
if (filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL)) {
     echo("Email is not valid"); 
} else {
     //header('Location: adicionar.php');
    
}


$inser = new aPessoas();

$inser->setUsername($username);
$inser->setPassword($password);
$inser->setEmail($email);
$inser->setSocial($social);


$inser->insertData($_SESSION['username']);

 //$a = $inser->select();


header('Location: home.php');

echo "<pre>";
//print_r($username);
echo "</pre>";
?>



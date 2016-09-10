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

$inser = new aPessoas();

$userValue = $_SESSION['username'];
$Username = $_POST['Username'];
$Email = $_POST['email'];
$Password = $_POST['password'];
$Social = $_POST['social'];


//$inser->setUsername($username);
//$inser->setPassword($password);
//$inser->setEmail($email);
//$inser->setSocial($social);

$inser->updateData($userValue, $Username, $Password, $Email,$Social);

header('Location: home.php');
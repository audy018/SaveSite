<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include './action/aPessoas.php';

/* @var $usuario type */

$nome = $_POST['fullname'];
$email = $_POST['email'];
$endereco = $_POST['address'];
$cidade = $_POST['city'];
$pais = $_POST['country'];
$usuario = $_POST['username'];
$senha = $_POST['password'];
$senha1 = $_POST['rpassword'];
// $nome = filter_var(INPUT_GET,'username', FILTER_SANITIZE_STRING);
// $senha = filter_var('password', FILTER_SANITIZE_STRING);

if (filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL)) {
     echo("Email is'not valid");
} else {
    
      header('Location: home.php'); 
}

$inser = new aPessoas();

$inser->setNome($nome);
$inser->setEmail($email);
$inser->setEndereco($endereco);
$inser->setCidade($cidade);
$inser->setPais($pais);
$inser->setUsername($usuario);
$inser->setSenha($senha);
$inser->setSenha1($senha1);

$inser->insert();

// $a = $joao->select();




echo "<pre>";
//print_r();
echo "</pre>";


?>



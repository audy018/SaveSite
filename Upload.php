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
$foto = $_FILES["arquivo"];
$nome_imagem;
$caminho_imagem;

$inser = new aPessoas();
// Se a foto estiver sido selecionada
	if (!empty($foto["name"])) {
		
		// Largura máxima em pixels
		$largura = 1000;
		// Altura máxima em pixels
		$altura = 1000;
		// Tamanho máximo do arquivo em bytes
		$tamanho = 100000;
 
    	// Verifica se o arquivo é uma imagem
    	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto["type"])){
     	   $error[1] = "Isso não é uma imagem.";
   	 	} 
	
		// Pega as dimensões da imagem
		$dimensoes = getimagesize($foto["tmp_name"]);
	
		// Verifica se a largura da imagem é maior que a largura permitida
		if($dimensoes[0] > $largura) {
			$error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
		}
 
		// Verifica se a altura da imagem é maior que a altura permitida
		if($dimensoes[1] > $altura) {
			$error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
		}
		
		// Verifica se o tamanho da imagem é maior que o tamanho permitido
		if($foto["size"] > $tamanho) {
   		 	$error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
		}
 
		// Se não houver nenhum erro
		if (count($error) == 0) {
		
			// Pega extensão da imagem
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);
 
        	// Gera um nome único para a imagem
        	$nome_imagem = md5(uniqid(time())) . "." . $ext[1];
 
        	///Caminho de onde ficará a imagem
        	$caminho_imagem = "img/" . $foto["name"];
 
			//Faz o upload da imagem para seu respectivo caminho
			$upload = move_uploaded_file($foto["tmp_name"], "img/" . $foto["name"]);
		
		 //$pasta = '/img/';
                //$upload = move_uploaded_file($foto["tmp_name"], $pasta . $foto["name"]);	
                  if($upload){
                      echo 'Com Sucesso';
                      
                  }else{
                      
                      echo 'Falhou..!';
                      
                  }
		
		}else{
            
            
            echo "Errrooo";
        }
	
		
        }




// $nome = filter_var(INPUT_GET,'username', FILTER_SANITIZE_STRING);
// $senha = filter_var('password', FILTER_SANITIZE_STRING);
if (filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL)) {
     echo("Email is not valid"); 
} else {
     //header('Location: adicionar.php');
    
}




 //$a = $inser->select();

              $inser->setFoto($foto["name"]);


              $inser->insertFoto($_SESSION['username'],$foto["name"]);

echo "<pre>";
print_r($foto["name"]);
echo "</pre>";
?>



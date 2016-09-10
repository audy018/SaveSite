<?php
 
include './model/mPessoas.php';


class aPessoas extends mPessoas{
    
    
    public function insertFoto($userValue,$fotoName){
  
		
			// Insere os dados no banco
			//$sql = mysql_query("INSERT INTO usuarios VALUES ('', '".$nome."', '".$email."', '".$nome_imagem."')");
		 //Preparar insert da outra query
       // $sql = sprintf("INSERT INTO imagens(foto,id_inscricao) VALUES('%s',(select id_inscricao from inscricao where inscricao.username = '$userValue'))" 
              // ,$this->getFoto());
        
        $sql = sprintf("UPDATE imagens INNER JOIN inscricao ON inscricao.id_inscricao = imagens.id_inscricao AND inscricao.username = '$userValue' SET imagens.foto = '$fotoName'");
        
        //Executar insert
        $this->execute($sql);  
     
    }
    
     public function selectImage($userValue){
        
       $a = new mPessoas();
       $pdo = $a->connect();
       
       
       $consulta = $pdo->query("SELECT * FROM imagens INNER JOIN inscricao WHERE inscricao.username = '$userValue' AND inscricao.id_inscricao = imagens.id_inscricao");
      $linha = $consulta->fetch(PDO::FETCH_ASSOC);
       // echo $linha['foto'];
        if($linha){
                echo "<img src='img/".$linha['foto']."' alt='Foto de exibição' /><br />";
        }  else {
             echo "<img src='img/temporary-profile.jpg' alt='Foto de exibição' /><br />";
        }
      //estudar o comando select no pdo      
      //estudar CRUD
      //ROdar o comando select no phpmyadmin e depois rodar na aplicacao 
         
    }
    
    public function insert(){
       
       $sql = sprintf("INSERT INTO inscricao(nome,email,endereco,cidade,pais,username,senha,senha1) VALUES('%s','%s','%s','%s','%s','%s','%s','%s')" 
               ,$this->getNome(),$this->getEmail(),$this->getEndereco(),$this->getCidade(),$this->getPais(),$this->getUsername(),$this->getSenha(),$this->getSenha1());
       
       $this->execute($sql);  
        
    }
    
    public function updateData($userValue,$Username,$Password,$Email,$Social){
        
        // print_r($userValue);
         $a = new mPessoas();
         $pdo = $a->connect();
         
        $sql = sprintf( "UPDATE dados INNER JOIN inscricao ON inscricao.id_inscricao = dados.id_inscricao AND inscricao.username = '$userValue' AND dados.social = '$Social' SET dados.username = '$Username', dados.password = '$Password', dados.email = '$Email'");
        
        
        //Executar insert
        $this->execute($sql); 
        
        
    }


    public function insertData($userValue){
        
         // print_r($userValue);
         $a = new mPessoas();
         $pdo = $a->connect();

        //Preparar insert da outra query
        $sql = sprintf("INSERT INTO dados(username,password,email,social,id_inscricao) VALUES('%s','%s','%s','%s',(select id_inscricao from inscricao where username = '$userValue'))" 
               ,$this->getUsername(),$this->getPassword(),$this->getEmail(),$this->getSocial());

        //Executar insert
        $this->execute($sql); 
       
    }

public function selectSnp($userValue){
    
    $a = new mPessoas();
    $pdo = $a->connect();
    
    $consulta = $pdo->query("SELECT dados.username, dados.password, dados.email, dados.social FROM dados INNER JOIN inscricao WHERE inscricao.username = '$userValue' AND inscricao.id_inscricao = dados.id_inscricao AND dados.social = 'snp' ");
      while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        echo "Social: {$linha['social']}<br />"
        . ""
                . "Username: {$linha['username']}<br />"
                . ""
                   . "Email: {$linha['email']}<br />"
                       . ""
                           . "Sua Senha: {$linha['password']}"

                                . "<br />";
      }
    
    
    
}
public function selectIg($userValue){
    
    $a = new mPessoas();
    $pdo = $a->connect();
    
    $consulta = $pdo->query("SELECT dados.username, dados.password, dados.email, dados.social FROM dados INNER JOIN inscricao WHERE inscricao.username = '$userValue' AND inscricao.id_inscricao = dados.id_inscricao AND dados.social = 'ig' ");
      while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        echo "Social: {$linha['social']}<br />"
        . ""
                . "Username: {$linha['username']}<br />"
                . ""
                   . "Email: {$linha['email']}<br />"
                       . ""
                           . "Sua Senha: {$linha['password']}"

                                . "<br />";
      }
    
    
}

public function selectGml($userValue){
    
    $a = new mPessoas();
    $pdo = $a->connect();
    
    $consulta = $pdo->query("SELECT dados.username, dados.password, dados.email, dados.social FROM dados INNER JOIN inscricao WHERE inscricao.username = '$userValue' AND inscricao.id_inscricao = dados.id_inscricao AND dados.social = 'gml' ");
      while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        echo "Social: {$linha['social']}<br />"
        . ""
                . "Username: {$linha['username']}<br />"
                . ""
                   . "Email: {$linha['email']}<br />"
                       . ""
                           . "Sua Senha: {$linha['password']}"

                                . "<br />";
      }
    
}

public function selectFcb($userValue){
    
    $a = new mPessoas();
    $pdo = $a->connect();
    
    $consulta = $pdo->query("SELECT dados.username, dados.password, dados.email, dados.social FROM dados INNER JOIN inscricao WHERE inscricao.username = '$userValue' AND inscricao.id_inscricao = dados.id_inscricao AND dados.social = 'fcb' ");
      while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        echo "Social: {$linha['social']}<br />"
        . ""
                . "Username: {$linha['username']}<br />"
                . ""
                   . "Email: {$linha['email']}<br />"
                       . ""
                           . "Sua Senha: {$linha['password']}"

                                . "<br />";
      }
    
}

public function selectLdn($userValue){
    
    $a = new mPessoas();
    $pdo = $a->connect();
    
    $consulta = $pdo->query("SELECT dados.username, dados.password, dados.email, dados.social FROM dados INNER JOIN inscricao WHERE inscricao.username = '$userValue' AND inscricao.id_inscricao = dados.id_inscricao AND dados.social = 'ldn' ");
      while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        echo "Social: {$linha['social']}<br />"
        . ""
                . "Username: {$linha['username']}<br />"
                . ""
                   . "Email: {$linha['email']}<br />"
                       . ""
                           . "Sua Senha: {$linha['password']}"

                                . "<br />";
      }
    
}

public function selectPtr($userValue){
    
    $a = new mPessoas();
    $pdo = $a->connect();
    
    $consulta = $pdo->query("SELECT dados.username, dados.password, dados.email, dados.social FROM dados INNER JOIN inscricao WHERE inscricao.username = '$userValue' AND inscricao.id_inscricao = dados.id_inscricao AND dados.social = 'ptr' ");
      while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        echo "Social: {$linha['social']}<br />"
        . ""
                . "Username: {$linha['username']}<br />"
                . ""
                   . "Email: {$linha['email']}<br />"
                       . ""
                           . "Sua Senha: {$linha['password']}"

                                . "<br />";
      }
    
}

public function selectTmb($userValue){
    
    $a = new mPessoas();
    $pdo = $a->connect();
    
    $consulta = $pdo->query("SELECT dados.username, dados.password, dados.email, dados.social FROM dados INNER JOIN inscricao WHERE inscricao.username = '$userValue' AND inscricao.id_inscricao = dados.id_inscricao AND dados.social = 'tmb' ");
      while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        echo "Social: {$linha['social']}<br />"
        . ""
                . "Username: {$linha['username']}<br />"
                . ""
                   . "Email: {$linha['email']}<br />"
                       . ""
                           . "Sua Senha: {$linha['password']}"

                                . "<br />";
      }
    
}

public function selectSkp($userValue){
    
    $a = new mPessoas();
    $pdo = $a->connect();
    
    
    $consulta = $pdo->query("SELECT dados.username, dados.password, dados.email, dados.social FROM dados INNER JOIN inscricao WHERE inscricao.username = '$userValue' AND inscricao.id_inscricao = dados.id_inscricao AND dados.social = 'skp' ");
      while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        echo "Social: {$linha['social']}<br />"
        . ""
                . "Username: {$linha['username']}<br />"
                . ""
                   . "Email: {$linha['email']}<br />"
                       . ""
                           . "Sua Senha: {$linha['password']}"

                                . "<br />";
      }
}

public function selectTwt($userValue){
    
    $a = new mPessoas();
    $pdo = $a->connect();
    
    
    $consulta = $pdo->query("SELECT dados.username, dados.password, dados.email, dados.social FROM dados INNER JOIN inscricao WHERE inscricao.username = '$userValue' AND inscricao.id_inscricao = dados.id_inscricao AND dados.social = 'twt' ");
      while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        echo "Social: {$linha['social']}<br />"
        . ""
                . "Username: {$linha['username']}<br />"
                . ""
                   . "Email: {$linha['email']}<br />"
                       . ""
                           . "Sua Senha: {$linha['password']}"

                                . "<br />";
      }
}



    public function select(){
        
       $a = new mPessoas();
       $pdo = $a->connect();
       
       
       // $sql = "SELECT nome, curso FROM aluno";
       // $a = $this->execute($sql); 
       
      $consulta = $pdo->query("SELECT nome, email FROM inscricao ");
      while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        echo "Nome: {$linha['nome']};"
        . ""
                . "Email: {$linha['email']}<br />";
      }
        
      //estudar o comando select no pdo      
      //estudar CRUD
      //ROdar o comando select no phpmyadmin e depois rodar na aplicacao 
         
    }
    
    //put your code here
}
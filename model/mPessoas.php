<?php

include './db/db.php';
class mPessoas extends db{
    
    private $id;
    private $nome ;
    private $email;
    private $endereco;
    private $cidade;
    private $pais;
    private $username;
    private $senha;
    private $senha1;
    private $password;
    private $social;
    private $foto;

    public function setId($id){
        
        $this->id = $id;
        
    }
    
    public function getId(){
        
        return $this->id;
        
    }
    
    public function setNome($nome){
        
        $this->nome = $nome;
        
    }
    
    public function getNome(){
        
        return $this->nome;
        
    }
    
    public function setEmail($email){
        
        $this->email = $email;
        
    }
    
    public function getEmail(){
        
        return $this->email;
        
    }
    
     public function setEndereco($endereco){
        
        $this->endereco = $endereco;
        
    }
    
    public function getEndereco(){
        
        return $this->endereco;
        
    }
    
     public function setCidade($cidade){
        
        $this->cidade = $cidade;
        
    }
    
    public function getCidade(){
        
        return $this->cidade;
        
    }
    
     public function setPais($pais){
        
        $this->pais = $pais;
        
    }
    
    public function getPais(){
        
        return $this->pais;
        
    }
    
     public function setUsername($username){
        
        $this->username = $username;
        
    }
    
    public function getUsername(){
        
        return $this->username;
        
    }
    
     public function setSenha($senha){
        
        $this->senha = $senha;
        
    }
    
    public function getSenha(){
        
        return $this->senha;
        
    }
    
     
     public function setSenha1($senha1){
        
        $this->senha1 = $senha1;
        
    }
    
    public function getSenha1(){
        
        return $this->senha1;
        
    }
    
    public function setPassword($password){
        
        $this->password = $password;
        
    }
    
    public function getPassword(){
        
        return $this->password;
        
    }
    
     public function setSocial($social){
        
        $this->social = $social;
        
    }
    
    public function getSocial(){
        
        return $this->social;
        
    }
    
     public function setFoto($foto){
        
        $this->foto = $foto;
        
    }
    
    public function getFoto(){
        
        return $this->foto;
        
    }
   
    //put your code here
}

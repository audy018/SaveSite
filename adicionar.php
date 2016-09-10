
<?php 

      session_start(); 
      
      
      //Caso o usuário não esteja autenticado, limpa os dados e redireciona
    if ( !isset($_SESSION['login']) and !isset($_SESSION['senha']) ) {
    //Destrói
    session_destroy();
 
    //Limpa
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
     
    //Redireciona para a página de autenticação
    header('location:index.php');
      //header('Location: testing.php'); 
   // echo
    }
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Adicionar Dados na Rede Social</title>
        <link href="css/adicionar.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/themes/base/jquery-ui.css">
       
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


    </head>
    <body>
        <header>
            
            <div id="profile-container" class="dropdown">
    
    <div class="dropdown-content">
    <a href="#">Foto de Perfil</a>
    <a href="#">Alterar Username</a>
    <a href="logout.php">Sair</a>
  </div>
<figure>
  <div class="log"></div>

      <figcaption><?php   session_start();  
     
      echo 'ola, '.$_SESSION['username'].'!';?>
      
      </figcaption>  
</figure>
    

</div>
        </header>
 
        <section class="buttons">
  <div class="container">
    <h1>Guarde Aqui! </h1>
    <a href="#"   class="btn btn-1"  data-toggle="modal" data-target="#basicModal" >
      <svg >
        <rect x="0" y="0" fill="none" width="100%" height="100%"/>
      </svg>
     Snapchat
    </a>
  
    <!--svg hover inspired by http://codepen.io/karimbalaa/pen/qERbBY?editors=110 -->
    <!--End of Button 1 -->
    
    <a  href="#" class="btn btn-1" data-toggle="modal" data-target="#basicModal">
      <svg>
        <rect x="0" y="0" fill="none" width="100%" height="100%"/>
      </svg>
     Instagram
    </a>
    <a  href="#" class="btn btn-1" data-toggle="modal" data-target="#basicModal">
      <svg>
        <rect x="0" y="0" fill="none" width="100%" height="100%"/>
      </svg>
     Gmail
    </a>
   <a  href="#" class="btn btn-1" data-toggle="modal" data-target="#basicModal">
      <svg>
        <rect x="0" y="0" fill="none" width="100%" height="100%"/>
      </svg>
     Facebook
    </a>
    <a  href="#" class="btn btn-1" data-toggle="modal" data-target="#basicModal">
      <svg>
        <rect x="0" y="0" fill="none" width="100%" height="100%"/>
      </svg>
     Linkedin
    </a>
    <br>
    <a  href="#" class="btn btn-1" data-toggle="modal" data-target="#basicModal">
      <svg>
        <rect x="0" y="0" fill="none" width="100%" height="100%"/>
      </svg>
     Pinterest
    </a>
    <a  href="#" class="btn btn-1" data-toggle="modal" data-target="#basicModal">
      <svg>
        <rect x="0" y="0" fill="none" width="100%" height="100%"/>
      </svg>
     Tumblr
    </a>
    <a  href="#" class="btn btn-1" data-toggle="modal" data-target="#basicModal">
      <svg>
        <rect x="0" y="0" fill="none" width="100%" height="100%"/>
      </svg>
     Skype
    </a>
    <a  href="#" class="btn btn-1" data-toggle="modal" data-target="#basicModal">
      <svg>
        <rect x="0" y="0" fill="none" width="100%" height="100%"/>
      </svg>
     Twitter
    </a>

    
         
</section>

    
<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">INSIRA OS DADOS</h4>
      </div>
      <div class="modal-body">
          <form action="inserir_dados.php" method="post">
            <label>USERNAME </label>
            <input  type="textbox" class="textbox" placeholder="John" name="Username" >
              <label>PASSWORD</label>
              <input  type="textbox" class="textbox" placeholder="*****************" name="password" required>
             <label>E-MAIL</label>
             <input type="email" class="form-control" id="email" name="email" 
                    placeholder="email@exemplo.com" required="">
             <label>REDE SOCIAL </label>
             <select name="social">
                 <option value=""></option>
                 <option value="snp">Snapchat</option>
                 <option value="ig">Instagram</option>
                 <option value="gml">Gmail</option>
                 <option value="fcb">Facebook</option>
                 <option value="ldn">LinkedIn</option>
                 <option value="ptr">Pinterest</option>
                 <option value="tmb">Tumblr</option>
                 <option value="skp">Skype</option>
                 <option value="twt">Twitter</option>
             </select>
             
                <button id="btnsave" type="submit" class="bt ">Save </button>
             
        </form>
       
      </div>
      
    </div>
  </div>
   
</div>
       
     
    
  </div>
       <footer><p id="bottomtext">2016 &copy; <a href="https://twitter.com/arikardnoir" target="_blank">TecGenius</a>Corporation</p> </footer>

    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>


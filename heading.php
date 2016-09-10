<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="heading.css" rel="stylesheet" type="text/css"/>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
        
    </head>
    
    
    <body>
        <header><h1 class="site-header">Hello World</h1><p class="summary">This is a collapsing header.</p></header>
        
        
        <header class="cabecalho">
            <div id="info-button" onclick="toggleInfoScreen()">  ?  </div>
            <div class="BTNS"><button class="action-button shadow animate blue "  onclick="document.getElementById('id10').style.display='block'" >Update</button>
            <button class="action-button shadow animate blue " onclick="document.getElementById('id11').style.display='block'" >+Add</button> 
            </div>
            
<aside class="profile-card" id="canvas-dropdown">

    <header class="prof">

    <!-- here’s the avatar -->
    <a href="#"  onclick="document.getElementById('id30').style.display='block'" >
       <?php  $inser->selectImage($_SESSION['username'])  ?>
    </a>
     

    <!-- the username -->
    <h1><?php  
     
      echo ''.$_SESSION['username'].'';?></h1>

    <!-- and role or location -->
    <h2>- Nao Seja um Esquecido, e Salve aqui -</h2>

  </header>

  <!-- bit of a bio; who are you? -->
  <div class="profile-bio">

  </div>

</aside>
                       
   <div id="id30" class="w3-modal">
    
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="width:25%;">
  <header class="w3-container w3-black">
   <span onclick="document.getElementById('id30').style.display='none'"
   class="w3-closebtn w3-padding-top">&times;</span>
     <h2>Carregar Foto de Perfil</h2>
  </header>

       <div class="modal-body">
            
           <form action="Upload.php" method="post" enctype="multipart/form-data">
       <form method="post" enctype="multipart/form-data" action="recebeUpload.php">
   Selecione uma imagem: <input name="arquivo" type="file" />
   <br />
     <button id="btnsave" type="submit" class="bt ">Salvar</button>
</form>
    
      </div>
       
 </div>
</div>  
      
      
<!-- that’s all folks! -->

           
   <div id="id10" class="w3-modal">
    
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="width:25%;">
  <header class="w3-container w3-black">
   <span onclick="document.getElementById('id10').style.display='none'"
   class="w3-closebtn w3-padding-top">&times;</span>
     <h2>Atualizar Dados</h2>
  </header>

       <div class="modal-body">
            
           <form action="update_data.php" method="post">
              <label>USERNAME </label><br>
            <input  type="textbox" class="form-control" placeholder="John" name="Username" ><br>
              <label>PASSWORD</label><br>
              <input  type="textbox" class="form-control" placeholder="*****************" name="password" required><br>
             <label>E-MAIL</label><br>
             <input type="email" class="form-control" id="email" name="email" 
                    placeholder="email@exemplo.com" required=""><br>
             <label>REDE SOCIAL </label><br>
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
             </select><br>
             
                <button id="btnsave" type="submit" class="bt ">Atualizar</button>
             
        </form>
       
      </div>
       
 </div>
</div>        
        
<div id="id11" class="w3-modal">
    
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="width:25%;">
  <header class="w3-container w3-black">
   <span onclick="document.getElementById('id11').style.display='none'"
   class="w3-closebtn w3-padding-top">&times;</span>
     <h2>Inserir Dados</h2>
  </header>

       <div class="modal-body">
            
          <form action="inserir_dados.php" method="post">
              <label>USERNAME </label><br>
            <input  type="textbox" class="form-control" placeholder="John" name="Username" ><br>
              <label>PASSWORD</label><br>
              <input  type="textbox" class="form-control" placeholder="*****************" name="password" required><br>
             <label>E-MAIL</label><br>
             <input type="email" class="form-control" id="email" name="email" 
                    placeholder="email@exemplo.com" required=""><br>
             <label>REDE SOCIAL </label><br>
             <select name="social" class="select">
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
             </select><br>
             
                <button id="btnsave" type="submit" class="bt ">Confirmar</button>
             
        </form>
       
      </div>
       
 </div>
</div> 
      
</header>
        <section>
              <?php //include("heading.php"); ?>
            
        </section>
      
      
     <div class="container">

             <div id="myBtn"  class="test1" style="cursor:pointer;" onclick="document.getElementById('id01').style.display='block'" ></div>
             <div id="myBtn1" class="test2" style="cursor:pointer;" onclick="document.getElementById('id02').style.display='block'" ></div>
             <div id="myBtn2" class="test3" style="cursor:pointer;" onclick="document.getElementById('id03').style.display='block'"></div>
             <div id="myBtn3" class="test4" style="cursor:pointer;" onclick="document.getElementById('id04').style.display='block'"></div>
             <div id="myBtn4" class="test5" style="cursor:pointer;" onclick="document.getElementById('id05').style.display='block'"></div>
             <div id="myBtn5" class="test6" style="cursor:pointer;" onclick="document.getElementById('id06').style.display='block'"></div>
             <div id="myBtn6" class="test7" style="cursor:pointer;" onclick="document.getElementById('id07').style.display='block'"></div>
             <div id="myBtn7" class="test8" style="cursor:pointer;" onclick="document.getElementById('id08').style.display='block'"></div>
             <div id="myBtn8" class="test9" style="cursor:pointer;" onclick="document.getElementById('id09').style.display='block'"></div>
 
     </div>


<div id="id01" class="w3-modal">
    
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="width:25%;">
  <header class="w3-container w3-white">
   <span onclick="document.getElementById('id01').style.display='none'"
   class="w3-closebtn w3-padding-top">&times;</span>
      <h2 ><img class="imgn" src="imagens/snapchat-log.png" ></h2>
  </header>
 
        <!--Snapchat Actions -->
  <div id="Snapchat" class="w3-container social">
   
    <p class="snapchat"><?php $inser->selectSnp($_SESSION['username']);?></p>
    <br>
          
     </div>
      
       
 </div>
</div>
        
<div id="id02" class="w3-modal">
    
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="width:25%;">
  <header class="w3-container w3-white">
   <span onclick="document.getElementById('id02').style.display='none'"
   class="w3-closebtn w3-padding-top">&times;</span>
      <h2><img class="imgn" src="imagens/instagram-logo.png"></h2>
  </header>
        <!--Instagram Actions -->
  <div id="Instagram" class="w3-container social">
   
      <p class="instagram"><?php $inser->selectIg($_SESSION['username']);?></p>

  </div>
     
 </div>
</div>
        
        <div id="id03" class="w3-modal">
    
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="width:25%;">
  <header class="w3-container w3-white">
   <span onclick="document.getElementById('id03').style.display='none'"
   class="w3-closebtn w3-padding-top">&times;</span>
      <h2><img class="imgn" src="imagens/gmail-logo.jpg"></h2>
  </header>
        <!--Gmail Actions -->
  <div id="Gmail" class="w3-container social">
   
      <p class="gmail"><?php $inser->selectGml($_SESSION['username']);?></p>
     
  </div>  
        
        
 </div>
</div>
        
<div id="id04" class="w3-modal">
    
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="width:25%;">
  <header class="w3-container w3-white">
   <span onclick="document.getElementById('id04').style.display='none'"
   class="w3-closebtn w3-padding-top">&times;</span>
      <h2><img src="imagens/facebook-ebook.png"></h2>
  </header>

  <ul class="w3-pagination w3-white " style="width:0.001%;">
   <li><a href="#" class="tablink" onclick="openSocial(event, 'Facebook')"></a></li>
   <li><a href="#" class="tablink" onclick="openSocial(event, 'Facebook_update')"></a></li>
  </ul>

        <!--Snapchat Actions -->
  <div id="Facebook" class="w3-container social">
   
    <p class="facebook"><?php $inser->selectFcb($_SESSION['username']);?></p>
    
  </div>
       
 </div>
</div>  

        <div id="id05" class="w3-modal">
    
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="width:25%;">
  <header class="w3-container w3-white">
   <span onclick="document.getElementById('id05').style.display='none'"
   class="w3-closebtn w3-padding-top">&times;</span>
      <h2><img class="imgn" src="imagens/Linkedin-Logo.png"></h2>
  </header>

  <ul class="w3-pagination w3-white " style="width:0.001%;">
   <li><a href="#" class="tablink" onclick="openSocial(event, 'Linkedin')"></a></li>
   <li><a href="#" class="tablink" onclick="openSocial(event, 'Linkedin_update')"></a></li>
  </ul>

        <!--Snapchat Actions -->
  <div id="Linkedin" class="w3-container social">
   
    <p class="linkedin"><?php $inser->selectLdn($_SESSION['username']);?></p>
   
  </div>

       
 </div>
</div>

        <div id="id06" class="w3-modal">
    
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="width:25%;">
  <header class="w3-container w3-white">
   <span onclick="document.getElementById('id06').style.display='none'"
   class="w3-closebtn w3-padding-top">&times;</span>
      <h2><img class="imgn" src="imagens/pinterest-logo.jpg"></h2>
  </header>

  <ul class="w3-pagination w3-white " style="width:0.001%;">
   <li><a href="#" class="tablink" onclick="openSocial(event, 'Pinterest')"></a></li>
   <li><a href="#" class="tablink" onclick="openSocial(event, 'Pinterest_update')"></a></li>
  </ul>

        <!--Snapchat Actions -->
  <div id="Pinterest" class="w3-container social">
   
    <p class="pinterest"><?php $inser->selectPtr($_SESSION['username']);?></p>
  
  </div>

  
       
 </div>
</div>
        <div id="id07" class="w3-modal">
    
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="width:25%;">
  <header class="w3-container w3-white">
   <span onclick="document.getElementById('id07').style.display='none'"
   class="w3-closebtn w3-padding-top">&times;</span>
      <h2><img class="imgn" src="imagens/tumblr-logo.png"></h2>
  </header>

  <ul class="w3-pagination w3-white " style="width:0.001%;">
   <li><a href="#" class="tablink" onclick="openSocial(event, 'Tumblr')"></a></li>
   <li><a href="#" class="tablink" onclick="openSocial(event, 'Tumblr_update')"></a></li>
  </ul>

        <!--Snapchat Actions -->
  <div id="Tumblr" class="w3-container social">
   
    <p class="tumblr"><?php $inser->selectTmb($_SESSION['username']);?></p>
   
  </div>

       
 </div>
</div>
        
 <div id="id08" class="w3-modal">
    
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="width:25%;">
  <header class="w3-container w3-white">
   <span onclick="document.getElementById('id08').style.display='none'"
   class="w3-closebtn w3-padding-top">&times;</span>
      <h2><img class="imgn" src="imagens/skype-logo.png"></h2>
  </header>

  <ul class="w3-pagination w3-white " style="width:0.001%;">
   <li><a href="#" class="tablink" onclick="openSocial(event, 'Skype')"></a></li>
   <li><a href="#" class="tablink" onclick="openSocial(event, 'Skype_update')"></a></li>
  </ul>

        <!--Snapchat Actions -->
  <div id="Skype" class="w3-container social">
   
    <p class="skype"><?php $inser->selectSkp($_SESSION['username']);?></p>
    
  </div>
       
 </div>
</div>       

 <div id="id09" class="w3-modal">
    
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="width:25%;">
  <header class="w3-container w3-white">
   <span onclick="document.getElementById('id09').style.display='none'"
   class="w3-closebtn w3-padding-top">&times;</span>
      <h2><img class="imgn" src="imagens/twitter-logo.png"></h2>
  </header>

  <ul class="w3-pagination w3-white " style="width:0.001%;">
   <li><a href="#" class="tablink" onclick="openSocial(event, 'Twitter')"></a></li>
   <li><a href="#" class="tablink" onclick="openSocial(event, 'Twitter_update')"></a></li>
  </ul>

        <!--Snapchat Actions -->
  <div id="Skype" class="w3-container social">
   
    <p class="skype"><?php $inser->selectTwt($_SESSION['username']);?></p>
   
  </div>
       
 </div>
</div>
        
<script>
document.getElementsByClassName("social")[0].click();

function openSocial(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("social");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("social");
  for (i = 0; i < x.length; i++) {
    tablinks[i].classList.remove("w3-light-grey");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.classList.add("w3-light-grey");
}
</script>



  <div id="touch-layer"></div>
  <div id="particles"></div>
<div id="info-screen" class="hidden">
    <div id="info-shade" >
          
        <div id="info-text"><br><br><br><br><br><br><br><br><br>
          <h3>Sobre</h3>
            <ul>
               <li>We are TecGenius </li>
               <li>The smaller the green circle, the greater chance in catching omanyte!</li>
            </ul>
      
       </div>
          
    </div>
</div>
  
        
    </body>
    
    
</html>


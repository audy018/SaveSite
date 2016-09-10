<?php 
      
     //Error Message
      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
      error_reporting(E_ALL); 
        
        session_start();
        
        include './action/aPessoas.php';
 
        $inser = new aPessoas();

?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>HOME</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link href="home.css" rel="stylesheet" type="text/css"/>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <script src="js/home.js" type="text/javascript"></script>
        
         
  <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/core.css">
  
    </head>
    <body class="w3-container">
    
        <header>
            <div id="info-button" onclick="toggleInfoScreen()">  ?  </div>
            <a data-dismiss="myModal" data-toggle="myModal" href="#lost" class="action-button shadow animate blue " onclick="openCity(event, 'myModal1')">Update</a>
           <a data-dismiss="myModal" data-toggle="myModal" href="#lost" class="action-button shadow animate blue " onclick="openCity(event, 'myModal1')">+Add</a> 
           
                    
<div id="profile-container" class="dropdown">
   
    <div class="dropdown-content">
        <a href="#">Foto de Perfil</a>
        <a href="#">Alterar Username</a>
        <a href="logout.php">Sair</a>
    </div>
<figure>
  <div class="log"></div>

      <figcaption><?php  
     
      echo 'ola, '.$_SESSION['username'].'!';?>
      
      </figcaption>  
</figure>
    

</div>
      
</header>

     <div class="container">

             <div id="myBtn"  class="test1" style="cursor:pointer;" ></div>
             <div id="myBtn1" class="test2" style="cursor:pointer;" ></div>
             <div id="myBtn2" class="test3" style="cursor:pointer;" ></div>
             <div id="myBtn3" class="test4" style="cursor:pointer;" ></div>
             <div id="myBtn4" class="test5" style="cursor:pointer;" ></div>
             <div id="myBtn5" class="test6" style="cursor:pointer;" ></div>
             <div id="myBtn6" class="test7" style="cursor:pointer;" ></div>
             <div id="myBtn7" class="test8" style="cursor:pointer;" ></div>
             <div id="myBtn8" class="test9" style="cursor:pointer;" ></div>
 
     </div>



<script>
document.getElementsByClassName("tablink")[0].click();

function openCity(evt, cityName) {
  
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].classList.remove("w3-light-grey");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.classList.add("w3-light-grey");
}


</script>

<script>
        
                 // Get the modal
var modal = document.getElementById('myModal');

var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
 
</script>
        
<!-- Instagram Modal-->
<div id="myModal1" class="modal1">

     <!-- Modal content -->
    <div class="modal-content1">
        <span class="close1">x</span>
        
        <img src="imagens/instagram-logo.png">
        <p class="instagram"><?php $inser->selectIg($_SESSION['username']);?></p>
       <p>Instagram</p>
    
    </div>
  
</div>  

<script>
             
                 // Get the modal
var modal1 = document.getElementById('myModal1');

// Get the button that opens the modal
var btn1 = document.getElementById("myBtn1");

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close1")[0];

// When the user clicks on the button, open the modal 
btn1.onclick = function() {
    modal1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
    modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}

</script>


<!-- Gmail Modal-->             
  <div id="myModal2" class="modal2">

  <!-- Modal content -->
  <div class="modal-content2">
    <span class="close2">x</span>
    
    <img src="imagens/gmail-logo.jpg">
    <p class="gmail"><?php $inser->selectGml($_SESSION['username']);?></p>
    <p>Gmail</p>
  </div>

</div>
        

<script>
                // Get the modal
var modal2 = document.getElementById('myModal2');

// Get the button that opens the modal
var btn2 = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
var span2 = document.getElementsByClassName("close2")[0];

// When the user clicks on the button, open the modal 
btn2.onclick = function() {
    modal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span2.onclick = function() {
    modal2.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}

</script>

<!-- Facebook Modal-->
<div id="myModal3" class="modal3">

  <!-- Modal content -->
  <div class="modal-content3">
    <span class="close3">x</span>
    
    <img src="imagens/facebook-ebook.png">
     <p class="facebook"><?php $inser->selectFcb($_SESSION['username']);?></p>
      <p>Facebook</p>
  </div>

</div>

<script>
       
                 // Get the modal
var modal3 = document.getElementById('myModal3');

// Get the button that opens the modal
var btn3 = document.getElementById("myBtn3");

// Get the <span> element that closes the modal
var span3 = document.getElementsByClassName("close3")[0];

// When the user clicks on the button, open the modal 
btn3.onclick = function() {
    modal3.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span3.onclick = function() {
    modal3.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal3) {
        modal3.style.display = "none";
    }
}



</script>

<!-- Linkedin Modal-->
<div id="myModal4" class="modal4">

  <!-- Modal content -->
  <div class="modal-content4">
    <span class="close4">x</span>
    
    <img src="imagens/Linkedin-Logo.png">
     <p class="linkedin"><?php $inser->selectLdn($_SESSION['username']);?></p>
      <p>Linkedin</p>
  </div>

</div>
        

<script>
                 
                 
                 // Get the modal
var modal4 = document.getElementById('myModal4');

// Get the button that opens the modal
var btn4 = document.getElementById("myBtn4");

// Get the <span> element that closes the modal
var span4 = document.getElementsByClassName("close4")[0];

// When the user clicks on the button, open the modal 
btn4.onclick = function() {
    modal4.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span4.onclick = function() {
    modal4.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal4) {
        modal4.style.display = "none";
    }
}

</script>

<!-- Pinterest Modal-->
<div id="myModal5" class="modal5">

  <!-- Modal content -->
  <div class="modal-content5">
    <span class="close5">x</span>
    
    <img src="imagens/pinterest-logo.jpg">
     <p class="pinterest"><?php $inser->selectPtr($_SESSION['username']);?></p>
      <p>Pinterest</p>
  </div>

</div>
        

<script>
                 
                 
                 // Get the modal
var modal5 = document.getElementById('myModal5');

// Get the button that opens the modal
var btn5 = document.getElementById("myBtn5");

// Get the <span> element that closes the modal
var span5 = document.getElementsByClassName("close5")[0];

// When the user clicks on the button, open the modal 
btn5.onclick = function() {
    modal5.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span5.onclick = function() {
    modal5.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal5) {
        modal5.style.display = "none";
    }
}

</script>

<!-- Tumblr Modal-->
<div id="myModal6" class="modal6">

  <!-- Modal content -->
  <div class="modal-content6">
    <span class="close6">x</span>
    
    <img src="imagens/tumblr-logo.png">
    <p class="tumblr"><?php $inser->selectTmb($_SESSION['username']);?></p>
     <p>Tumblr</p>
  </div>

</div>
        

<script>
                 
                 
                 // Get the modal
var modal6 = document.getElementById('myModal6');

// Get the button that opens the modal
var btn6 = document.getElementById("myBtn6");

// Get the <span> element that closes the modal
var span6 = document.getElementsByClassName("close6")[0];

// When the user clicks on the button, open the modal 
btn6.onclick = function() {
    modal6.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span6.onclick = function() {
    modal6.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal6) {
        modal6.style.display = "none";
    }
}

</script>

<!-- Skype Modal-->
<div id="myModal7" class="modal7">

  <!-- Modal content -->
  <div class="modal-content7">
    <span class="close7">x</span>
    
    <img src="imagens/skype-logo.png">
     <p class="skype"><?php $inser->selectSkp($_SESSION['username']);?></p>
      <p>Skype</p>
  </div>

</div>
        

<script>
                 
                 
                 // Get the modal
var modal7 = document.getElementById('myModal7');

// Get the button that opens the modal
var btn7 = document.getElementById("myBtn7");

// Get the <span> element that closes the modal
var span7 = document.getElementsByClassName("close7")[0];

// When the user clicks on the button, open the modal 
btn7.onclick = function() {
    modal7.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span7.onclick = function() {
    modal7.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal7) {
        modal7.style.display = "none";
    }
}

</script>


<!-- Twitter Modal-->
<div id="myModal8" class="modal8">

  <!-- Modal content -->
  <div class="modal-content8">
    <span class="close8">x</span>
    
    <img src="imagens/twitter-logo.png">
     <p class="twitter"><?php $inser->selectTwt($_SESSION['username']);?></p> 
      <p>Twitter</p>
  </div>

</div>
        

<script>
                 
                 
                 // Get the modal
var modal8 = document.getElementById('myModal8');

// Get the button that opens the modal
var btn8 = document.getElementById("myBtn8");

// Get the <span> element that closes the modal
var span8 = document.getElementsByClassName("close8")[0];

// When the user clicks on the button, open the modal 
btn8.onclick = function() {
    modal8.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span8.onclick = function() {
    modal8.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal8) {
        modal8.style.display = "none";
    }
}

</script>

  <div id="touch-layer"></div>
  <div id="particles"></div>
<div id="info-screen" class="hidden">
    <div id="info-shade" >
          
       <div id="info-text">
          <h3>Sobre</h3>
            <ul>
               <li>We are TecGenius </li>
               <li>The smaller the green circle, the greater chance in catching omanyte!</li>
            </ul>
      
       </div>
          
    </div>
</div>
  
<script>
window.alert("\t\t\t\t\tBEM VINDO(A) ");
</script> 
  



 <!--<script src="insta.js" type="text/javascript"></script> -->
    </body>
</html>

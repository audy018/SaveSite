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
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
        <script src="js/home.js" type="text/javascript"></script>


        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/core.css">

    </head>
    
    
    <body class="w3-container">

        <!-- Botao de Informacoes -->
        <div id="info-button" onclick="toggleInfoScreen()">  ?  </div>
        
        <!-- Menu Header -->
        <nav>
            <ul>
                <li>
                    <a href="home.php">Home</a>
                </li>
                <li>
                    <a href="#" onclick="document.getElementById('id10').style.display = 'block'">Atualizar</a>
                </li>
                <li>
                    <a href="#" onclick="document.getElementById('id11').style.display = 'block'">Adicionar</a>
                </li>
                <li>
                    <a href="https://twitter.com/ARIKARDNOIR">Contact</a>
                </li>
            </ul>
        </nav>

        <!-- Caixa do Perfil -->
        <aside class="profile-card" id="canvas-dropdown">

            <header class="prof">

                <!-- here’s the avatar -->
                <a href="#"  onclick="document.getElementById('id30').style.display = 'block'" >
                    <?php $inser->selectImage($_SESSION['username']) ?>
                </a>


                <!-- the username -->
                <h1><?php echo '' . $_SESSION['username'] . ''; ?></h1>

                <!-- and role or location -->
                <h2>- Nao Seja um Esquecido, e Salve aqui -</h2>

            </header>

            <!-- bit of a bio; who are you? -->
            <div class="profile-bio">
                
                <input type="button" value="Logout" class="logout" onClick="javascript: location.href='index.php';"/>
            
            </div>

        </aside>       



        <!-- Modal para Escolher a foto de Perfil -->
        <div id="id30" class="w3-modal">

            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="width:25%;">
                <header class="w3-container w3-black" style="margin: 0;">
                    <span onclick="document.getElementById('id30').style.display = 'none'"
                          class="w3-closebtn w3-padding-top">&times;</span>
                    <h2 style="font-size: 1.5em;">Carregar Foto de Perfil</h2>
                </header>

                <div class="modal-body" style="width: 100%; margin: 0; padding: 0;">
                    <br/>
                        <form action="Upload.php" method="post" enctype="multipart/form-data" class="File">
                            Selecione uma imagem: 
                            <input name="arquivo" type="file" style="margin: 0 auto;"/>
                            <br /><br /><br /><br /><br /><br /><br /><br /><br />
                            <button id="btnsave" type="submit" class="bt ">Salvar</button>
                        </form>

                </div>

            </div>
        </div>  


        <!-- that’s all folks! -->

         <!-- Modal para Actualizar as Informacoes Inseridas -->
        <div id="id10" class="w3-modal">

            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="width:25%;">
                <header class="w3-container w3-black">
                    <span onclick="document.getElementById('id10').style.display = 'none'"
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

         
         <!-- Modal para a Inserir os dados -->
        <div id="id11" class="w3-modal">

            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="width:25%;">
                <header class="w3-container w3-black">
                    <span onclick="document.getElementById('id11').style.display = 'none'"
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


        <section>
              <?php //include("heading.php");  ?>

        </section>

          <!-- Container das Rede Sociais -->
        <div class="container">

            <div id="myBtn"  class="test1" style="cursor:pointer;" onclick="document.getElementById('id01').style.display = 'block'" ></div>
            <div id="myBtn1" class="test2" style="cursor:pointer;" onclick="document.getElementById('id02').style.display = 'block'" ></div>
            <div id="myBtn2" class="test3" style="cursor:pointer;" onclick="document.getElementById('id03').style.display = 'block'"></div>
            <div id="myBtn3" class="test4" style="cursor:pointer;" onclick="document.getElementById('id04').style.display = 'block'"></div>
            <div id="myBtn4" class="test5" style="cursor:pointer;" onclick="document.getElementById('id05').style.display = 'block'"></div>
            <div id="myBtn5" class="test6" style="cursor:pointer;" onclick="document.getElementById('id06').style.display = 'block'"></div>
            <div id="myBtn6" class="test7" style="cursor:pointer;" onclick="document.getElementById('id07').style.display = 'block'"></div>
            <div id="myBtn7" class="test8" style="cursor:pointer;" onclick="document.getElementById('id08').style.display = 'block'"></div>
            <div id="myBtn8" class="test9" style="cursor:pointer;" onclick="document.getElementById('id09').style.display = 'block'"></div>

        </div>

        <!-- Snapchat -->
        <div id="id01" class="w3-modal">

            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="width:25%;">
                <header class="w3-container w3-white">
                    <span onclick="document.getElementById('id01').style.display = 'none'"
                          class="w3-closebtn w3-padding-top">&times;</span>
                    <h2 ><img class="imgn" src="imagens/snapchat-log.png" ></h2>
                </header>

                <!--Snapchat Actions -->
                <div id="Snapchat" class="w3-container social">

                    <div class="invoice1">

                        <main>
                            <p class="snapchat"><?php $inser->selectSnp($_SESSION['username']); ?></p>
                        </main>


                    </div>

                </div>


            </div>
        </div>
        
        
        <!-- Instagram -->
        <div id="id02" class="w3-modal">

            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="width:25%;">
                <header class="w3-container w3-white">
                    <span onclick="document.getElementById('id02').style.display = 'none'"
                          class="w3-closebtn w3-padding-top">&times;</span>
                    <h2><img class="imgn" src="imagens/instagram-logo.png"></h2>
                </header>
                <!--Instagram Actions -->
                <div id="Instagram" class="w3-container social">
                    
                    <div class="invoice2">

                        <main>
                            <p class="instagram"><?php $inser->selectIg($_SESSION['username']); ?></p>
                        </main>


                    </div>
                </div>

            </div>
        </div>
        
        
        <!-- Gmail -->
        <div id="id03" class="w3-modal">

            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="width:25%;">
                <header class="w3-container w3-white">
                    <span onclick="document.getElementById('id03').style.display = 'none'"
                          class="w3-closebtn w3-padding-top">&times;</span>
                    <h2><img class="imgn" src="imagens/gmail-logo.jpg"></h2>
                </header>
                <!--Gmail Actions -->
                <div id="Gmail" class="w3-container social">

                    <div class="invoice3">

                        <main>
                            <p class="gmail"><?php $inser->selectGml($_SESSION['username']); ?></p>
                        </main>


                    </div>
                </div>  


            </div>
        </div>
         
        <!-- Facebook -->
        <div id="id04" class="w3-modal">

            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="width:25%;">
                <header class="w3-container w3-white">
                    <span onclick="document.getElementById('id04').style.display = 'none'"
                          class="w3-closebtn w3-padding-top">&times;</span>
                    <h2><img src="imagens/facebook-ebook.png"></h2>
                </header>
                
                <div id="Facebook" class="w3-container social">

                    <div class="invoice4">

                        <main>
                            <p class="facebook"><?php $inser->selectFcb($_SESSION['username']); ?></p>
                        </main>


                    </div>

                </div>

            </div>
        </div>  

        
        <!-- Linkedin -->
        <div id="id05" class="w3-modal">

            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="width:25%;">
                <header class="w3-container w3-white">
                    <span onclick="document.getElementById('id05').style.display = 'none'"
                          class="w3-closebtn w3-padding-top">&times;</span>
                    <h2><img class="imgn" src="imagens/Linkedin-Logo.png"></h2>
                </header>

                <!--Snapchat Actions -->
                <div id="Linkedin" class="w3-container social">

                    <div class="invoice5">

                        <main>
                            <p class="linkedin"><?php $inser->selectLdn($_SESSION['username']); ?></p>
                        </main>


                    </div>
                </div>


            </div>
        </div>

        
        <!-- Pinterest -->
        <div id="id06" class="w3-modal">

            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="width:25%;">
                <header class="w3-container w3-white">
                    <span onclick="document.getElementById('id06').style.display = 'none'"
                          class="w3-closebtn w3-padding-top">&times;</span>
                    <h2><img class="imgn" src="imagens/pinterest-logo.jpg"></h2>
                </header>

                <!--Snapchat Actions -->
                <div id="Pinterest" class="w3-container social">

                    <div class="invoice6">

                        <main>
                            <p class="pinterest"><?php $inser->selectPtr($_SESSION['username']); ?></p>
                        </main>


                    </div>
                </div>

            </div>
        </div>
        
        <!-- Tumblr -->
        <div id="id07" class="w3-modal">

            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="width:25%;">
                <header class="w3-container w3-white">
                    <span onclick="document.getElementById('id07').style.display = 'none'"
                          class="w3-closebtn w3-padding-top">&times;</span>
                    <h2><img class="imgn" src="imagens/tumblr-logo.png"></h2>
                </header>

                <!--Snapchat Actions -->
                <div id="Tumblr" class="w3-container social">

                    <div class="invoice7">

                        <main>
                            <p class="tumblr"><?php $inser->selectTmb($_SESSION['username']); ?></p>
                        </main>
                    </div>
                </div>


            </div>
        </div>

        
        <!-- Skype -->
        <div id="id08" class="w3-modal">

            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="width:25%;">
                <header class="w3-container w3-white">
                    <span onclick="document.getElementById('id08').style.display = 'none'"
                          class="w3-closebtn w3-padding-top">&times;</span>
                    <h2><img class="imgn" src="imagens/skype-logo.png"></h2>
                </header>

                <!--Snapchat Actions -->
                <div id="Skype" class="w3-container social">

                    <div class="invoice8">

                        <main>
                            <p class="skype"><?php $inser->selectSkp($_SESSION['username']); ?></p>
                        </main>
                   </div>
                </div>

            </div>
        </div>       

        
        <!-- Twitter -->
        <div id="id09" class="w3-modal">

            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="width:25%;">
                <header class="w3-container w3-white">
                    <span onclick="document.getElementById('id09').style.display = 'none'"
                          class="w3-closebtn w3-padding-top">&times;</span>
                    <h2><img class="imgn" src="imagens/twitter-logo.png"></h2>
                </header>

                <!--Snapchat Actions -->
                <div id="Skype" class="w3-container social">

                    <div class="invoice9" >

                        <main>
                            <p class="skype"><?php $inser->selectTwt($_SESSION['username']); ?></p>
                        </main>


                    </div>
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


        <div id="info-screen" class="hidden">
            <div id="info-shade" >

                <div id="info-text"></br></br><br><br><br><br><br><br></br><br></br><br></br>
                    <h3>SAVEIT</h3>
                    <ul>
                        <li>We are TecGenius </li>
                        <p>O Saveit é um software criado pelo um elemento do grupo TecGenius, ele tem </p>
                        <p>como objectivo ajudar pessoas que tem dificuldades em gerenciar as senhas de
                        <p>suas pricipais rede sociais visto que hoje em dia, existem inumeras rede </p>
                        <p>sociais e grupo decidiu criar o software com o intuito de ajudar nesse </p>
                        <p>sentido ter as senhas de suas redes sociais em um só lugar, essa é a </p>
                        <p>primeira versao o software sofrerá alteracoes de tempo em tempo para </p>
                        <p>que possa satisfazer as vossas nececidades. </p>
                        <br>
                        <h3>We are TecGenius.</h3>
                    </ul>

                </div>

            </div>
        </div>

        <footer><p id="bottomtext" font-size="20">2016 &copy;<a href="https://twitter.com/arikardnoir" target="_blank">TecGenius</a> Corporation</p> </footer>
     
    </body>
</html>

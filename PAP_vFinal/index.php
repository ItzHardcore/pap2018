<?php
include('server.php')
?>

<html>
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <title>Vigillance - Segurança</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!--jQuery-->
    <script> window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- CSS -->
      <style>

  .modal-body{
    font-family: Arial, Helvetica, sans-serif;
}

* {
    box-sizing: border-box;
}

/* Add padding to containers */
.container {
    padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Overwrite default styles of hr */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.registerbtn:hover {
    opacity: 1;
}

/* Add a blue text color to links */
a {
    color: dodgerblue;
}

slide {display:none}
.w3-left, .w3-right, .w3-badge 
{
cursor:pointer
}
.w3-badge {height:13px;width:13px;padding:0}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
    background-color: #f1f1f1;
    text-align: center;
}
     
.sticky-top{ 
	background-color: #383636  ;}

.d-md-inline-block{
    color: white;
  }	
.btn-outline-dark{
    color:white !important;
}
</style>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("slide");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>

 </head>


 <body>

<!--Barra de topo-->

    <nav class="site-header sticky-top py-1">
      <div class="container d-flex flex-column flex-md-row justify-content-between">
      <a class="py-2" href="./">
      <svg xmlns="vigillance.ico" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
      </a>
      <a class="py-2 d-none d-md-inline-block" href="produtos.html">Produtos</a>
      <a class="py-2 d-none d-md-inline-block" href="funcionalidades.html">Funcionalidades</a>
      <a class="py-2 d-none d-md-inline-block" href="sobrenos.html">Sobre Nós</a>
      <a class="py-2 d-none d-md-inline-block" href="https://outlook.live.com/owa/">Suporte</a>
      <!--Botão para modal Login-->
      <button type="button" id="modregisto" class="btn-sm btn-outline-dark" data-toggle="modal" data-target="#modregisto">Registo</button>
      <button id="modlogin" class="btn-sm btn-outline-dark" data-toggle="modal" data-target="#modlogin">Entrar</button>
      </div>
    </nav>
<!--Fim da Barra-->




<div class="w3-content w3-display-container" style="max-width:500px">
  <img class="slide" src="img\imagem1.jpg" style="width:100%">
  <img class="slide" src="img\imagem2.jpg" style="width:100%">
  <img class="slide" src="img\imagem3.jpg" style="width:100%">
  <img class="slide" src="img\imagem4.jpg" style="width:100%">
  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
  <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
  <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
  <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
  <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
  <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
  <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
</div>
</div>
</div>

<!-- Modal Registo -->
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">


<div class="modal fade" id="modregisto" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
   
  <!--Cenas no Modal-->




  <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modregisto" align="center"> Vigillance</h5> <!--AQUI PODIA POR UMA IMAGEM-->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container">
        <h1 align="center">Registo</h1>
        <p align="center">Por favor, preencha este formulário para criar uma conta.</p>
        <hr>

        <label for="nome"><b>Nome</b></label>
        <input type="text" placeholder="Exemplo : Diogo" name="email">
    
        <label for="nome"><b>Apelido</b></label>
        <input type="text" placeholder="Exemplo : Rodrigues" name="email">

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="exemplo@gmail.com" name="email">
    
        <label for="passe"><b>Palavra-Passe</b></label>
        <input type="password" placeholder="" name="palavrapasse">
        <!--AQUELA CENA PARA MEDIR A PALAVRA PASSE-->
    
        <label for="rep_passe"><b>Repetir Palavra-Passe</b></label>
        <input type="password" placeholder="" name="rep_palavrapasse" required>
        <hr>
        <p>Ao criar uma conta, concorda com os nossos <a href="#">Termos & Privacidades</a>.</p>
    
        <button type="submit" class="registerbtn">Registar</button>
      </div>
      
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
</div>
</div>
</div>
</div>
</div>
</div>
    </form>


<!-- Modal Login -->
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<div class="modal fade" id="modlogin" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
  
 


  <!--Cenas no Modal-->
  <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modlogin" align="center"> Vigillance </h5> <!--AQUI PODIA POR UMA IMAGEM-->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container">
        <h1 align="center">Entrar</h1>
        <p align="center">Por favor, entre na sua conta.</p>
        <hr>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="E-mail" name="email">
    
        <label for="passe"><b>Palavra-Passe</b></label>
        <input type="password" placeholder="Palavra-Passe" name="palavrapasse">
          
        <button type="submit" class="registerbtn">Entrar</button>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
</div>
</div>
</div>
</div>
</div>
</div>
    </form>


<!--Imagem do meio. Precisa de slider-->

    <div class="d-flex justify-content-between position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal">Vigillance</h1>
        <a class="btn btn-outline-secondary" href="#">Brevemente no mercado</a>
    </div>
      
      <div class="product-device box-shadow d-none d-md-block"></div>
        <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
      </div>   
        </div>  


<!--Footer-->


    <footer class="container">
      <div class="row">
        <div class="col-12 col-md">
          <svg xmlns="vigillance.ico" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mb-2"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
          <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
        </div>
        <div class="col-6 col-md">
          <h5>Funcionalidades</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Sobre Vigillance</a></li>
            <li><a class="text-muted" href="#">Funcionalidades da App</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Suporte</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="">Download do Software</a></li>
            <li><a class="text-muted" href="">Contactos</a></li>
            <li><a class="text-muted" href="">Perguntas Frequentes</a></li>
 
          </ul>
        </div>
        <div class="col-5 col-md">
          <h5>Sobre</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="">Equipa</a></li>
            <li><a class="text-muted" href="">Termos</a></li>
          </ul>
        </div>
    </footer>

    <!-- Placed at the end of the document so the pages load faster -->

  </body>
</html>
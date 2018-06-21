<?php
include_once 'connect.php';
?>

<html>
<body>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <title>Vigillance - Segurança</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!--jQuery-->
    <script src="../../assets/js/vendor/jquery-slim.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
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
        b{
            color:white !important;
            }
    </style>

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
        <a class="py-2 d-none d-md-inline-block" href="">Suporte</a>
        <!--Botão para modal Login-->
        <button  class="btn-sm btn-outline-dark" data-toggle="modal" data-target="#modlogin">Entrar</button>
        <b> Bem-vindo <?php echo $_SESSION["nome"]; ?></b>
    </div>
</nav>
<center>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width: 50%">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/imagem1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/imagem2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/imagem3.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/imagem4.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</center>
<!-- Modal Registo -->


<!-- Modal Login -->

<div class="container">
    <div class="modal fade" id="modlogin">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!--header-->
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
                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <label for="email"><b>Email</b></label>
                            <input type="text" placeholder="E-mail" name="email">

                            <label for="passe"><b>Palavra-Passe</b></label>
                            <input type="password" placeholder="Palavra-Passe" name="palavrapasse">

                            <button type="submit" class="registerbtn">Entrar</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>




<!--Imagem do meio. Precisa de slider-->

<div class="d-flex justify-content-between position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal">Vigillance</h1>
        <a class="btn btn-outline-secondary" href="#">Brevemente no mercado</a>
    </div>

    <div class="product-device box-shadow d-none d-md-block"></div>
    <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
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

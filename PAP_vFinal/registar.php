<?php

include_once 'index.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$palavrapasse = $_POST['palavrapasse'];
$rep_palavrapasse = $_POST['rep_palavrapasse'];

$sql = "INSERT INTO utilizadores (nome,apelido,data_nasc,email,password,telemobel,genero,morada,localidade,codpostal) VALUES ('$nome','$email,'$palavrapasse',$rep_palavrapasse');"
mysqli_query($conn,$sql);

header("Location: ../index.php?signup=success")


















?>
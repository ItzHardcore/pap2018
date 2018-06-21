<?php
include_once 'connect.php';



$nome=$_POST['nome'];
$apelido=$_POST['apelido'];
$email=$_POST['email'];
$password=$_POST['password'];
$rep_password=$_POST['rep_password'];
if ($password==$rep_password){



$sql = "INSERT INTO utilizadores (nome,apelido,email,password) VALUES ('$nome','$apelido','$email','$password')";
$conn->query($sql);
$_SESSION['nome']=$nome;
header('Location:welcome.php');
}


?>
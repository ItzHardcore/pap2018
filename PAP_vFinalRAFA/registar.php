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
header('Location:index.php');
}

elseif($password!=$rep_password)
 {
     echo "<center>Ocorreu um erro ao inserir os dados, tente novamente.</center>";
     header("refresh:2 http://localhost/PAP_vFinalRAFA/index.php");
}

?>
<?php
session_start();

// Variaveis
$username = "";
$nome    = "";
$errors = array(); 

// Mysql conn
$conn = mysqli_connect('localhost', 'root', '', 'fnac');

// Registo
if (isset($_POST['reg_user'])) {
  // recebe todos os inputs do form
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $nome = mysqli_real_escape_string($conn, $_POST['nome']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);


  // validação dos dados
  if (empty($username)) { array_push($errors, "Username é obrigatório"); }
  if (empty($nome)) { array_push($errors, "Email é obrigatório"); }
  if (empty($password)) { array_push($errors, "Password é obrigatório"); }
  if ($password != $password_2) {
	array_push($errors, "As duas passwords são diferentes");
  }

  // verificar se username ja existe
  $user_check_query = "SELECT * FROM utilizador WHERE username='$username' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Username já existe");
    }
  }

  // ultima verificaçao
  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "INSERT INTO utilizador (username, nome, password) 
  			  VALUES('$username', '$nome', '$password')";
    $conn->query($query);
    $_SESSION['nome'] = $nome;
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "Registado com Sucesso!";
    header('location: index.php');
  }
}

// LOGIN 
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
  
    if (empty($username)) {
      array_push($errors, "Username é obrigatório");
    }
    if (empty($password)) {
        array_push($errors, "Password é obrigatório");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM utilizador WHERE username='$username' AND password='$password'";
        $results = mysqli_query($conn, $query);
        if (mysqli_num_rows($results) === 1) {
          foreach($results as $row){
            $nome=$row['nome'];}
            
          $_SESSION['username'] = $username;
          $_SESSION['nome'] = $nome;
          $_SESSION['success'] = "Entrou com sucesso.";
          header('location: index.php');
        }else {
            array_push($errors, "Username ou password incorretos.");
        }
    }
  }
  ?>
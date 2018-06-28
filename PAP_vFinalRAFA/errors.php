<?php 
if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>


<?php
  // define variables and set to empty values
$nomeErr = $EnderecoErr = $passErr = $repPassErr = "";
$nome = $Endereco = $pass = $RepPass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nome"])) {
  $nomeErr = "O seu nome é necessário";
  } else {
  $nome = test_input($_POST["nome"]);
  }
   
  if (empty($_POST["email"])) {
  $EnderecoErr = "O endereço eletrónico é obrigatório";
  } else {
  $Endereco = test_input($_POST["email"]);
  } 

  if (empty($_POST["palavrapasse"])) {
  $passErr = "Necessita de uma palavra-passe";
  } else {
  $pass = test_input($_POST["palavrapasse"]);
  }

       
  if (empty($_POST["rep_palavrapasse"])) {
  $repPassErr = "Repetir a palavra-passe é necessário";
  } else {
  $repPass = test_input($_POST["rep_palavrapasse"]);
  }
  
  

if (empty($_POST["email"])) {
$EnderecoErr = "O endereço eletrónico é obrigatório";
} else {
$Endereco = test_input($_POST["email"]);
} 

if (empty($_POST["palavrapasse"])) {
$passErr = "Necessita de uma palavra-passe";
} else {
$pass = test_input($_POST["palavrapasse"]);
}

?>
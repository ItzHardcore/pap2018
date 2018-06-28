<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Registo</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/pwstrength.css">
	<link rel="icon" href="img/favicon.ico">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.2.0/zxcvbn.js"></script>
	<script src="scripts/pwscore.js"></script>
</head>
<body>
  <div class="header">
  	<h2>Registo</h2>
  </div>
	<div class="content">
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <input placeholder="Username" type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <input placeholder="Nome" type="nome" name="nome" value="<?php echo $nome; ?>">
  	</div>
  	<div class="input-group">
			<input placeholder="Password" type="password" name="password" id="password" onkeypress="metervalor();">
			<meter max="4" id="password-strength-meter"></meter>			
  	</div>
  	<div class="input-group">
  	  <input placeholder="Confirm password" type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Registar</button>
  	</div>
  	<p>
  		Já registado? <a href="login.php">Login</a>
  	</p>
	</form>
</div>
</body>
</html>
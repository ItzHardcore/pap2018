<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link rel="icon" href="img/vigillance_icon-4.png">  <!-- FALTA Imagem -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	
		<div>
			<div class="header">
			  <img style="padding-top:10%;padding-bottom:10%;"src="img/vigillance.icon" height="60%" width="60%">
  		</div>
		<div class="content">
  			<form method="post" action="login.php">
  				<?php include('errors.php'); ?>
  				<div class="input-group">
					<input type="text" placeholder="Username" name="username">
  				</div>
  				<div class="input-group">
  					<input type="password" placeholder="Password" name="password">
  				</div>
  				<div>
  					<button type="submit" class="btn" name="login_user">Login</button>
  				</div>
			</form>
				<p>Não está registado? <a href="register.php">Registar</a></p>
		</div>	
	</div>		

</body>
</html>


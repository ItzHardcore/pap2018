<?php


if (isset($_REQUEST['login'])) {

    $link = mysql_connect('localhost', 'root', '','vigillance_final') or die('Contacte o programador deste erro.');
    $user = mysql_real_escape_string($_POST['user']);
    $password = sha1(mysql_real_escape_string($_POST['password']));
    mysql_select_db('users');
    $query = mysql_query("SELECT * FROM `utilizadores` WHERE nome = '$nome' AND password = '$password'") or die(mysql_error());
		
    mysql_fetch_array($query);
    $total = mysql_num_rows($query);
    if ($total > 0) {
        session_start();
        $_SESSION['nome'] = '';
        header('location: welcome.php');
    }
    else {
        echo '<br>Erro nas credenciais.';

    }
}


?>
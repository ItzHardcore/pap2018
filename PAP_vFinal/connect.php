<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "vigillance_final";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Erro : " . mysqli_connect_error() . ", contacte o programador.");
}
session_start();
?> 

<?php
 session_start();
$server = "localhost";
$database = "tcg";
$username = "root";
$parola = "";
 
// conectarea la serverul MySQL
$connect = mysqli_connect($server,$username,$parola) or die( "connection" );
 
// selecteaza baza de date test
$db = mysqli_select_db($connect,$database) or die( "db" );
mysqli_set_charset($connect,"utf8");
?>

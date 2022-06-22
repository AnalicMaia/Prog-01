<?php
$servidor='localhost';
$user= 'root';
$pass= 'root';
$bdname= 'prog-01';

//mudar o nome do bando quando for no not !!!!!!
$conexao= mysqli_connect($servidor, $user, $pass,$bdname,3306);

//3306
if(!$conexao){
	die('Problemas com a conexão!');
    mysqli_connect_error();}



?>
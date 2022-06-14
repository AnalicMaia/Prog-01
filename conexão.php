<?php
$servidor='localhost';
$user= 'root';
$pass= '';
$bdname= 'test';

$conexao= mysqli_connect($servidor, $user, $pass,$bdname);

//3306
if(!$conexao){
	die('Problemas com a conexão!');
    mysqli_connect_error();}



?>
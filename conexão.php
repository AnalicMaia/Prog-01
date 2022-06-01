<?php
$servidor='localhost';
$user= 'root';
$pass= '';
$bdname= 'prog-01';

$conexao= mysqli_connect($servidor, $user, $pass,$bdname);

//3306
if(!$conexao){
	die('Problemas com a conexão!');
}



?>
<?php

define('HOST','localhost');
define('USUARIO','root');
define('SENHA','');
define('db','test');

$conexao = mysqli_connect(HOST,USUARIO,SENHA,db) or die ('Não foi possível conectar');
?>
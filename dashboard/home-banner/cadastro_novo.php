<?php
session_start();
include_once ("../conexao.php");

$titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$texto = filter_input(INPUT_POST, 'texto', FILTER_SANITIZE_STRING);
$fonte = filter_input(INPUT_POST, 'fonte', FILTER_SANITIZE_STRING);

$result_noticia = "INSERT INTO noticia (titulo, descricao, texto, fonte) VALUES ('$titulo','$descricao','$texto','$fonte')";

$resultado_noticia = mysqli_query ($conexao, $result_noticia);

if(mysqli_affected_rows ($conexao)) {
    $_SESSION['msg_edita'] = " <p style='color:green'> Noticia editada </p>";
    header ("Location: home.php?=$id");
}else{
    $_SESSION['msg_edita'] = " <p style='color:red'> Noticia não editada </p>";
    header ("Location: home.php?=$id");
}

?>
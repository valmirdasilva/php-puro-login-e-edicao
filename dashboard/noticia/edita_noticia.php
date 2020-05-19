<?php
session_start();
include_once ("../conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$texto = filter_input(INPUT_POST, 'texto', FILTER_SANITIZE_STRING);
$fonte = filter_input(INPUT_POST, 'fonte', FILTER_SANITIZE_STRING);

$result_noticia = "UPDATE noticia SET titulo='$titulo',descricao='$descricao',texto='$texto',fonte='$fonte' WHERE id='$id'";

$resultado_noticia = mysqli_query ($conexao, $result_noticia);

if(mysqli_insert_id ($conexao)) {
    $_SESSION['msg'] = " <p style='color:green'> Noticia cadastrada </p>";
    header ("Location: lista-noticia.php");
}else{
    $_SESSION['msg'] = " <p style='color:red'> Noticia não cadastrada </p>";
    header ("Location: lista-noticia.php");
}

<?php
include_once 'conexao.php';

$envia = filter_input(INPUT_POST, 'envia', FILTER_SANITIZE_STRING);
if($cadastra){


}else{
    $_SESSION['msg'] = "<p>Não cadastrado, entrar em contato com suporte</p>"

}
?>
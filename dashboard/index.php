<?php

session_start();
include('../verifica_login.php');
?>
<h1>Olá,<?php echo $_SESSION['usuario']; ?></h1>
<h2><a href="../logout.php">SAIR</a></h2>
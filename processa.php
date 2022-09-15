<?php 

include_once("coneção.php");

$nome = $_POST['nome'];

$email= $_POST['email'];

$RG = $_POST['RG '];



$sql_return0 = "INSERT INTO tb_usuarios (nome_usu,email_usu,RG_usu,) values('$nome','$email','$RG',)";

$return0 = mysqli_query($conector,$sql_return0);

$linha_afectada = mysqli_affected_rows($conector);

mysqli_close($conector);



?>
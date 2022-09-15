<?php 
 $servidor ="localhots";
 $usuario = "root";
 $senha = "";
 
 $banco = "return0";
  try{
    $conector = mysqli_connect($servidor,$usuario,$senha,$banco);

    echo "CONEÇÃO COM SUCESSO";
  } catch (\Throwable $th){
     
    echo "FALHA NA CONEÇÃO",$th;
  }




?>
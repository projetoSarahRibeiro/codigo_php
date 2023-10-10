<?php 
    //DADOS DE CONEXAO
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "escola";

    //CRIANDO A CONEXAO
    $conexao = new mysqli($servidor,$usuario,$senha,$banco);

    //para testar e detalhar o objeto "var_dump"
    //var_dump($conexao)

    //para achar oo site -> localhost/exemplo/conecta.php

    //se conectou ou se teve algum erro, mostre
    if ($conexao->conect_error){
        echo "Houve um error!";
    }
    else{
        echo"Opa consegui conectar!";
    }
?>
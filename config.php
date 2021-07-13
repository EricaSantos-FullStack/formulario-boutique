<?php
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario-boutique';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    // if($conexao -> connect_errno)
    // {
    //     echo "Erro";

    // }else{

    //     echo "Conexão foi efetuada com sucesso";
    // }

?>
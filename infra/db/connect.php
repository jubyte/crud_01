<?php

   // Inicia a sessão
   session_start();

   // Configurações de conexão com o banco de dados
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "sistema_simples";
    
    $conn = new mysqli($host,$user,$pass,$db);

    // Teste de conexão com banco de dados
    // if($conn->connect_error){
    //     die("Erro na conexão");
    // }else{
    //     echo ("<p> BD: ok </p>");
    // }
?>
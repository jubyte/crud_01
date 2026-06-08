<?php

include("infra/db/connect.php");

// Verifica se formulário login foi enviado
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Recebe os dados informados pelo usuário
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    // Verificaa se o usuário existe no banco
    $sql = "SELECT * FROM usuario 
    WHERE usuario = '$usuario' 
    AND senha = '$senha'";

    $resultado = $conn -> query($sql);

    // Se o usuário for encontrado, cria a sessão e redireciona
    if($resultado -> num_rows > 0){
        $_SESSION["usuario"] = $usuario;
        header("Location: public/home.php");
        exit();
    }else{
        $erro = "Usuário ou senha inválidos.";
    }
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login com PHP</title>
</head>

<body>
    <h2>Login com PHP</h2><form method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario">
        <br>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha">
        <br>
        <br>
        <?php

            if(isset($erro)){
                echo $erro;
            }
        ?>
        <button type="submit">Entrar</button>
    </form>
</body>

</html>
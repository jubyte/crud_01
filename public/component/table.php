<hr>

<h4> Usuários Cadastrados</h4>

<table border="1" cellpadding="2">

    <tr>
        <th>ID</th>
        <th>Usuário</th>
        <th>Senha</th>
    </tr>

    <?php
    
     // Consulta todos os usuários cadastrados
    $sqlUsuarios = "SELECT * FROM usuario";

    $resultadoUsuarios = $conn -> query($sqlUsuarios);

    // Passa por todos os registros encontrados
    while($linha = $resultadoUsuarios->fetch_assoc()){

        echo "<tr>
        
            <td>" . $linha["id"] . "</td>
            <td>" . $linha["usuario"] . "</td>
            <td>" . $linha["senha"] . "</td>

        </tr>";
    }
    
    ?>

</table>
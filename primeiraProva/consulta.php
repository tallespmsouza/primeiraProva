<html>
    <head>
        <link rel="stylesheet" href="css/index.css">
    </head>
    <body>

        <table>
            <tr>
                <th>Status</th>
                <th>Senha</th>
                <th>Nome</th>
                <th>Atividade</th>
                <th>Telefone</th>
                <th>Registro</th>
                <th>Atendimento</th>
            </tr>
            <form method="post" action="atualiza.php">
                <?php
                    require "conexao.php";
                    $sql = "select * from atendimentos where status = 'espera'";
                    $resultado = mysqli_query($connection, $sql);
            
                    while($dados = mysqli_fetch_array($resultado)){
                        echo
                        "<tr>
                            <td id='senha' style='margin:5px;'>$dados[6]</td>
                            <td style='margin:5px;'>$dados[0]</td>
                            <td style='margin:5px;'>$dados[1]</td>
                            <td style='margin:5px;'>$dados[3]</td>
                            <td style='margin:5px;'>$dados[2]</td>
                            <td style='margin:5px;'>$dados[4]</td>
                            <td style='margin:5px;'>$dados[5]</td>
                            <td><button type='submit' value='atender' name='botao'>Atender</button></td>
                            <td><button type='submit' value='cancelar' name='botao'>Cancelar</button></td>
                        </tr>
                        ";
                    }
                ?>
            </form>
        </table>
        <table>
            <tr>
                <th>Status</th>
                <th>Senha</th>
                <th>Nome</th>
                <th>Atividade</th>
                <th>Telefone</th>
                <th>Registro</th>
                <th>Atendimento</th>
            </tr>

            <?php
                require "conexao.php";
                $sql = "select * from atendimentos where status = 'atendido'";
                $resultado = mysqli_query($connection, $sql);
        
                while($dados = mysqli_fetch_array($resultado)){
                    echo
                    "<tr>
                        <td style='margin:5px;'>$dados[6]</td>
                        <td style='margin:5px;'>$dados[0]</td>
                        <td style='margin:5px;'>$dados[1]</td>
                        <td style='margin:5px;'>$dados[3]</td>
                        <td style='margin:5px;'>$dados[2]</td>
                        <td style='margin:5px;'>$dados[4]</td>
                        <td style='margin:5px;'>$dados[5]</td>
                    </tr>";
                }
            ?>
        </table>
    </body>
</html>
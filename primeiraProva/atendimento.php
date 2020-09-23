<?php
    //formulário de cadastro e as rotinas de consultar dados, 
    //atendimento e exibição da senha e o cancelamento
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Agência de Atendimentos</title>
    </head>
    <body>
        <form method="post" action="config.php" class="formulario" id="teste">
            <input name="nome" placeholder="Nome" type="text" maxlength="50" class="caixaFormulario" autofocus required>
            <input name="telefone" placeholder="Telefone" type="text" maxlength="15" class="caixaFormulario" required>
            <select name="atividade" class="selecoes" required>
                <option value="">Serviço</option>
                <option value="segunda via">Segunda Via de Conta</option>
                <option value="mudança de endereço">Mudança de Endereço</option>
                <option value="suspensão de serviço">Suspensão de Serviço</option>
                <option value="negociação">Negociação de Débitos</option>
            </select>
            <input type="submit" class="btn">
        </form>
        
        <a href="consulta.php"><button>Consulta</button></a>
    </body> 
</html>
<div class="container">
    <h2 class="bi bi-arrow-counterclockwise">Atualizar Cliente</h2>
    <?php
    $idCliente = $_POST["idCliente"];
    $nomeCliente = $_POST["nomeCliente"];
    $telefoneCliente = $_POST["telefoneCliente"];
    $emailCliente = $_POST["emailCliente"];


    $sql = "update tbClientes set 
    nomeCliente='{$nomeCliente}',
    telefoneCliente='{$telefoneCliente}',
    emailCliente='{$emailCliente}'

    where idCliente = '{$idCliente}'
    ";

    $rs = mysqli_query($conexao,$sql);
    if ($rs) {
        ?>
        <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Atualizando registro</h4>
            <p>Registro atualizado com sucesso!</p>
            <p>Clique <a href="index.php?menu=clientes" class="alert-link">aqui</a> para a lista de clientes.</p>
        </div>
        <?php
    } else {
        ?>
        <div class="alert alert-danger" role="alert">
            <p>Erro ao editar o registro do cliente.</p>
        </div>
        <?php
    }

    ?>
    
</div>
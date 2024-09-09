<div class="container">
<h2 class="bi bi-arrow-counterclockwise">Atualizar Categoria</h2>
    <?php
    $idCategoria = $_POST["idCategoria"];
    $nomeCategoria = $_POST["nomeCategoria"];


    $sql = "update tbCategorias set 
    nomeCategoria='{$nomeCategoria}'

    where idCategoria = '{$idCategoria}'
    ";

    $rs = mysqli_query($conexao,$sql);

    if ($rs) {
        ?>
        <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Atualizando registro</h4>
            <p>Registro atualizado com sucesso!</p>
            <p>Clique <a href="index.php?menu=categorias" class="alert-link">aqui</a> para a lista de categorias.</p>
        </div>
        <?php
    } else {
        ?>
        <div class="alert alert-danger" role="alert">
            <p>Erro ao editar o registro da categoria.</p>
        </div>
        <?php
    }

    ?>
</div>
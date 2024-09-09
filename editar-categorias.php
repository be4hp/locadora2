<div class="container">

    <?php
    $idCategoria = $_GET["idCategoria"];
    $sql = "SELECT * FROM tbCategorias WHERE idCategoria = '{$idCategoria}'";
    $rs = mysqli_query($conexao, $sql) or die("Erro ao realizar a consulta. Erro: " . mysqli_error($conexao));
    $dados = mysqli_fetch_assoc($rs);
    ?>

    <div class="container">
        <h2 class="bi bi-bookmark-star">Editar categoria</h2>
        <form action="index.php?menu=atualizar-categorias" method="post">

            <div class="mb-3">
                <label class="form-label" for="idCategoria">ID</label>
                <div class="input-group">
                    <div class="input-group-text">
                        <i class="bi bi-key"></i>
                    </div>
                    <input class="form-control" type="text" name="idCategoria" id="idCategoria" value="<?=$dados["idCategoria"]?>" readonly>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label" for="nomeCategoria">Nome da Categoria</label>
                <div class="input-group">
                        <div class="input-group-text">
                            <i class="bi bi-card-list"></i>
                        </div>
                    <input class="form-control" type="text" name="nomeCategoria" id="nomeCategoria" value="<?=$dados["nomeCategoria"]?>">
                </div>
            </div>
        
            <div class="mb-3">
                <input class="btn btn-success bi bi-floppy-fill" type="submit" value="Salvar">   
            </div>
        </form>
    </div>
</div>
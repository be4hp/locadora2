<div class="container">
<h2 h3 class="bi bi-bookmark-star">Lista de Categorias</h2>
<div class="mb-3">
    <a class="btn btn-secondary" href="index.php?menu=cad-categorias">Cadastrar nova Categoria</a>
</div>

<div class="mb-3">
    <?php
    //$txtPesquisa = (isset($_POST["txtPesquisa"]))?$_POST["txtPesquisa"]:"";
    if (isset($_POST["txtPesquisa"])) {
        $txtPesquisa = $_POST["txtPesquisa"];
    } else {
        $txtPesquisa = "";
    }
    ?>

    <form action="" method="post">
    <div class="input-group">
            <label class="input-group-text" for="txtPesquisa">Pesquisa</label>
            <input class="form-control" type="search" name="txtPesquisa" id="txtPesquisa" value="<?=$txtPesquisa?>">
            <button class="btn btn-secondary" type="submit">
            OK
        </button>
    </div>
    </form>
</div>

   <div class="border p-1 rounded bg-dark">
        <table class="table table-dark table-striped table-hover">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nome da Categoria</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $sql = "SELECT * FROM tbcategorias 
                where nomeCategoria like '%{$txtPesquisa}%'";
                $rs = mysqli_query($conexao, $sql);
                while ($dados = mysqli_fetch_assoc($rs)) {
                ?>
                    <tr>
                        <td><?= $dados["idCategoria"] ?></td>
                        <td><?= $dados["nomeCategoria"] ?></td>
                        <td>
                            <a class="btn btn-outline-warning"
                            href="index.php?menu=editar-categorias&idCategoria=<?=$dados["idCategoria"]?>"><i class="bi bi-pencil-square"></i></a></td>
                        <td>
                            <a class="btn btn-outline-danger"
                            href="index.php?menu=excluir-categorias&idCategoria=<?=$dados["idCategoria"]?>"> <i class="bi bi-trash"></i></a></td>  
                        <td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<div class="container">
    <?php
    $idCliente = $_GET["idCliente"];
    $sql = "SELECT * FROM tbclientes WHERE idCliente = '{$idCliente}'";
    $rs = mysqli_query($conexao, $sql) or die("Erro ao realizar a consulta. Erro: " . mysqli_error($conexao));
    $dados = mysqli_fetch_assoc($rs);
    ?>

    <div class="container">
        <h2 class="bi bi-person-fill-add">Editar Cliente</h2>

        <form action="index.php?menu=atualizar-clientes" method="post">
            <div  class="mb-3">
                <label class="form-label" for="idCliente">ID</label>
                <div class="input-group">
                    <div class="input-group-text">
                            <i class="bi bi-key"></i>
                    </div>
                    <input class="form-control" type="text" name="idCliente" id="idCliente" value="<?=$dados["idCliente"]?>" readonly>
                </div>
            </div>

            <div  class="mb-3">
                <label class="form-label" for="nomeCliente">Nome do Cliente</label>
                <div class="input-group">
                        <div class="input-group-text">
                            <i class="bi bi-card-list"></i>
                        </div>
                    <input class="form-control" type="text" name="nomeCliente" id="nomeCliente" value="<?=$dados["nomeCliente"]?>">
                </div>
            </div>
        
            <div  class="mb-3">
                <label class="form-label" for="telefoneCliente">Telefone</label>
                <div class="input-group">
                        <div class="input-group-text">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                    <input class="form-control" type="text" name="telefoneCliente" id="telefoneCliente" value="<?=$dados["telefoneCliente"]?>">
                </div>
            </div>
        
            <div class="mb-3">
                <label class="form-label" for="emailCliente">E-Mail</label>
                <div class="input-group">
                        <div class="input-group-text">
                            <i class="bi bi-envelope-at-fill"></i>
                        </div>
                <input class="form-control" type="email" name="emailCliente" id="emailCliente" value="<?=$dados["emailCliente"]?>">
                </div>
            </div>
        
            <div class="mb-3">
                <input class="btn btn-success bi bi-floppy-fill" type="submit" value="Salvar">   
            </div>
        </form>
    </div>

</div>
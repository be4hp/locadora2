<div class="container">
    <h3 class="bi bi-person-fill-add" >Inserir Cliente</h3>
        <?php
            $nomeCliente = $_POST["nomeCliente"];
            $telefoneCliente = $_POST["telefoneCliente"];
            $emailCliente = $_POST["emailCliente"];


            $sql = "INSERT INTO tbclientes (
                nomeCliente,
                telefoneCliente,
                emailCliente
                )
                VALUES(
                '$nomeCliente',
                '$telefoneCliente',
                '$emailCliente'
                )
                ";
                $rs = mysqli_query($conexao,$sql);

                if($rs){
                    ?>
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Adicionando novo registro...</h4>
                        <p>Registro inserido com sucesso!</p>
                        <p>Clique <a href="index.php?menu=clientes" class="alert-link">aqui</a> para a lista de clientes.</p>
                    </div>
                    <?php
                        }else{
                            ?>
                            <div class="alert alert-danger" role="alert">
                                <p>Erro ao inserir</p>;
                        </div>
                    <?php
                    }
                    ?>
</div>
<div class="container">
<h3 class="bi bi-bookmark-plus">Cadastro de nova categoria</h3>

<form action="index.php?menu=inserir-categorias" method="post">
    <div class="mb-3 col-6">
        <label class="form-label" for="nomeCategoria">Nome da Categoria</label>
            <div class="input-group">
                <div class="input-group-text">
                    <i class="bi bi-plus-square"></i>
                </div>
                <input class="form-control" type="text" name="nomeCategoria" id="nomeCategoria">
            </div>
    </div>
  
    <div class="mb-3">
        <div class="mb-3">
            <input class="btn btn-success bi bi-floppy-fill" type="submit" value="Salvar">
        </div>
    </div>
</form>
</div>
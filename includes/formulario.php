<main>
  <section>
    <a href="index.php">
      <button class="btn btn-warning">Voltar</button>
    </a>
  </section>
  <h2 class="mt-3"><?=TITLE?></h2>
  <form method="post">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label>Título</label>
          <input type="text" class="form-control" name="titulo" value="<?=$vaga->titulo?>">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label>Salário</label>
          <input type="text" class="form-control" name="salario" value="<?= $vaga->salario ?>">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label>Descrição</label>
          <textarea class="form-control" name="descricao" rows="5"><?=$vaga->descricao?></textarea>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label>Status</label>
          <div>
            <div class="form-check form-check-inline">
              <label class="form-control">
                <input type="radio" name="ativo" value="s" checked> Ativo
              </label>
            </div>

            <div class="form-check form-check-inline">
              <label class="form-control">
                <input type="radio" name="ativo" value="n" <?=$vaga->ativo == 'n' ? 'checked' : ''?>> Inativo
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-success">Enviar</button>
    </div>
  </form>
</main>
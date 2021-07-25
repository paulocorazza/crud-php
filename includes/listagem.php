<?php

  $mensagem = '';
  if(isset($_GET['status'])){
    switch ($_GET['status']) {
      case 'success':
        $mensagem = '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>A acao foi concluida com sucesso!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
        break;

      case 'error':
        $mensagem = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Opss, aconteceu algo errado!</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
        break;
    }
  }

  $resultados = '';
  foreach($vagas as $vaga){
    $resultados .= '<tr>
                      <td>'.$vaga->id.'</td>
                      <td>'.$vaga->titulo.'</td>
                      <td>'.$vaga->descricao.'</td>
                      <td>'.($vaga->ativo == 's' ? '<span class="badge badge-pill badge-success">Ativo</span>' : '<span class="badge badge-pill badge-danger">Inativo</span>').'</td>
                      <td>'.date('d/m/Y à\s H:i:s',strtotime($vaga->data)).'</td>
                      <td>
                        <a href="editar.php?id='.$vaga->id.'">
                          <button type="button" class="btn btn-warning">Editar</button>
                        </a>
                        <a href="excluir.php?id='.$vaga->id.'">
                          <button type="button" class="btn btn-danger">Excluir</button>
                        </a>
                      </td>
                    </tr>';
  }

  $resultados = strlen($resultados) ? $resultados : '<tr>
                                                       <td colspan="6" class="text-center">
                                                              Nenhuma vaga encontrada
                                                       </td>
                                                    </tr>';

?>
<main>

  <?=$mensagem?>

  <section>
    <a href="cadastrar.php">
      <button class="btn btn-success">Nova vaga</button>
    </a>
  </section>

  <section>

    <table class="table bg-light mt-3 table-striped">
        <thead  class="bg-primary text-light">
          <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Descrição</th>
            <th>Status</th>
            <th>Data</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
            <?=$resultados?>
        </tbody>
    </table>

  </section>


</main>
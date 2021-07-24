<?php

    $resultados = '';

    foreach($vagas as $vaga){
        $resultados .= '<tr>
                            <td>'.$vaga -> id . '</td>
                            <td>'.$vaga -> titulo .'</td>
                            <td>'.$vaga -> descricao .'</td>
                            <td>'.$vaga -> ativo .'</td>
                            <td>'.$vaga -> data .'</td>
                            <td><button class="btn btn-primary btn-sm">Visualizar</button>
                             <button class="btn btn-warning btn-sm">Editar</button>
                             <button class="btn btn-danger btn-sm">Excluir</button>
                            </td>
                        </tr>';
    }
    

?>


<main>
    <section>
        <a href="cadastrar.php">
            <button class="btn btn-success">Nova Vaga</button>
        </a>
    </section>
    <p></p>
    <section>
        <table class="table bg-light">
            <thead>
                <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Descricao</th>
                <th>Status</th>
                <th>Data de Publicacao</th>
                <th>Acoes</th>
                </tr>
            </thead>
            <tbody>
                <?= $resultados ?>
            </tbody>
        </table>
    </section>    
</main>
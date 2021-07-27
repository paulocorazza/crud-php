<?php

$alertaLogin = strlen($alertaLogin) ? '<div class="alert alert-danger">' . $alertaLogin . '</div>' : '';
$alertaCadastro = strlen($alertaCadastro) ? '<div class="alert alert-danger">' . $alertaCadastro . '</div>' : '';



?>


<div class="jumbotron text-dark">
    <div class="row">
        <div class="col">
            <img src="/assets/jobs-1.png" class="rounded mx-auto d-block img-fluid">
        </div>
    </div>
    <div class="row mt-4">
        <div class="col">
            <form method="POST">
                <h2>Login</h2>
                <?= $alertaLogin ?>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                    <label for="email">Senha:</label>
                    <input type="password" class="form-control" name="senha" required>
                </div>

                <div class="form-group">
                    <button type="submit" name="acao" value="logar" class="btn btn-primary btn-block">Logar</button>
                </div>
            </form>
        </div>

        <div class="col">
            <form method="POST">
                <h2>Cadatre-se</h2>
                <?= $alertaCadastro ?>
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                    <label for="email">Senha:</label>
                    <input type="password" class="form-control" name="senha" required>
                </div>

                <div class="form-group">
                    <button type="submit" name="acao" value="cadastrar"
                        class="btn btn-primary btn-block">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
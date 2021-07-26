<div class="jumbotron text-dark">
   <div class="row">
       <div class="col">
        <form method="POST">
            <h2>Login</h2>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control"  name="email" required>
            </div>
            <div class="form-group">
                <label for="email">Senha:</label>
                <input type="password" class="form-control"  name="password" required>
            </div>

            <div class="form-group">
                <button type="submit" name="acao" value="logar" class="btn btn-primary">Logar</button>
            </div>
        </form>
       </div>

       <div class="col">
       <form method="POST">
            <h2>Cadatre-se</h2>

            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control"  name="email" required>
            </div>
            <div class="form-group">
                <label for="email">Senha:</label>
                <input type="password" class="form-control"  name="senha" required>
            </div>

            <div class="form-group">
                <button type="submit" name="acao" value="cadastrar" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
       </div>
   </div>
</div>
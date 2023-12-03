<h1>Novo Usuario</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
    <label for="nome">Nome</label>
    <input type="text" name="nome" class="form-control ">
    </div>
    <div class="mb-3">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control ">
    </div>
    <div class="mb-3">
    <label for="senha">Senha</label>
    <input type="password" name="senha" class="form-control ">
    </div>
    <div class="mb-3">
    <label for="data">DataNasc</label>
    <input type="date" name="data" class="form-control ">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
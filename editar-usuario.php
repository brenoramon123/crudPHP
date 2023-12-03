<h1>Editar Usuário</h1>
<?php
$sql = "SELECT * FROM personal WHERE id= ".$_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
    <label for="nome" >Nome</label>
    <input value="<?php print $row->nome; ?>" type="text" name="nome" class="form-control ">
    </div>
    <div class="mb-3">
    <label for="email">Email</label>
    <input value="<?php print $row->email; ?>"  type="email" name="email" class="form-control ">
    </div>
    <div class="mb-3">
    <label for="senha">Senha</label>
    <input  type="password" name="senha" class="form-control " required>
    </div>
    <div class="mb-3">
    <label for="data">DataNasc</label>
    <input  value="<?php print $row->data_nasc;?>" type="date" name="data" class="form-control ">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
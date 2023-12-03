<h1>Listar Usuario</h1>
<?php
$sql = "SELECT * FROM personal";
$res = $conn->query($sql);
$qtd = $res->num_rows;
if($qtd > 0){
    print " <table class='table table-hover table-striped table bordered'>";
    print "<thead> <td>Nome:</td> <td>Email:</td> <td>Data de Nascimento</td> <td>ID</td> <td>Ações</td></thead> ";
    while($row = $res->fetch_object()){
        print "<tr>";
        print "<td>".$row->nome."</td>";
        print "<td>".$row->email."</td>";
        print "<td>".$row->data_nasc."</td>";
        print "<td>".$row->id."</td>";
        echo "<hr style='color:black;'>";
        print "<td>
        <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
        <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."'}else{return false;};\" class='btn btn-danger'>Excluir</button>
      </td>";
        print "</tr>";
    }
    print " </table>";
}else{
    print "<p class='alert-danger'>Não encontramos nenhum usuario</p>";
}
?>
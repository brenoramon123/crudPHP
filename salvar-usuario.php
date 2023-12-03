<?php
switch($_REQUEST["acao"]){
    case "cadastrar":
            @$nome = $_POST["nome"];
            @$email = $_POST["email"];
            @$senha = md5($_POST["senha"]);
            @$data = $_POST["data"];

            $sql = "INSERT INTO personal (nome,email,senha,data_nasc) VALUES ('{$nome}','{$email}','{$senha}','{$data}')";

            $res = $conn->query($sql);

            if($res == true){
                print "<script> alert('cadastrado com sucesso')</script>";
                print "<script> location.href='?page=listar'</script>";
            }else{
                print "<script> alert('Não foi possivel cadastrat!')</script>";
                print "<script> location.href='?page=listar'</script>";
            }
            break;
    case "editar":
            @$nome = $_POST["nome"];
            @$email = $_POST["email"];
            @$senha = md5($_POST["senha"]);
            @$data = $_POST["data"];
            
            $sql = "UPDATE personal SET nome='{$nome}',email='{$email}',senha='{$senha}',data_nasc='{$data}' WHERE id=".$_REQUEST["id"];
            $res = $conn->query($sql);

            if($res == true){
                print "<script> alert('editado com sucesso')</script>";
                print "<script> location.href='?page=listar'</script>";
            }else{
                print "<script> alert('Não foi possiveleditar!')</script>";
                print "<script> location.href='?page=listar'</script>";
            }
            break;
    case "excluir":
        $sql = "DELETE FROM personal WHERE id=".$_REQUEST["id"];

        $res = $conn->query($sql);

            if($res == true){
                print "<script> alert('excluido com sucesso')</script>";
                print "<script> location.href='?page=listar'</script>";
            }else{
                print "<script> alert('Não foi possivel excluir!')</script>";
                print "<script> location.href='?page=listar'</script>";
            }
            break;
}
 ?>


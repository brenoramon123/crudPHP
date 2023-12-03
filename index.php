<!DOCTYPE html> 
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <title>cadastro</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-sucess ">
        <div class="container-fluid" >
          <a class="navbar-brand" href="index.html">Cadastro</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="?page=">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?page=novo">Novo usuario</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?page=listar">Listar Usúarios</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container">
  <div class="row">
    <div class="col mt-5">
      <?php
      include("bd\config.php");
        switch(@$_REQUEST["page"]){
          case "novo":
            include("novo-usuario.php");
            break;
          case "listar":
            include("listar-usuario.php");
            break;
            case "salvar":
              include("salvar-usuario.php");
              break;
              case "editar":
                include("editar-usuario.php");
                break;
          default:
            print "<h1>Bem Vindo</h1>";
            break;
        }
        ?>
    </div>
  </div>
      </div>

    <script src="./bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/js/bootstrap.min.js">
</body>
</html>
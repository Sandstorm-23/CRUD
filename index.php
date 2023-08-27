<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
  
  </head>
  <body>



  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Ouvidoria</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=novo">Novo Manifesto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar">Listar Manifestos</a>
        </li>
     
      </ul>
    </div>
  </div>
</nav>

<div class = "container">
    <div class = "row">
        <div class = "col mt-5">

        
          <h1>Listar usuarios</h1>
        <table id="myTable" class="display" style = "width:100%">
    <thead>
        <tr>
            <th>id</th>
            <th>Tipo de manifesto</th>
            <th>Data de envio</th>
           
        </tr>
    </thead>

</table>

        <?php 
include("config.php");

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
    print " <h1>Bem vindo </h1>" ;

}

?>

        </div>
    </div>
</div>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
$(document).ready(function() {
  $('#myTable').DataTable({
"processing": true,
"serveSide": true,
"ajax": "listar-usuario.php"


  });
});

</script>

</html>

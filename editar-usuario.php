<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar usuário</h1>







    <?php
echo()

//    var_dump($_REQUEST['id']);
//   $sql = "SELECT * FROM usuarios WHERE  id = $_REQUEST['id']";


//    $res = $conn->query($sql);
//    $row = $res->fetch_object();
?>





    <form action = "?page=salvar" method="POST">
        <input type="hidden" name ="acao" value = "cadastrar">
        <div class = "mb-3" >
            <label>Nome</label>
            <input type="text" name = "nome" class = "form-control" value ="<?php
            print $row->nome;
            ?>">
        </div>
        <div class = "mb-3" >
            <label>E-mail</label>
            <input type="text" name = "email" class = "form-control" value ="<?php
            print $row->nome;?>">
        </div>
        <div class = "mb-3" >
            <label>Senha</label>
            <input type="password" name = "senha" class = "form-control" required>
        </div>
        <div class = "mb-3" >
            <label>Data de Nascimento</label>
            <input type="date" name = "data_nasc" class = "form-control" value ="<?php
            print $row->date_nasc;?>">
        </div>
        <div class = "mb-3" >
           <button type = "submit" class="btn btn-primary"> Enviar </button>
        </div>
    </form>
    
</body>
</html>
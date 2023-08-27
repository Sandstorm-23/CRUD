<?php 
switch ($_REQUEST["acao"]){
    case 'cadastrar':
      $nome = $_POST["nome"];
      $email = $_POST["email"];
      $data1 = date("d/m/Y H:i:s");
      $tipo = $_POST["tipo"];
      $manifesto = $_POST["manifesto"];
      $telefone = $_POST["tel"];
  

      $sql = "INSERT INTO usuarios (nome, email, telefone) VALUES ('{$nome}', '{$email}','{$telefone}')";

      $abc = "INSERT INTO manifestos (tipo, data1, manifesto) VALUES ('{$tipo}', '{$data1}','{$manifesto}')";
      

$res = $conn->query($sql);
$res = $conn->query($abc);
      if($res==true){
         print"<script>alert('Cadastro comcluido com sucesso) </script>";
         print"<script>location.href='?page=listar'; </script>";
       }else{
         print"<script>alert('Não foi possivel cadastrar) </script>";
         print"<script>location.href='?page=listar'; </script>";
      }
        break;  
         case 'editar':
          $nome = $_POST["nome"];
          $email = $_POST["email"];
          $senha = $_POST["senha"];
          $data_nasc = $_POST["data_nasc"];


          $sql = "UPDATE usuarios SET
          nome='{$nome}',
          email='{$email}',
          senha='{$senha}',
          data_nasc='{$data_nasc}'
          WHERE
            id=".$REQUEST["id"];
          


          $res = $conn->query($sql);
      if($res==true){
         print"<script>alert('Cadastro editado com sucesso) </script>";
         print"<script>location.href='?page=listar'; </script>";
       }else{
         print"<script>alert('Não foi possivel realizar a edição) </script>";
         print"<script>location.href='?page=listar'; </script>";
      }

            break;
               case 'excluir':

                $sql = "DELETE FROM usuarios WHERE id =".$_REQUEST["id"];
                $res = $conn->query($sql);
                if($res==true){
                   print"<script>alert('Cadastro excluido com sucesso) </script>";
                   print"<script>location.href='?page=listar'; </script>";
                 }else{
                   print"<script>alert('Não foi possivel excluir) </script>";
                   print"<script>location.href='?page=listar'; </script>";
                }
                break;

}


?>
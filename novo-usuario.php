<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Novo Manifesto</h1>
    <form action = "?page=salvar" method="POST">
        <input type="hidden" name ="acao" value = "cadastrar">
        <div class = "mb-3" >
            <label>Nome Completo</label>
            <input type="text" name = "nome" class = "form-control">
        </div>
        <div class = "mb-3" >
            <label>E-mail</label>
            <input type="text" name = "email" class = "form-control">
        </div>
        <div class = "mb-3" >
            <label>Telefone</label>
            <input type="text" name = "tel" class = "form-control">
        </div>
        <label>Tipo de manifesto</label>
        <select class="form-select" aria-label="Default select example" name = "tipo">
  <option selected>Selecionar</option>
  <option value="Elogio">Elogio</option>
  <option value="Reclamação">Reclamação</option>
  <option value="Denúncia">Denúncia</option>
  <option value="Sugestão">Sugestão</option>
  <option value="Solicitação">Solicitação</option>
</select>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Manifesto:</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder = "Escreva aqui" name ="manifesto"></textarea>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
  <label class="form-check-label" for="flexCheckIndeterminate">
    Ficar em anonimato
  </label>
</div>
<br>
  
        <div class = "mb-3" >
           <button type = "submit" class="btn btn-primary"> Enviar </button>
        </div>
    </form>
    

    
</body>
</html>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../estilo/style.css">
    <link rel="shortcut icon" href="./img/logo copy.png" type="image/x-icon">
        <head>
      ...
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      ...
    </head>
</head>

<body>
     <header class="header">    
    <nav class="navbar">
    <div class="container-fluid">
    <a class="navbar-brand" href="">
      <img src="https://cdn.lugc.link/fdff2030-93b1-4aa0-8eb2-c73b4abfe77c/-/preview/265x70/-/format/auto/" alt="Logo STREPARAVA" class="d-inline-block align-text-top">
     
    </a>
  </div>
</nav>
    </header>
    <div class="inserir">
        <form action="processa.php" method="POST">
            <h1>Ferramentas</h1>
            <div class="input">
                <input type="text" name="id" placeholder="id" required>
                <input type="text" name="id ferramenta" placeholder="id ferramenta" required>
                <input type="text" name="quantidade" placeholder="quantidade" required>
                <input type="text" name="data" placeholder="data" required>
                <input type="text" name="quantidade mínima" placeholder="quantidade mínima" required>
            <div class="botoes">
                <button type="submit"class="btn btn-danger" style="padding: 20px" id="enviarf" >enviar</button>
                <button type="submit"class="btn btn-danger" id="delete">deletar</button>
             
            </div>
            
            
    </div>
        
</body>
</html>

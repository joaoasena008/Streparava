<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../estilo/style.css">
    <link rel="shortcut icon" href="./img/logo copy.png" type="image/x-icon">
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
            <h1>Solicitação</h1>
            <div class="input">
                <input type="text" name="id" placeholder="id" required>
                <input type="text" name="data" placeholder="data" required>
                <input type="text" name="itens" placeholder="itens" required>
                <input type="text" name="custo total" placeholder="custo total" required>
                <input type="text" name="preset" placeholder="preset" required>
                <input type="text" name="status" placeholder="status" required>
               
                            
            </div>
            <div class="botoes">
                <button type="submit" id="enviarsoli" class="btn btn-danger" >enviar</button>
              
             
            </div>
            
    </div>
</body>
</html>

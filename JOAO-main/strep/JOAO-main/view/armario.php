<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <!-- <link rel="stylesheet" href="./estilo/style.css"> -->
    <link rel="shortcut icon" href="./img/logo copy.png" type="image/x-icon">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
       <link rel="stylesheet" href="../estilo/style.css">
       <link rel="preload" fetchpriority="high" media="(min-width: 764px)" as="image" href="https://cdn.lugc.link/fdff2030-93b1-4aa0-8eb2-c73b4abfe77c/-/preview/265x70/-/format/auto/">
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
    <div class="mb-3">
        <form action="processa.php" method="POST">
            <div class="carousel-item active">
            <img class="d-block w-100" src="">
            </div>
            <h1 >Armário</h1>
            <div class="input">
                <input type="text" name="id" class="form-control"  placeholder="id" required>
                <input type="text" class="form-control" name="id ferramenta" placeholder="turno" required>
                <input type="text"class="form-control"  name="quantidade" placeholder="linha" required>
                <input type="text"class="form-control"  name="data" placeholder="id funcionário" required>
                <input type="text"class="form-control"  name="quantidade mínima" placeholder="quantidade prevista" required>
          
            
            </div>
            <div class="botoes">
                <button type="submit" class="btn btn-danger" id="enviar" >enviar</button>
              
             
            </div>
            
    </div>
     <script src="JOAO-main/assets/scripr.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    
</body>
</html>

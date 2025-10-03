<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="./estilo/style.css">
    <link rel="shortcut icon" href="./img/logo copy.png" type="image/x-icon">
</head>
<body>
    <div class="inserir">
        <form action="processa.php" method="post">
            <img src="./img/logo copy.png" alt="Logo ETMSL" class="logo">
            <h1>Cadastro de itens</h1>
            <div class="input">
                <input type="text" name="nome" placeholder="id item" required>
                <input type="text" name="re" placeholder="Quantidade solicitada" required>
                <input type="text" name="cargo" placeholder="Quantidade aprovada" required>
                <input type="text" name="periodo" placeholder="Valor" required>
             
            </div>
            <div class="botoes">
                <button type="submit" id="entrar" >Enviar</button>
                
            </div>
            
</body>
</html>

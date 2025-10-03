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
        <form action="processa.php" method="POST">
            <img src="./img/logo copy.png" alt="Logo ETMSL" class="logo">
            <h1>Funcionário</h1>
            <div class="input">
                <input type="text" name="id" placeholder="id" required>
                <input type="text" name="matricula" placeholder="matrícula" required>
                <input type="text" name="nome" placeholder="nome" required>
                <input type="text" name="id departamento" placeholder="id departamento" required>
                <input type="text" name="funcao" placeholder="função" required>
                <input type="text" name="contato" placeholder="contato" required>
                <input type="text" name="status" placeholder="status" required>
                
                
                
             
            </div>
            <div class="botoes">
                <button type="submit" id="entrar" >enviar</button>
              
             
            </div>
            
    </div>
</body>
</html>

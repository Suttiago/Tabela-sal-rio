<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php error_reporting(E_ERROR); ?>

    <section>   
        <form action="tabela.php" method="post">
            <h1>Login</h1>
            <label for="nome">Nome:</label>   
            <input type="text" name="nome" id="nome" value="<?= $nome ?>">   
            <br><br>    
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" placeholder="senha">
            <br><br>
            <input type="submit" value="Enviar">
            <label>Telefone:</label>
            <input type="tel" name="phone" id="phone" value="<?= $phone?>">
            <label></label>
        </form> 
    </section>






</body>
</html>
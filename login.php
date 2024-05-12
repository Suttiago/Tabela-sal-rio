<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

   





    <?php 
        error_reporting(E_ERROR);

    
     if(isset($_POST["submit"])){
    
        include_once("conexao.php");

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $genero = $_POST["genero"];
        $data_nascimento = $_POST["data_nascimento"];

        echo "$nome, $email, $phone, $genero, $data_nascimento";

        $result = mysqli_query($conn, "INSERT INTO usuários (Nome, Email, Telefone, Sexo, Nascimento) 
        VALUES('$nome', '$email', '$phone', '$genero', '$data_nascimento')");
    
        }





    
    ?>

    <section>   
    <h1>Formulário para clientes</h1>
        <form action="tabela.php" method="post">
            

            <h2>Informações pessoais</h2>
            <label for="nome">Nome:</label>   
            <input type="text" name="nome" id="nome" value="<?= $nome ?>" class="inputUser" required>   
            <br><br>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="email" class="inputUser" required>
            <br><br>

            <label>Telefone:</label>
            <input type="tel" name="phone" id="phone" value="<?= $phone?>" class="inputUser" required>
            <br><br>
            
            <h2>Gênero</h2>
            <label for="feminino">Feminino</label>
            <input type="radio" name="genero" id="feminino" value="feminino" required>
            <br><br>

            <label for="Masculino">Masculino</label>
            <input type="radio" name="genero" id="masculino" value="masculino" required>  
            <br><br>
            
            <label for="Outro">outro</label>
            <input type="radio" name="genero" id="outro" value="outro" required>  
            <br><br>

            
            <label for="data_nascimento">Data de nascimento</label>
            <input type="date" name="data_nascimento" id="data_nascimento" class="inputUser" required>
            <br><br>
            
            <input type="submit" value="Enviar" name="submit">
        </form> 
    </section>






</body>
</html>
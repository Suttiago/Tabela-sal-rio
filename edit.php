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
    session_start();
    error_reporting(E_ERROR);
    include_once("conexao.php");
    $acao = "novo";
    if (!empty($_GET["id"])) {

        $id = $_GET["id"];
        $sqlselect = "SELECT * from usuários WHERE ID = " . $id;


        $resultado = $conn->query($sqlselect);
        $result = mysqli_fetch_array($resultado);
        $nome = $result['Nome'];
        $email = $result["Email"];
        $senha = $result["Senha"];
        $phone = $result["Telefone"];
        $genero = $result["Sexo"];
        $data_nascimento = $result["Nascimento"];

        $acao="alterar";
    }

    ?>
    <section>
        <h1>Formulário para clientes</h1>

        <form action="tabela.php" method="post">

            <input type="hidden" name="acao" value="<?= $acao ?>" />
            <input type="hidden" name="id" value="<?= $id ?>" />
            <h2>Informações pessoais</h2>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="<?= $nome ?>" class="inputUser" required>
            <br><br>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="email" value="<?= $email ?>" class="inputUser" required>
            <br><br>

            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" placeholder="senha" value="<?= $senha ?>" class="inputUser" required>
            <br><br>

            <label>Telefone:</label>
            <input type="tel" name="phone" id="phone" value="<?= $phone ?>" class="inputUser" required>
            <br><br>

            <h2>Gênero</h2>
            <label for="feminino">Feminino</label>
            <input type="radio" name="genero" id="feminino" value="feminino" <?= ($genero == 'feminino' ? 'checked' : '') ?> required>
            <br><br>

            <label for="Masculino">Masculino</label>
            <input type="radio" name="genero" id="masculino" <?= ($genero == 'masculino' ? 'checked' : '') ?> value="masculino" required>
            <br><br>

            <label for="Outro">outro</label>
            <input type="radio" name="genero" id="outro" <?= ($genero == 'outro' ? 'checked' : '') ?> value="outro" required>
            <br><br>


            <label for="data_nascimento">Data de nascimento</label>
            <input type="date" name="data_nascimento" id="data_nascimento" value="<?= $data_nascimento ?>" class="inputUser" required>
            <br><br>

            <input type="submit" value="Enviar" name="submit">
        </form>
    </section>






</body>

</html>
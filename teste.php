<?php 
    if(isset($_POST["submit"]) && !empty($_POST["email"]) && !empty($_POST["senha"])){

        include_once("conexao.php");
        $senha = $_POST["senha"];
        $email = $_POST["email"];

       

        $sql = "SELECT * FROM usuários WHERE Email = '$email' and Senha = '$senha'";
        $result = $conn ->query($sql);

        if (mysqli_num_rows($result) < 1) {
            unset ($_SESSION["email"]);
            unset ($_SESSION["senha"]);
            header("Location: login.php");
        }

        else{
            $_SESSION["email"] = $email;
            $_SESSION["senha"] = $senha;

            header("Location: tabela.php");
        }
    }

?>
<?php
    error_reporting(E_ERROR);
    include_once('conexao.php');    
    if (!empty($_GET["id"])) {

        $id = $_GET["id"];
        $sqlselect = "SELECT * from usuários WHERE ID = " . $id;


        $resultado = $conn->query($sqlselect);
        $result = mysqli_fetch_array($resultado);
    
        if($resultado -> num_rows> 0) {
            $sqlDelete = "DELETE  FROM usuários WHERE ID= $id";
            $resultDelete = $conn->query ($sqlDelete);
        }
    }
    header("Location: cadastros.php")
?>
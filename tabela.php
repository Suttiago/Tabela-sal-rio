<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=]6, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <!-- Objetivo da tabela, é me ajudar na divisão do meu primeiro salário, me dando 3 possíbilidades de dividir
    Fazer uma divisão de 50%-30%-20%, 70%-20%-10% ou eu mesmo decidir como vou dividir o meu salário da forma que eu quiser
    Fiz 3 campos que irei dividir meu salário, Gastos fixos, lazer e investimentos, foi meu primeiro projeto em PHP
    e pretendo melhorar ele no futuro -->





    <?php
    error_reporting(E_ERROR);

    //Defini a variável onde pego o valor do salário
     $salario = $_POST ["salario"] ?? 1;


    //Defini uma função para separar o salário da divisão 50-30-20
        function cinqporcen($salario){
        
        //declarei as variáveis e suas respectivas porcentagens
        $gastos = intval($salario * (0.5));
        $lazer = intval($salario * (0.3));
        $invest = intval($salario *(0.2));
        //Fiz uma fórmula para ver o quanto irá sobrar no fim do mês
        $tot_fin_mes = intval($salario - ($gastos + $lazer + $invest));

        //Fiz uma tabela para deixar os dados organizados
        echo "<table border='1' style='width: 300px'>";
        echo "<tr><th>Categoria</th><th>Valor</th></tr>";
        echo "<tr><td>Gastos</td><td>$gastos</td></tr>";
        echo "<tr><td>Lazer</td><td>$lazer</td></tr>";
        echo "<tr><td>Investimento</td><td>$invest</td></tr>";
        echo "<tr><td>sobrou</td><td> $tot_fin_mes</td></tr>";
        echo "</table>";
        }

        //defini a a função com a divisão 70-20-30
        function setporcen($salario){
        
            //Defini as váriaveis com suas respectivas porcentagens
            $gastos = intval($salario * (0.7));
            $lazer = intval($salario * (0.2));
            $invest = intval($salario *(0.1));
            $tot_fin_mes = intval($salario - ($gastos + $lazer + $invest));

            //Criei a tabela para organizar os dados
            echo "<table border='1' style='width: 300px'>";
            echo "<tr><th>Categoria</th><th>Valor</th></tr>";
            echo "<tr><td>Gastos</td><td>$gastos</td></tr>";    
            echo "<tr><td>Lazer</td><td>$lazer</td></tr>";
            echo "<tr><td>Investimento</td><td>$invest</td></tr>";
            echo "<tr><td>sobrou</td><td> $tot_fin_mes</td></tr>";
            echo "</table>";
        }
    ?>
    <!-- Formulário onde as informações do salário vão ser coletadas -->
    <section>
        <form action="" method="post">
            <label> Digite seu salário </label>   
            <input type="number" name="salario" id="salario" value="<?= $salario ?>">     
            <input type="submit" value="calcular">
    </section>

    <h1>Método de divisão recomendado</h1>

    <h2> Divisão de salário 50% - 30% - 20% </h2>
    <?= //chamei a função 50-30-20
       cinqporcen($salario);
    ?>

    <h2>Divisão 70% - 20% - 10%</h2>
    <?php //chamei a função 70-20-10
        echo setporcen($salario);
    ?> 
    
    <h1>Tabela editável</h1>
    <section>
        <form action="" method="post">
             <label> Digite seu salário: </label>   
            <input type="number" name="salario2" id="salario2" value="<?= $salario2 ?>">   
            <label> Gastos: </label>   
            <input type="number" name="gastos2" id="gastos2" value="<?= $gastos2 ?>"> 
            <label> Lazer: </label>   
            <input type="number" name="lazer2" id="lazer2" value="<?= $lazer2 ?>">
            <label> Investimento: </label>   
            <input type="number" name="invest2" id="invest2" value="<?= $invest2 ?>">
            <input type="submit" value="calcular">
    </section>
    <?php 
        //uma tabela editável com todas as variaveis recebendo informação via post
        $salario2 = intval($_POST ["salario2"] ?? 0);
        function edita($salario2){

           $salario2 = ($_POST ["salario2"] ?? 0);
           $gastos2 = intval($_POST["gastos2"]??0);
           $lazer2 = intval($_POST["lazer2"] ?? 0);
           $invest2 = intval($_POST["invest2"] ?? 0);
           $tot_fin_mes2 = intval($salario2 - ($gastos2 + $lazer2 + $invest2));
           
          
            //tabela mostrando os dados
           echo "<table border='1' style='width: 300px'>";
           echo "<tr><th>Categoria</th><th>Valor</th></tr>";
           echo "<tr><td>Gastos</td><td>$gastos2</td></tr>";    
           echo "<tr><td>Lazer</td><td>$lazer2</td></tr>";
           echo "<tr><td>Investimento</td><td>$invest2</td></tr>";
           echo "<tr><td>sobrou</td><td> $tot_fin_mes2</td></tr>";
           echo "</table>";

           //condição para verificar se você está em débito ou não
           if ($tot_fin_mes2 < 0) {
            echo "<h2>Você está com dívidas, como podemos melhorar isso?<h2>";
            }
            elseif ($tot_fin_mes2 >= 0) {
                echo "<h2> Você não possui dívidas, parabéns<h2>";  
            }


           
        }

    //chamei a função da tabela editável
     edita($salario2);   
    ?>

        

</body>
</html>
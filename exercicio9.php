<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9</title>
</head>
<body>
<?php
        include 'funcoes.php';
        $num1 = "";
        $num2 = "";
        $num3 = "";
    ?>
    <form method="POST">
        <label>Primeiro Número: </label>
        <input type="number" id="num1" name="num1"><br><br>

        <label>Segundo Número: </label>
        <input type="number" id="num2" name="num2"><br><br>

        <label>Terceiro Número: </label>
        <input type="number" id="num3" name="num2"><br><br>

        <button>Calcular
        <?php
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];

        ?>  
        </button><br><br>
        
        <textArea rows="40" cols="40" readonly fixed>
        <?php
            if($num1 == "" || $num2 == ""){
                echo "Preencha os campos!";
            }else{
            
            }echo "O valor de delta é: ".delta($num1,$num2,$num3);
           ?>
        </textArea>

</body>
</html>
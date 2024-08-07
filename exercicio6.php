<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $num1 = "";//Instanciando
    ?>

    <h1>Exercício 06</h1>
    <form method= "POST">
            <label>Primeiro número</label>
        <input type= "number" id="num1" name="num1"><br><br>


        <button>Calcular
        <?php
            $num1 = $_POST['num1'];
        ?>
        </button><br><br>

        <textArea rows="40" cols="40" readonly fixed>
        <?php
            if($num1 == "" || $num2 == ""){
                echo "Preencha os campos!";
            }else{
            
            }echo "A raiz dos números digitados é: ".multiplicar($num1);
        ?>
        </textArea>
</body>
</html>
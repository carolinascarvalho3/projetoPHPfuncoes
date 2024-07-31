<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $num1 = "";
        $num2 = "";
    ?>
    <form method="POST">
        <label>Primeiro Número: </label>
        <input type="number" id="num1" name="num1"><br><br>

        <label>Segundo Número: </label>
        <input type="number" id="num2" name="num2"><br><br>

        <button>Calcular</button><br><br>
        
        <textArea rows="40" cols="40" readonly fixed>
        <?php
            if($num1 == "" || $num2 == ""){
                echo "Preencha os campos!";
            }else{
            
            }echo "A multiplicação dos números digitados é: ".multiplicar($num1,$num2);
           ?>
        </textArea>

    </form> 
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 18</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $palavra = "";//Instanciando
    ?>

    <h1>Exercício18</h1>

    <form method="POST">
        <label>Escolha uma palavra: </label>
        <input type="text" id="palavra" name="palavra"><br><br>

        
        <button>Resultado
        <?php
            $palavra = $_POST['palavra'];
        ?>  
        </button><br><br>
        
        <textArea rows="10" cols="40" readonly fixed>
            <?php
            if($num1 == "" || $num2 == ""){
                echo "Preencha os campos!";
            }else{
            
            }echo "A palavra é um palíndromo: ".palindromo($palavra);
           ?>
        </textArea>

</body>
</html>
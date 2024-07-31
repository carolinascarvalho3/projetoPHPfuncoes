<?php
    //Instanciar
    $num1 = 0; //Variáveis Globais (O código todo utiliza).
    $num2 = 0;

    function somar($num1, $num2){ 
           return (int)$num1 + (int)$num2;
    } //fim do Somar

    function subtrair($num1, $num2){
        return (int)$num1 - (int)$num2; 
    } //fim do Subtrair


    function multiplicar($num1,$num2){
        return $num1* $num2;
    } //fim do Multiplicar


    function dividir($num1,$num2){
        if($num2 ==0){
            return"Impossível dividir por zero!";
        }else
            return $num1 / $num2;
    
        } //fim do Dividir
    
    function potencia($num1, $num2){
        if($num2 < 0){
            return "Impossível calcular a potência do expoente negativo";
        }else{
            return pow($num1, $num2);
        } //fim do Método
    }

    function raiz($num1){
        if($num1 >= 0){
        return sqrt ($num1);
        }else{
            return "Impossível calcular a raiz de número negativo";
        }
    
    
        } //fim do Método
        
        function tabuada($num1){
            $i = 0;
            $resultado = "";
            for($i; $i<=10;$i++){
                $resultado .="<br>".$num1." * ". $i." = ".($num1*$i);
            
            } //fim do for
                return $resultado;
        } //fim do Método

        function areaRetangulo($base, $altura){
            if(($base <= 0) || ($altura <= 0)){
                return "Impossível calcular área";            
            }else{
                return $base * $altura;
            }
        
        } //fim do Método

        function delta($a,$b,$c){
            //delta = b² - 4 * a * c
            $delt = pow($b,2) - 4 * $a * $c; 
            if ($delt < 0){
                return -1;
            }else{
                return $delt;
            }
        }//fim do Delta

        function X1($a,$b,$c){
            $d = delta($a,$b,$c);
            if($d == -1){
                return "Impossível calcular X1, delta negativo";
            }else {
                return ($b + sqrt($d))/(2*$a);
            }
            
        }//fim do X1

        function X2($a,$b,$c){
            $d = delta($a,$b,$c);
            if($d == -1){
                return "Impossível calcular X1, delta negativo";
            }else {
                return ($b - sqrt($d))/(2*$a);
            }
            
        }//fim do X1

        function parImpar($num){
            if($num % 2 == 0){
                return "Par";
            }else{
                return "Impar";
            }
            }//fim do parImpar

        function maioridade($idade){
            if($idade < 18){
                return "Menor de Idade";
            }else{
                return "Maior de Idade";
            }
        }//fim do maioridade
    
        function dobro($num){
            return $num * 2; 
        }//fim do método

        //F = C X 1,8 + 32

        function celsiusFahrenheit($celsius){
            return ($celsius * 1.8)+32;
        }//fim do método

        /*Faça um programa que peça três números e exiba o maior deles. OBS: Estruturas condicionais em PHP: e = && - ; || = ou */ 

        function buscarMaior($num1, $num2, $num3){
            if(($num1 > $num2) && ($num1 > $num3)){
                return $num1;
            }else if(($num2 > $num1) && ($num2 > $num3)){
                return $num2;
            }else{
                return $num3;
            }

        }//fim do método
        
        //Faça um programa que peça um número e verifique se ele é positivo, negativo ou zero.

        function negativoPositivo($num){
            if($num > 0){
                return "O número é positivo";
            }else if($num < 0){
                return "O número é negativo";
            }else{
                return "Zero";
            }
                
        }//fim do método

        //Faça um programa que peça um número e retorne a soma de todos 
        //os números de 1 até esse número

        function somaNumeros($num){
            $i = 1;
            $soma = 0;
            for ($i; $i <= $num; $i++){
                $soma += $i;
            }
            return $soma;

        }//fim do método

        //Strlen("") - mede o tamanho de uma palavra
        //substring - verifica se uma palavra é palíndromo
        //Strrev

        function verificarPrimos($num){
            if($num < 1){
                return "Não é primo";
            }
            for($i = 2; $i <= sqrt($num); $i++){
                if($num % $i == 0){
                    return "Não é primo";
            }
        }
        return "É primo";
        
    }//fim do método primo

        function palindromo($palavra){
            if($palavra == strrev($palavra)){
                return "Palíndromo!";
            }else{
                return "Não é palíndromo";
            }
        } //fim do método palíndromo

        function fatorial($num){
            $i = $num-1; 
            for ($i; $i >= 1; $i--){
                $num = $num * $i;
            }
            return $num;
        }//fim do método

        function numerosPares($num){
            $i =1;
            $pares = "";
            for($i;$i <= $num; $i++){
                if($i % 2 == 0){
                    $pares .= "<br>".$i;
                }
            }//fim do for
            return $pares;
        }//fim do método

        function contarVogais($palavra){
            $tamanho = strlen($palavra); //tamanho da palavra
            $i = 0;
            $letra = "";
            $contador = 0; 
            for($i;$i < $tamanho; $i++){
                $letra = substr($palavra,$i,1);
                
                switch($letra){
                    case 'A';
                    $contador++;
                    break;

                    case 'a';
                    $contador++;
                    break;

                    case 'E';
                    $contador++;
                    break;

                    case 'e';
                    $contador++;
                    break;

                    case 'I';
                    $contador++;
                    break;

                    case 'i';
                    $contador++;
                    break;

                    case 'O';
                    $contador++;
                    break;

                    case 'o';
                    $contador++;
                    break;

                    case 'U';
                    $contador++;
                    break;

                    case 'u';
                    $contador++;
                    break;
                }
            }//fim do for
            return $contador;
        }//fim do método

        function mostrarPrimos($num){
            $numPrimos = "";
            $i=1;
            for($i;$i <= $num; $i++){
                    if(verificarPrimos($i) != "Não é primo"){
                        $numPrimos .= "<br>".$i;
                    }
            }
            return $numPrimos;
        }//fim do mostrar

        function verificarDatas($mes, $dia, $ano){
            if(checkdate($mes, $dia, $ano)){
                return "Data Válida!";
            }else {
                return "Data Inválida!";
            }
        }//fim do método

        function mediaCincoNumeros($num1, $num2, $num3, $num4, $num5){
            return ($num1, $num2, $num3, $num4, $num5) / 5;
        }

        function divisores($num){
            $i=1;
            for($i; $i < $num;i++){
                if($i % $num == 0){
                    $divisor .= "<br>".$i;
                }
            }
            return $divisor
        }

        function contarPalavras($texto){
            $contar = str_word_count($texto,0);
            return $contar;
        }

        fuction fibonacci($num){
            $i = 0;
            $fib0 = 0;
            $fib1 = 1;
            $fib2 = 0;
        $resultado = $fib0."<br>".$fib1."<br>";
            for($i; $i <= $num; $i++){
                $fib2 =  $fib0 + $fib1;
                $resultado .="<br>"$fib2;
                $fib0 = $fib1;
                $fib1 = $fib2;
            }
            return $resultado;
        }//fim do método
    // Resultados
     
        echo "<br>A soma dos números é: ".somar(5,8);
        echo "<br>A subtração dos número é: ".subtrair(9,15);
        echo "<br>A Multiplicação dos números é: ".multiplicar(10,8);
        echo "<br>A Divisão dos números é: ".dividir(3,1);
        echo "<br>A potência dos números é: ".potencia(10,2);
        echo "<br>A raiz do número informado é: ".raiz(10);
        echo "<br>A tabuada do número informado é: ".tabuada(8);
        echo "<br>A área do retângulo é: ".areaRetangulo(5,6);
        echo "<br>O X1 é: ".X1(-8,5,9);
        echo "<br>O X2 é: ".X2(-8,5,9);
        echo "<br>Par ou ímpar?".parImpar(10);
        echo "<br>Maior ou menor? ".maioridade(21);
        echo "<br>O dobro do número é: " .dobro(100);
        echo "<br>Temperatura em Fahrenheit: " .celsiusFahrenheit(25);
        echo "<br>O maior dos números é : ".buscarMaior(10,4,60);
        echo "<br>O número é: ".negativoPositivo(0);
        echo "<br>A soma dos número é: ".somaNumeros(50);
        echo "<br>O número primo é: ".verificarPrimos(45);
        echo "<br>A palavra é palíndromo? ".palindromo("camiseta");
        echo "<br>O fatorial é: ".fatorial(5,6,8);
        echo "<br>Os números pares são: ".numerosPares(100);
        echo "<br>Vogais da palavra digitada: ".contarVogais("Allan");
        echo "<br>Números primos: ".mostrarPrimos(10);
        echo "<br>".verificarDatas(02,29,1998);
        echo "<br>A média dos números é: ".mediaCincoNumeros(1,5,3,6,8);
        echo "<br>Total de palavras são: ".contarPalavras("Teste número 6")
        echo "<br>Os divisores são: ".divisores(30);
        echo "<br>Sequência de Fibonacci: ".fibonacci(10);
?>
<?php

    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    $op = $_GET['op'];
    $resultado;
    
    switch ($_GET['op']){
        case 'soma':
            $resultado = $numero1 + $numero2;
            echo "Insira o número 1: $numero1" .;
            echo "Insira o número 2: $numero2" .;
            echo "a soma dos numeros é: $resultado";
        break;
        case 'subtracao':
            $resultado = $numero1 + $numero2;
            echo "Insira o número 1: $numero1".;
            echo "Insira o número 2: $numero2".;
            echo "o resultado da subtração é: $resultado";
        break;
        case 'multiplicacao':
            $resultado = $numero1 + $numero2;
            echo "Insira o número 1: $numero1" .;
            echo "Insira o número 2: $numero2" .;
            echo "o resultado da multiplicação é: $resultado";
        break;
        case 'divisao':
            $resultado = $numero1 + $numero2;
            echo "Insira o número 1: $numero1" .;
            echo "Insira o número 2: $numero2".;
            echo "o resultado da divisão é: $resultado";
        break;
    }
    ?>
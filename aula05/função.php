<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
/*Crie uma função que receba 2 valores inteiros como argumentos e retorne a sua soma. Se o valor da
soma for negativo o método deverá retornar o valor 0.*/
 
function msg() {
    echo "Hello world!";
  }
  echo "ola";

  function somar{
    
  }

function soma_sem_negativo($a, $b) {
    // Calcula a soma dos dois valores
    $soma = $a + $b;
    // Verifica se a soma é negativa
    if ($soma < 0) {
        return 0;
    } else {
        return $soma;
    }
}

// Exemplo de uso da função
$resultado = soma_sem_negativo(5, 3);
echo "Resultado da soma: " . $resultado; // Saída: Resultado da soma: 0








?>
</body>
</html>

<?php

require_once('./../vendor/autoload.php');

use Php\Conference\Calculadora\Soma;

$soma = new Soma;
$resultado = $soma->getResultado(2,2);

echo "O resultado da soma é: <strong> $resultado </strong>";
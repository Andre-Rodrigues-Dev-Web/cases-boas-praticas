<?php
//Cadeis de ifs
$carros = ['vermelho', 'azul', 'verde', 'amarelo', 'branco'];

if (in_array('verde', $carros)) {
    echo "Existe um carro verde na lista.";
} elseif (in_array('azul', $carros)) {
    echo "Existe um carro azul na lista.";
} elseif (in_array('vermelho', $carros)) {
    echo "Existe um carro vermelho na lista.";
} else {
    echo "Não existe nenhum carro verde, azul ou vermelho na lista.";
}

//Solução clean
$carros = ['vermelho', 'azul', 'verde', 'amarelo', 'branco'];

$cor = 'verde';

$resultado = match (true) {
    in_array('verde', $carros) => "Existe um carro verde na lista.",
    in_array('azul', $carros) => "Existe um carro azul na lista.",
    in_array('vermelho', $carros) => "Existe um carro vermelho na lista.",
    default => "Não existe nenhum carro verde, azul ou vermelho na lista."
};

echo $resultado;

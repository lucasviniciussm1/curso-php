<div class="titulo">Operações</div>

<?php

$dados1= [
    "nome" => "José",
    "idade" => 28
];

$dados2 =[
    "naturalidade" => "Fortaleza"
];

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);   

echo '<br>' . is_array($dadosCompletos);
echo '<br>' . count($dadosCompletos);

echo '<br>';
$indice = array_rand($dadosCompletos);
echo "$indice = $dadosCompletos[$indice]";
echo '<br>';
echo "{$dadosCompletos['idade']}";
echo '<br>';
echo "${dadosCompletos['idade']}";

//REMOVE DETERMINADO ELEMENTO
// unset($dadosCompletos["nome"]);
// echo'<br>';
// print_r($dadosCompletos);

//LIMPA OS DADOS
//unset($dadosCompletos);
// echo'<br>';
// var_dump($dadosCompletos);

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

//ASSIM NÃO DÁ CERTO OS PARES SOBREPÕEM OS IMPARES;
// $decimais= $pares + $impares;
// echo '<br>';
// print_r($decimais);

$decimais= array_merge($pares, $impares);
echo '<br>';
print_r($decimais);

sort($decimais);
echo '<br>';
print_r($decimais);
<h2>Matriz</h2>
<p>
    são estruturas de dados bidimensional,
    onde é necessario informar 2 idicis para realizar o acesso de uma valor.
</p>
<p>
    Na prática consite de um vetor que armazena outros
    vetores.
</p>

<?php
$produto1 = [
    "nome" => "câmera" ,
    "marca" => "LG" ,
    "preço" => 2500
];

$produto2 = [
    "nome" => "notebook" ,
    "marca" => "Dell" ,
    "preço" => 7500
];
$produto1 = [
    "nome" => "câmera" ,
    "marca" => "LG" ,
    "preço" => 2500
];

$produto3 = [
    "nome" => "Smartphone" ,
    "marca" => "Samsung" ,
    "preço" => 3500
];

$produtos = [
    $produto1,
    $produto2,
    $produto3,
];

echo $produto[1]["marca"];
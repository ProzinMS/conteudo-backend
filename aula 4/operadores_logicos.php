<h2>Operadores Lógicos</h2>

<ol>
    <li>and - E</li>
    <li>or - OU</li>
    <li>xor - Ou exclusivo</li>
    <li>! - Não </li>
    <li>&& - E</li>
    <li>|| - OU</li>
</ol>

<?php
    $media = 6;
    $faltas = 20;
    $criterio1 = $medis > 6; //false
    $criterio2 = $faltas < 25; //true
    $resultado = $criterio1 && $criterio2;
    var_dump($resultado);

    ?>
    
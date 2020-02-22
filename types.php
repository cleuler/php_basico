<?php
/*
 * php: programando com orientação a objetos
 * DALL'OGLIO Pablo. PHP: programando com orientação a objetos. 4. ed. São Paulo: Novatec, 2019.
 *
 * 1 Introdução ao PHP
 * 1.5 Declarações de Tipo (p. 34-40)
 */

$a = 5;
$b = 'teste';
var_dump($a, $b);

function calcula_imc(float $peso, float $altura): float {
    var_dump($peso, $altura);
    return $peso / ($altura * $altura);
}

var_dump(calcula_imc('75.1', 2));

var_dump(calcula_imc('77'  , 1.77));

function nl($n = 1): void {      // para pular n linhas na saída (web display)
    for ($i = 1; $i <= $n; $i++){
        echo '<br>';
    }
    return;
}
nl(2);
print_r(calcula_imc(79  , 1.77));
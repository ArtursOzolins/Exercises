<?php

$variableExample1 = 10;
$stringExample1 = '10';


if ($variableExample1 == $stringExample1) {
    if ($variableExample1 === $stringExample1) {
        echo 'Same data type and value' . PHP_EOL;
    }
    else {
        echo 'Same value but data type is different' . PHP_EOL;
    }
}

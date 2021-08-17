<?php

$variableExample7 = 49;

switch($variableExample7) {
    case $variableExample7 < 50:
        echo 'low' . PHP_EOL;
        break;
    case $variableExample7 > 50 && $variableExample7 < 100:
        echo 'medium' . PHP_EOL;
        break;
    case $variableExample7 > 100:
        echo 'high' . PHP_EOL;
        break;
}

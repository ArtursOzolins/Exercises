<?php

$randomArray = [3,5,9,12.3,'goose'];

function double($element) {
    return $element * 2;
}

for ($i = 0; $i < count($randomArray); $i++) {
    echo double($randomArray[$i]) . PHP_EOL;
}

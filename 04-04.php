<?php

$arrayExample4 = [];
for ($i = 1; $i <= 21; $i++) {
    array_push($arrayExample4, $i);
}

for ($i = 0; $i <= sizeof($arrayExample4) - 1; $i++) {
    if ($arrayExample4[$i] % 3 === 0) {
        echo $arrayExample4[$i] . PHP_EOL;
    }
}

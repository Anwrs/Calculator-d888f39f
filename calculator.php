<?php

echo ("welke operator wil je uitvoeren? (+, -)"). PHP_EOL;
$som = readline("");
echo ("Eerste getal?"). PHP_EOL; 
$a = readline("");
echo ("Tweede getal?"). PHP_EOL;
$b = readline("");

if ($som == "+") {
    $ans = $a + $b;
} elseif ($som == "-") {
    $ans = $a - $b;
}

echo ("Uw resultaat is: "). $ans;
<?php 

function sayHello($name) {
    echo "Hello $name";
}

sayHello("Ucok CJ \n");
sayHello("Tole \n");

function sayHi($name = "Zero Blitz") {
    echo <<<NAME
    Hello $name \n
    NAME;
}

sayHi();
sayHi('Sento Isuzu');

function sum(int $a, int $b) {
    $total = $a + $b;   
    echo "Total = $total\n";
}
sum(10, 20);
sum(1.2, 2.1);

function sumAll(...$values) {
    $total = 0;
    foreach($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(" + ", $values) . " = $total \n";
}

sumAll(1, 2, 40, 50, 90);
sumAll(...[1, 40, 23, 45, 34, 89]);
?>
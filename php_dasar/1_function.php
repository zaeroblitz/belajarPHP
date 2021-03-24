<?php 

function sayHello(){
    echo "This is how to make function in PHP\n";
}

sayHello();

function testName(String $name) {
    echo "Hello $name welcome to PHP\n";
}
testName('Zaero Blitz');

$test = false;

if ($test) {
    function hi() {
        echo "Hi\n";
    }
} else {
    function hi() {
        echo "False\n";
    }
}

hi();

?>
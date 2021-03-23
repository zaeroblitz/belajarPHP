<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        function foo() {
            echo "FOO";
        }

        function bar() {
            echo "BAR";
        }

        $functionName = 'foo';
        $functionName();

        $functionName = 'bar';
        $functionName();
    ?>
    <br>

    <?php 
        function sayHello(string $name, $filter){
            $finalName = $filter($name);
            echo "$name after get filter = $finalName \n";
        }

        sayHello("Zaero Blitz", 'strtoupper');
        sayHello("Zaero Blitz", 'strtolower');
    ?>

</body>
</html>
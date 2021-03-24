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
        $sayWelcome = function (string $name, $filter) {
            $finalName = $filter($name);
            echo "Welcome $finalName";
        };

        $sayWelcome("Ucok CJ", "strtoupper");
    ?>
    <br>

    <?php 
        function sayGoodbye(string $name, $filter) {
            $finalName = $filter($name);
            echo "Goodbye $finalName";
        };

        sayGoodbye("Ucok CJ", function($name) {
            return strtoupper($name);
        });
    ?>
    <br>
    
    <?php 
        $firstName = "Zaero";
        $lastName = "Blitz";

        $sayHelloZaero = function () use ($firstName, $lastName) {
            echo "Hello $firstName $lastName";
        };

        $sayHelloZaero($firstName, $lastName);
    ?>

</body>
</html>
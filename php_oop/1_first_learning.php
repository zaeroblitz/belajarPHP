<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    class Person {
        const AUTHOR = "Muzakki Hafizh Setiono";

        var string $firstName = "No Name";
        var string $lastName = "";
        var int $age = 0;
        var string $country = "Indonesia";
        var string $city = "Depok";

        function sayHello($firstName, $lastName) {
            echo "Hello $firstName $lastName I'm {$this->firstName} {$this->lastName} Welcome to PHP";
        }
        
        function sayHi(?string $name) {
            if (is_null($name)) {
                echo "Hi, I'm {$this->firstName} {$this->lastName} Welcome to PHP ";
            } else {
                echo "Hi $name, I'm {$this->firstName} {$this->lastName} Welcome to PHP ";
            }
        }

        function authorInfo() {
            echo "Author : " . self::AUTHOR;
        }
    }

    class Pokemon {
        var string $pokemonName;
        var string $pokemonType;
        var string $trainer = "Zaero Blitz";

        public function __construct(string $pokemonName, string $pokemonType) {
            $this->pokemonName = $pokemonName;
            $this->pokemonType = $pokemonType;
        }
    }

    $ucok = new Person();
    $ucok->firstName = "Ucok";
    $ucok->lastName = "CJ";
    $ucok->age = 30;
    $ucok->country = "United States";
    $ucok->city = "San Andreas";  

    $test = new Person();
    $test->firstName = "Captain Prince";
    $test->age = 20;
    
    $pikachu = new Pokemon("Pikachu", "Lightning");
?>
<body>
    <p><b><?php  echo "Name : {$ucok->firstName} {$ucok->lastName}"; ?></b></p>
    <p><?php  echo "Age : {$ucok->age}"; ?></p>
    <p><?php  echo "Country : {$ucok->country}"; ?></p>
    <p><?php  echo "City : {$ucok->city}"; ?></p>
    <p><?php  echo "{$ucok->sayHello("Big", "Smoke")}"; ?></p>

    <br>

    <p><b><?php  echo "Name : {$test->firstName} {$test->lastName}"; ?></b></p>
    <p><?php  echo "Age : {$test->age}"; ?></p>
    <p><?php  echo "Country : {$test->country}"; ?></p>
    <p><?php  echo "City : {$test->city}"; ?></p>
    <p><?php  echo "{$test->sayHello("Zaero", "Blitz")}"; ?></p>
    <p><?php $test->sayHi(null) ?></p>
    <p><?php $test->sayHi("Ucok") ?></p>

    <br>

    <p>
        <?php
            echo "Pokemon Name : {$pikachu->pokemonName}"; ?>
    </p>

    <p>
        <?php
            echo "Pokemon Type : {$pikachu->pokemonType}"; ?>
    </p>

    <p>
        <?php 
            echo "Trainer : {$pikachu->trainer}"; ?>
    </p>

    <b><i><p><?php echo "{$test->authorInfo()}" ?></p></b>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    class Monster {
        var string $monsterName = "No Name";
        var string $attack = "Normal Attack";
        var int $damage = 30;

        function run() {
            echo "{$this->monsterName} is running to you";
        }

        function attack() {
            echo "{$this->monsterName} is attacking you with {$this->attack} taken {$this->damage} heatlh damage";
        }

        public function __construct(string $monsterName, string $attack) {
            $this->monsterName = $monsterName;
            $this->attack = $attack;
        }
    }

    class StoneMonster extends Monster {
        function run() {
            echo "Stone Monster '{$this->monsterName}' is running to you and prepare to use {$this->attack}";
        }

        function parentRun() {
            parent::run();
        }

        function attack() {
            echo "Stone Monster '{$this->monsterName}' is attacking you with {$this->attack} taken {$this->damage} health damage";
        }
    }

    $zubat = new Monster("Zubat", "Wing Attack");
    $golem = new StoneMonster("Golem", "Earthquake");
?>
<body>
    
    <p>
        <?php 
            echo "{$zubat->attack()}" ?>
    </p>

    <p>
        <?php 
            echo "{$golem->parentRun()}" ?>
    </p>

    <p>
        <?php 
            echo "{$golem->run()}" ?>
    </p>
    
    <p>
        <?php 
            echo "{$golem->attack()}" ?>
    </p>

</body>
</html>
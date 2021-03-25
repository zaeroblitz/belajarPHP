<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    class Dungeon {
        var Monster $monster;
    }

    class Monster {
        public string $monsterName;

        public function __construct(string $monsterName) {
            $this->monsterName = $monsterName;
        }
    }

    class Goblin extends Monster {}
    class Ogre extends Monster {}

    function monsterWalk(Monster $monster) {
        echo "{$monster->monsterName} is walking and looking around";
    }

    
?>
<body>
    
    <p>
        <?php 
            $dungeon = new Dungeon();
            $dungeon->monster = new Goblin("Goblin");
        ?>
    </p>
    

</body>
</html>
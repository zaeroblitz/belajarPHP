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

    function monsterRun(Monster $monster) {
        if ($monster instanceof Goblin) {
            echo "Goblin's {$monster->monsterName} is running to you and calling reinforcement";
        } else if ($monster instanceof Ogre) {
            echo "Ogre's {$monster->monsterName} is running to you and preparing spell attack";
        }
    }

    function monsterAttack(Monster $monster) {
        if ($monster instanceof Goblin) {
            echo "Goblin's {$monster->monsterName} is attacking to you and give 20 health damage";
        } else if ($monster instanceof Ogre) {
            echo "Ogre's {$monster->monsterName} is using black magic to you and give 50 healt damage";
        }
    }
?>
<body>
    
    <p>
        <?php 
            $dungeon = new Dungeon();

            $dungeon->monster = new Goblin("Midget");
            monsterWalk($dungeon->monster);
            echo "<br>";
            monsterRun($dungeon->monster);
            echo "<br>";
            monsterAttack($dungeon->monster);
            echo "<br>";
            echo "<br>";
            
            monsterWalk(new Goblin("Hob Goblin"));
            echo "<br>";
            monsterRun(new Goblin("Hob Goblin"));
            echo "<br>";
            monsterAttack(new Goblin("Hob Goblin"));
            echo "<br>";
            echo "<br>";
            
            $dungeon->monster = new Ogre("Ogre Magi");
            monsterWalk($dungeon->monster);
            echo "<br>";
            monsterRun($dungeon->monster);
            echo "<br>";
            monsterAttack($dungeon->monster);
            echo "<br>";
            echo "<br>";

            monsterWalk(new Ogre("King Ogre"));
            echo "<br>";
            monsterRun(new Ogre("King Ogre"));
            echo "<br>";
            monsterAttack(new Ogre("King Ogre"));
            echo "<br>";
        ?>
    </p>
    

</body>
</html>
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
        function sum(int $a, int $b) {
            return $a + $b;
        }

        echo sum(1, 2);
    ?>
    <br>

    <?php
        function getFinalValue(int $value) {
            if ($value >= 90) {
                return 'A';
            } else if ($value >= 80) {
                return 'B';
            } else if ($value >= 70) {
                return 'C';
            } else if ($value >= 60) {
                return 'D';
            } else {
                return 'E';
            }
        }

        echo getFinalValue(92);
        echo ', ';
        echo getFinalValue('84');
        echo ', ';
        echo getFinalValue(66.0);
        echo ', ';
        echo getFinalValue('73');
    ?>
    <br>

    <?php
        function tambah(int $a, int $b) : int {
            return $a + $b;
        }

        echo tambah(12, 23);
        echo ', ';
        echo tambah("22", "33");
    ?>
</body>
</html>
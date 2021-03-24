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
        var $firstName;
        var $lastName;
        var $age;
        var $country;
        var $city;
    }

    $ucok = new Person();
    $ucok->firstName = "Ucok";
    $ucok->lastName = "CJ";
    $ucok->age = 30;
    $ucok->country = "United States";
    $ucok->city = "San Andreas";  
?>
<body>
    <p><?php  echo "Name : {$ucok->firstName} {$ucok->lastName}"; ?></p>
    <p><?php  echo "Age : {$ucok->age}"; ?></p>
    <p><?php  echo "Country : {$ucok->country}"; ?></p>
    <p><?php  echo "City : {$ucok->city}"; ?></p>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: wheat">
    <div style="text-align: center;">
    <?php
    //define with constant

    define("count_Max", 10);

    for($i = 0; $i <= count_Max; $i++){
        echo "$i <br>";
    }

    ?>
    </div>

      <h3 style="color: brown">===========================================================================================</h3>

    <?php

    //including files
    echo "<br>";
    include_once("hello.php");
    //include();

    ?>
    <p><b>This is also a seperate type of files<br></b></p>
      <h3 style="color: brown">===========================================================================================</h3>
    <?php
    require_once("module2.php");
    //require();

    ?>
    <h3 style="color: brown">===========================================================================================</h3>
    <?php
    //Math functions
    echo rand(1, 20); //random numbers
    echo "<br>" . ceil(3.99); //rounded number
    echo "<br>" . floor(3.99);
    $trial = array(1, 2, 3, 4, 5, 6, 7);

    echo "<br>" . min($trial); // minimum number
    echo "<br>" . max($trial); // maximum number

    $sarap = 548123123.45;

    echo "<br>" . number_format($sarap, 2);

    ?>
    <h3 style="color: brown">===========================================================================================</h3>
    <?php

    //Array Manipulation
    $coke = 89.11;
    unset($coke);
    
    $names = "gengeng, gonggong, yowyow, mamamo";
    $arr = explode(",", $names);

    foreach($arr as $polo){
        echo "<br>" . $polo;
    }


    ?>
</body>
</html>
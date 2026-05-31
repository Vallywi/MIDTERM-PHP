<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = 100;
        //post-increment
        echo $x++ . "<br>";
        //pre-increment
        $y = 100;
        echo ++$y . "<br>";


        $z = 100;

        //post-decrement
        echo $z-- . "<br>";

        //pre-decrement
        echo --$z . "<br>";

        //Trying Ternary Operations
        $x = 18;

        echo ($x > 17) ? "True" : "False";

    

        //Ternary Operations 2

        $score = 80;

        $result = ($score < 80) ? "You are excellent student!!" : "You need to study more";
       
        echo "<br>". $result . "<br>";

        //trying else-else-if php

        $weight = 24;

        if($weight > 50){
            echo "You need a diet";
        }
        elseif($weight < 50 && $weight > 41){
            echo "You need to eat more";
        }
        elseif($weight < 40 && $weight > 31){
            echo "You need to try all of it";
        }
        elseif($weight < 30 && $weight > 21){
            echo "I love you HAHAHHA";
        }
        else{
            echo "ama ko";
        }

        //will try a nested loop

        $num21 = 5;

        if($num21 >= 18){
            if($num21 % 2 == 0){
                echo "<br>even";
            }else{
                echo "<br>odd";
            }
        }else{
            echo " <br> Your kid is underage";
        }

        //switch statement case naman HAHAHA
        $month = 3;

        switch($month){
            case 1:
                echo "<br>It still a chick";
                break;
            case 2:
                echo "<br> It is growing up";
                break;
            case 3:
                echo "<br> Its a chicken na, you can cook it na";
                break;
            default:
                echo "<br> I think its too old enough or wrong inputted number for checking";
        }

                echo "<br>";
        //Looping for A New Year Count Down
        $countdown = 10;
        while($countdown > 0){
            echo "$countdown" . "<br>";
            $countdown--;
        }

        echo "Happy New Year!!";
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>This is module 3 HAHAHA</title>
</head>
<body>
    <?php
    
    //MODULE 3 ARRAY v (One dimensional Array)
    $fruit = array("Banana", "apple", "Orage");

    for($i = 0; $i < count($fruit);$i++){
        echo $fruit[$i] . "<br>";
    }


        echo $fruit[0];


        echo "<br>";

        //with print_r
        print_r($fruit);
        echo "<br>";


        //with var_dump
        var_dump($fruit);  

        //foreach loop functionality
          echo "<br>";
        $num = array(1, 2, 3, 10, 11, 9);

        foreach($num as $value){
            echo $value. "<br>";
        }

        $name20 = array("Anna", "Lisa", "Edgar", "Marie");

        foreach($name20 as $gofa){
            echo "<br> $gofa";
        }

        

        //just try using an array

        $num9 = array(2, 3, 5, 8, 10, 3, 11);
        $total = 0;
        for($i = 0; $i < count($num9); $i++){
        $total += $num9[$i];
        }

        echo "<br> $total";

        //Associate Arrays in a Key
         echo "<br>";
        $person = array(
        "First Name" => "Peter Pan",
        "Second Name" => "Kris Aquino",
        "Third Name" => "Wally Bayola",
        );

        echo $person['First Name'];

        echo "<br>";

        $family = array(
        "1" => "Papa",
        "2" => "Mama",
        "3" => "Bunso",
        "4" => "at ako"
        );
        
        echo "<br>".$family[1];
        echo "<br>";
        foreach($family as $pkey => $value){
            echo "$value <br>";
        }

        //Multi-dimensional Array
        $hiring = array(
        "Software Engineer" => array(
                "Person Name" => "Vallirie",
                "Age" => "21 yrs old",
                "Gender" => "Tomboy"
            ),
        "IT Consultant" => array(
            "Name" => "Zarrah",
            "Age" => "20",
            "Gender" => "Female"
        )
        );

        ksort($hiring);

        foreach($hiring as $key => $value){
            echo $key . "<br>";
        }

        echo $hiring['Software Engineer']['Person Name'];

        //sorting 

        $potato = array("Debby", "Ana", "Mona", "Liza");
        echo "<br>" . gettype($potato);
        rsort($potato);

        echo "<br><br>";
        foreach($potato as $masarap){
            echo "$masarap <br>";
        }


        //with a function

        function trial(){
            echo "<br>Ayoko na mag aral HAHAHAH";
        };

        trial();

        function addition($a, $b, $c){
            echo "<br>". $a + $b + $c;
        }

        addition(2, 5, 7);

        //function with return

        function comeback($a, $b){
            return $a * $b;
        }

        echo "<br>". comeback(5, 2);


        //function that the global is outside

        $message = "This is just a message for anyone and for me also";

        function mention(){
            global $message;
            echo "<br>" . $message;
        }

        mention();

        $a = $b = 10;

        function hehe(){
            global $a, $b;
            echo "<br>" . $a +$b;
        }

        hehe();


        //function with static
        function hello($numa){
            static $count = 0;
            $count += $numa;
            echo "<br>". $count;
        }
        
        hello(4);
        hello(20);
        hello(8);
    ?>

</body>
</html>
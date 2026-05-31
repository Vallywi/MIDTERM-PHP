<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php                                                                               
       echo "Hello World <br>";  
        $arr_list[0] = 0;
        $arr_list[1] = 2;


        for($i = 0; $i < count($arr_list);$i++){
            echo $arr_list[$i] . "<br>";
        }


        $name = 1.4;

        var_dump($name);


          echo "<br>";
        $mama = "jerryy";

        var_dump(is_numeric($mama));

        $z = (int)9.99;

        echo "<br> $z <br>";


        $y = 10.11;

        if(is_integer($y)){
            echo "True";
        }else{
            echo "false";
        }

        echo "<br>" . gettype($y);


        //settype() functionality

        $coin = "25";

        echo "<br>".  gettype($coin);

        settype($coin, "Float");

        echo "<br>" . gettype($coin);

        echo "<br>$coin";
       
    ?>

</body>
</html>
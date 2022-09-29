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
    print "<h4> Exercise 1 </h4>";

    $first = "Twinkle, Twinkle little star";

    $txt = "Twinkle";
    $txt1 = "\tstar";
    
    $third = "\tRinkle";
    $fourth = "dimple";

    echo $first . "<br>" . "<br>";
    echo $txt;
    echo $third. "<br>" ;
    echo $fourth;
    echo $txt1. "<br>" . "<br>" ;

?>
    <?php 
        print "<h4> Exercise 2 </h4>";
        $x=10;
        $y=7;

        $txt2 = "10 + 7 = "; $sum = $x + $y;
        $txt3 = "10 - 7 = "; $difference = $x - $y;
        $txt4 = "10 * 7 = "; $product = $x * $y;
        $txt5 = "10 / 7 = "; $quotient = $x / $y;
        $txt6 = "10 % 7 = "; $modulo = $x % $y;
        
        echo $txt2 ;
        echo $sum. "<br>";
        echo $txt3;
        echo $difference. "<br>";
        echo $txt4;
        echo $product. "<br>";
        echo $txt5;
        echo $quotient. "<br>";
        echo $txt6;
        echo $modulo;
    ?>
    <?php 
        print "<h4> Exercise 3 </h4>";
        $num = 8;


        $val1 = "Value is now "; $num;
        $val2 = "Add 2. Value is now "; $add = $num +2;
        $val3 = "Subtract 4. Value is now "; $Subtract = $add - 4;
        $val4 = "Multiply by 5. Value is now "; $Multiply = $Subtract * 5;
        $val5 = "Divide by 3. Value is now "; $Divide = $Multiply / 3;
        $val6 = "Increment value by one. Value is now "; $Increment = $Divide +1;
        $val7 = "Decrement value by one. Value is now "; $Decrement = $Increment -1;
        

        echo $val1;
        echo $num . "<br>";
        echo $val2;
        echo $add. "<br>";
        echo $val3;
        echo $Subtract. "<br>";
        echo $val4;
        echo $Multiply. "<br>";
        echo $val5;
        echo $Divide. "<br>";
        echo $val6;
        echo $Increment. "<br>";
        echo $val7;
        echo $Decrement. "<br>";

    
    ?>

        <?php print "<h4> Exercise 4 </h4>"; 

        $name = "Harry";
        $num = 28;
        $a = NULL;
        
        
        var_dump($name);
        echo "<br>";
        echo $name;
        echo "<br>";
        var_dump($num);
        echo "<br>";
        var_dump($a);


    
    ?>


</body>
</html>
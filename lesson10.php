<?php
    function cutTree($a, $b, $c, $d) {
        echo"he cut $a and $b <br>";
        echo"but plant for $c and $d <br>";
        echo "<br>";
    }

    cutTree("mango tree", "Orange tree", "Apple tree", "mangosteam tree");
    cutTree("coconut tree","Custus plant", "Durian tree", "Banna tree");
    cutTree("grass","dry grass", "carrot", "potatoe");
?>
<hr>
<?php

    function sum($a, $b) {
        echo $a+$b."<br>";
    }

    sum(2,2);
    sum(2,3);
    sum(2,4);

?>
<hr>
<?php

    $val = "welcome";
    $essay = "Hello how are you?";

    echo str_repeat($val, 3)."<br>";

    echo str_replace("e","@", $val)."<br>";
    
    echo "<hr>";

    echo str_word_count($essay)."<br>";
    if (str_word_count($essay) <500) {
        $words = 500 - str_word_count($essay);
        echo"you need $words words to finish this essay!";
    }

    echo "<hr>";

    $str = "welcome to the world of php";
    echo substr($str,8,6)."<br>";       // ($str, no._to_substr, no._to_show)
    echo substr($str,15,5)."<br>";

    echo "<hr>";

    $num = 19.70000;
    echo abs($num)."<br>";
    echo ceil($num)."<br>";
    echo floor($num)."<br>";

    echo "<hr>";

    echo pow(4,2)."<br>";

    echo "<hr>";

    echo rand(1, 99)."<br>";

?>

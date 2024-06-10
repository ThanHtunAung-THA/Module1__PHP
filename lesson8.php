<?php
    $a = ["Hotpot","Hotdog","Pizza","Burger","Coconut"];
    echo $a[2]."<br>";
    echo $a[count($a)-1]."<br>";

    // Looping
    for($i=0; count($a)>$i; $i++){
        echo $a[$i]."<br>";
    }

    $drink = ["cola","max+","beer","water","juice"];

    for($j = 0;$j < count($drink); $j+=2){
        echo $drink[$j]."<br>";
    }

    foreach($drink as $r){
        echo "$r <br>";
    }
?>

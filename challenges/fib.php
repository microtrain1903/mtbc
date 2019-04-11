<?php
//displays a Fibonacci upto 144
$a=1;
$b=0;
$x=null;
for($i=0; $x<144; $i++){
    
    $x=($a+$b);
    //echo $b>0?"{$x}<br>":null;
    echo "{$x}<br>";
    $a=$b;
    $b=$x;
}
<?php

echo " First 10 Fibonacci series And break when is greater then 100 :"."<br>";
function fibonacci(int $n) {
    $n1 = 0;
    $n2 = 1;
    echo $n1;
    echo "<br>";
    echo $n2;
    
    for($i = 3; $i <= $n; $i++) { 
        $n3 = $n1 + $n2;

        if ($n3 > 100) {
            break;
        }

        echo "<br>";
        echo $n3;
        $n1 = $n2;
        $n2 = $n3;
    }
}
fibonacci(10);
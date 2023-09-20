<?php

echo "Fibonacci Series :"."<br>";
function fibonacci(int $n) {
    $n1 = 0;
    $n2 = 1;
    echo $n1;
    echo "<br>";
    echo $n2;
    
    for($i = 3; $i <= $n; $i++) { 
        $n3 = $n1 + $n2;
        echo "<br>";
        echo $n3;
        $n1 = $n2;
        $n2 = $n3;
    }
}
fibonacci(15);


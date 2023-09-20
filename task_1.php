<?php
//Used For-Loop:
function even1(int $n){
    echo "Using For Loop:"."<br>";
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 2 == 0) {
            echo  $i . "<br>";
        }
    }
}
even1(20);

//Used for While-Loop:
echo "<br>";
    function even2(int $n) {
        echo "Using While-Loop:"."<br>";
        $i = 1;
        while ($i <= $n) {
            if ($i % 2 == 0) {
                echo $i . "<br>";
            }
            $i++;
        }
    }
    
    even2(20);
    
    //Used for Do-While-Loop:
        echo "<br>";
        function even3(int $n) {
            echo "Using Do-While Loop:" . "<br>";
            $i = 1;
            do {
                if ($i % 2 == 0) {
                    echo $i . "<br>";
                }
                $i++;
            } while ($i <= $n);
        }
        
        even3(20);
        

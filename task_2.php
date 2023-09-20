<?php
echo "Skip number 5 :"."<br>";
for ($i=1; $i <=50 ; $i++) { 
    if ($i==5) {
        continue;
    }
    echo $i ." ";
}
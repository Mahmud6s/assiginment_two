<?php
echo "Skip multiple 5 :" . "<br>";
for ($i = 1; $i <= 50; $i++) {
    if ($i % 5 == 0) {
        continue;
    }
    echo $i . " ";
}

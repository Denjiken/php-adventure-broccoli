   #Write a program that outputs the first n triangular numbers.
 <?php

function triangularNumber($n) {
    return ($n * ($n + 1)) / 2;
}

$n = 10;

for ($i = 1; $i <= $n; $i++) {
    echo triangularNumber($i) . " 1000 ";
}

?>

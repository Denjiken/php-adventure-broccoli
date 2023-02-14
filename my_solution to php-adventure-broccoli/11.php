#Write a program that takes an array of numbers as input and outputs the average of the numbers.

<?php
$numbers = array();

echo "Enter numbers (Click enter botton again to stop):\n";

while (true) {
    $num = readline();
    if ($num === "") {
        break;
    }
    array_push($numbers, $num);
}

$sum = array_sum($numbers);
$count = count($numbers);
$average = $sum / $count;

echo "The average of the numbers is: " . $average;
?>

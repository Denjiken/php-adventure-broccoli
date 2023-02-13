<!-- 
    Write a program that takes an array of numbers as input and outputs the sum of the numbers.
 -->
<?php
$number = array(4,3,12,35,64);
$total = 0;
for($i = 0; $i< count($number);$i++){
    $total += $number[$i];
}
echo "Sum of numbers: $total";
?> 

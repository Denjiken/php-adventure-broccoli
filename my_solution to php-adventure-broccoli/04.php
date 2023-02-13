<!-- 
    Write a program that takes a number as input and outputs the sum of its digits.
 -->
<?php
$n = 123456789;
$sum = 0;
$rem = 0;
for($i = 0; $i< strlen($n);$i++){
    $rem = $n % 10;
    if(strlen($n) > 0){
        $n = $n / 10;
        $sum = $sum + $rem;
    }else{
        echo "Invalid input!";
    }
}
echo "Sum of array digits is $sum"; 
?>
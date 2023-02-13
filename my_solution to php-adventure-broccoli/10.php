  #Write a program that takes an array of numbers as input and outputs the median of the numbers.
 
<?php

function median($arr) {
    sort($arr);
    $count = count($arr);
    $mid = floor($count / 2);
    if ($count % 2 == 0) {
      return ($arr[$mid - 1] + $arr[$mid]) / 2;
    } else {
      return $arr[$mid];
    }
  }
  
  $numbers = array(1, 2, 3, 4, 5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24);
  $median = median($numbers);
  
  echo "The median for this number is: $median";
  
  ?>
  
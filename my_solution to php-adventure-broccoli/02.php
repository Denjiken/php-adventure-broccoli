# Write a program that takes a string as input and outputs whether it is a palindrome.
<?php

$string = 'dad';

$rvstring = strrev($string);
if ($rvstring == $string){
    echo "Your string ". $string. " is a Palindrome";
}
else{
    echo "Your string ". $string. " is not a Palindrome";
}


?>
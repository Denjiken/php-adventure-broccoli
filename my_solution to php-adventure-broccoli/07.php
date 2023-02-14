 
#Write a program that takes an array of strings as input and outputs the longest string in the array.

<?php
$strings = array();

echo "Enter strings (double click enter to stop):\n";

while (true) {
    $string = readline();
    if ($string === "") {
        break;
    }
    array_push($strings, $string);
}

$longest_string = "";
foreach ($strings as $string) {
    if (strlen($string) > strlen($longest_string)) {
        $longest_string = $string;
    }
}

echo "The longest string in the array is: " . $longest_string;
?>

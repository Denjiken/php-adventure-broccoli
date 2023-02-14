#Write a program that takes a string as input and outputs the frequency of each character in the string.

<?php
$string = readline("Pls enter a string: ");
$char_count = array();

for ($i = 0; $i < strlen($string); $i++) {
    $char = $string[$i];
    if (isset($char_count[$char])) {
        $char_count[$char]++;
    } else {
        $char_count[$char] = 1;
    }
}

echo "Frequency of characters: \n";
foreach ($char_count as $char => $count) {
    echo $char . ": " . $count . "\n";
}
?>
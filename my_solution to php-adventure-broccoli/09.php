#Write a program that takes a string as input and outputs the string with all vowels removed.

<?php
$string = readline("Enter a string: ");
$str_vowels = array("a", "e", "i", "o", "u");

$new_string = "";
for ($i = 0; $i < strlen($string); $i++) {
    $char = $string[$i];
    if (!in_array(strtolower($char), $str_vowels)) {
        $new_string .= $char;
    }
}

echo "String with vowels removed: " . $new_string;
?>

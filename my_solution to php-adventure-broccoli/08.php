# Write a program that takes a string as input and outputs the number of words in the string.

<?php
function string_wordCount($str){
    $str_count = 1;
    $count = strlen($str);
    for($i = 0; $i<$count;$i++)
    {
        if($str[$i] == ' ' || ctype_alpha($str))
        {
           $str_count++;
        }
    }
    echo "Number of words: ".$str_count; 
}

$str = "string words count. ";
echo "Words in the string: $str" . "";

string_wordCount($str);
?>
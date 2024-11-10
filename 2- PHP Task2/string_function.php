<?php 
// 1. Write a PHP script to find the first character that is different between two strings.  
// String1 : 'dragonball' 
// String2 : 'dragonboll' 
// Expected Result : First difference between two strings at position 7: "a" vs "o" 

    echo "<h3>1. Write a PHP script to find the first character that is different between two strings.</h3>";
    $string1 = 'dragonball' ;
    $string2 = 'dragonboll' ;
    $str_pos = strspn($string1 ^ $string2 , "\0");
    printf('First difference between two strings at position %d: "%s" vs "%s"',
    $str_pos, $string1[$str_pos], $string2[$str_pos]);
    printf("\n");
?>



<!-- 1) Write a PHP script to check if the inserted number is a prime number
Sample Input: 3
Expected Output: 3 is a prime number -->

<?php
    echo "<h3> 1) Write a PHP script to check if the inserted number is a prime number </h3>";
    // Function to check if a number is prime
    function isPrime($number) {
        // 0 and 1 are not prime numbers
        if ($number <= 1) {
            return false;
        }

        // Check divisibility from 2 to the square root of the number
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false; // Not a prime number
            }
        }

        return true; // Prime number
    }

    // Sample input
    $input =3;

    // Check if the input is a prime number
    if (isPrime($input)) {
        echo "$input is a prime number";
    } else {
        echo "$input is not a prime number";
    }
?>

<!-- ---------------------------------------------------------------------------------- -->
<!-- 2) Write a PHP script to reverse a string
Sample Input: remove
Expected Output: evomer  -->

<?php
    echo "<h3> 2) Write a PHP script to reverse a string </h3>";

    function reverse_string($word){
        echo strrev($word);
    }

    reverse_string("remove");
?>

<!-- ---------------------------------------------------------------------------------- -->
<!-- 3) Write a PHP function to swap to variables
Sample Input: x = 12 y= 10
Expected Output: y=12 x=10 -->

<?php
    echo "<h3> 3) Write a PHP function to swap to variables </h3>";

    function swap_variable($var1 , $var2){
        $swap = $var1; // 12
        $var1 = $var2; // 10
        $var2 = $swap;
        echo "var2=$var2 ---------- var1=$var1";  
    }

    swap_variable(12 , 10);

?>

<!-- ---------------------------------------------------------------------------------- -->
<!-- 4. Write a PHP function to check if a number is an Armstrong number or not ?
**Armstrong number is a number that is equal to the sum of cubes of its digits.
Sample Input: 407
Expected Output: 407 is Armstrong Number  -->

<?php
    echo "<h3> 4) Write a PHP function to check if a number is an Armstrong number or not  </h3>";
    
    function armstrong_nubmer($number){
        $digits = str_split($number);
        $sum = 0;
        foreach($digits as $digit){
            $sum += pow($digit,3);
        }

        if($sum == $number){
            echo "the number $number is Armstrong number";
        }

        else {
            echo "the number $number is Not Armstrong number";
        }
    }

    armstrong_nubmer(407);

?>

<!-- ---------------------------------------------------------------------------------- -->
<!-- 5) Write a PHP function that checks whether a passed string is a palindrome or not?
Sample Input: Eva, can I see bees in a cave?
Expected Output: Yes it is a palindrome  -->

<?php
    echo " <h3> 5) Write a PHP function that checks whether a passed string is a palindrome or not </h3>";
    // Function to check if a string is a palindrome
    function isPalindrome($string) {
        // Remove spaces, punctuation, and convert to lowercase
        $cleanedString = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $string));
        
        // Reverse the cleaned string
        $reversedString = strrev($cleanedString);
        
        // Check if the cleaned string is equal to its reversed version
        if ($cleanedString == $reversedString) {
            return true; // It's a palindrome
        } else {
            return false; // It's not a palindrome
        }
    }

    // Sample input
    $input = "Eva, can I see bees in a cave?";

    // Check if the input string is a palindrome
    if (isPalindrome($input)) {
        echo "Yes, it is a palindrome";
    } else {
        echo "No, it is not a palindrome";
    }
?>

<!-- ---------------------------------------------------------------------------------- -->
<!-- 6. Write a PHP function to remove duplicates from an array ?
Sample Input:
$array1 = array(2, 4, 7, 4, 8, 4);
Expected Output:
$array1 = array(2, 4, 7, 8);  -->

<?php 
    echo "<h3> 6) Write a PHP function to remove duplicates from an array </h3>";
    function remove_duplicat($arr){
        $arr_unique = array_unique($arr);
        foreach($arr_unique as $arr_value){
            
            echo "$arr_value , ";
        }  
    }
    $numbers = array(2, 4, 7, 4, 8, 4);
    remove_duplicat($numbers);
    
?>





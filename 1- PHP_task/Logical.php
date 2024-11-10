<!-- 1. Write PHP to check if the sum of the two given numbers equals 30, if the condition is true the return 
their sum otherwise return false
Sample Input: [ firstInteger => 10 , secondInteger => 10]
Sample Output: ‘false’ -->

<?php 
    echo "<h3> 1) Write PHP to check if the sum of the two given numbers equals 30, if the condition is true the return 
            their sum otherwise return false </h3>";
    function sum($number1 , $number2){
        if($number1 + $number2 == 30){
            return $number1 + $number2;
        }
        else {
            return "false";
        }
    }

    echo sum(10,20);

?>

<!-- ---------------------------------------------------------------------------------- -->
<!-- 2. Write in PHP script to check if the given positive number is a multiple of 3.
Sample Input: number = 20
Sample Output: ‘false’ -->
<?php 
    echo "<h3> 2) Write in PHP script to check if the given positive number is a multiple of 3 </h3>";
    function postive_number_multiple_three($number){
        if($number>=1 && $number%3==0){
            return "the $number is multiple of 3" ;
        }
        else {
            return "the $number is not multiple of 3";
        }
    }

    echo postive_number_multiple_three(20);
?>

<!-- ---------------------------------------------------------------------------------- -->
<!-- 3. Write a PHP script to check if the integer value is in the range of [20-50] inclusive.
Sample Input: number = 50
Sample Output: ‘true’  -->

<?php
    echo "<h3> 3) Write a PHP script to check if the integer value is in the range of [20-50] inclusive </h3>";
    function range_number($number){
        if($number>=20 && $number<=50){
            return "the $number in the range [20 - 50] ";
        }
        else {
            return "the $number in not the range [20 - 50]";
        }
    }
    echo range_number(50);
?>

<!-- ---------------------------------------------------------------------------------- -->
<!-- 4. Write PHP script to find the largest number between the three integers
Sample Input: [ 1, 5, 9 ]
Sample Output: 9 -->

<?php
    echo "<h3> 4) Write PHP script to find the largest number between the three integers </h3>";
    function largest_number($numbers){
        return max($numbers);
    }

    $num = array(1 , 5 , 9);
    echo largest_number($num);
?>

<!-- ---------------------------------------------------------------------------------- -->
<!-- 5. Write PHP script to calculate the monthly electricity bill according to these rules
a. For first 50 units – 2.50 JOD/Unit
b. For next 100 units – 5.00 JOD/Unit
c. For next 100 units – 6.20 JOD/Unit
d. For units above 250 – 7.50 JOD/Unit 
  -->

<?php
    echo "<h3> 5) Write PHP script to calculate the monthly electricity bill according to these rules </h3> ";
    function calculate_monthly_electricity($unit){
        $bill = 0;
        if($unit <= 50){
            $bill = $unit * 2.50;
        }
        else if($unit >= 51 && $unit <=150){
            $bill = $unit * 5;
        }
        else if($unit >= 151 && $unit <=250){
            $bill = $unit * 6.20;
        }
        else{
            $bill = $unit * 7.5;
        }
        return $bill;
    }

    echo calculate_monthly_electricity(50);
?>

<!-- ---------------------------------------------------------------------------------- -->
<!-- 6. Write php script to make a calculator, the calculator should contain the four main operations
e. Addition
e. Subtraction
e. Multiplication
e. Division  -->

<?php
    echo "<h3> 6) Write php script to make a calculator, the calculator should contain the four main operations </h3>" ;
    function calculator($num1 , $operation ,$num2){
        if($operation == "+"){
            return $num1 + $num2;
        }
        else if ($operation == "-"){
            return $num1 - $num2;
        }
        else if ($operation == "*"){
            return $num1 * $num2;
        }
        else if ($operation == "/"){
            return $num1 / $num2;
        }
        else {
            return "choose the +  -  *  /";
        }

    }   

    echo calculator(5,"/",5);
?>

<!-- ---------------------------------------------------------------------------------- -->
<!-- 7. Write php script to check if a person is eligible to vote, minimum age required for voting is 18.
Sample Input: 15
Sample Output: ‘is no eligible to vote’ -->

<?php
    echo "<h3> 7) Write php script to check if a person is eligible to vote, minimum age required for voting is 18.</h3>";
    function eligible_vote($age){
        if($age >= 18){
            return " eligible to vote";
        }

        else {
            return "is no eligible to vote";
        }
    }

    echo eligible_vote(15);
?>

<!-- ---------------------------------------------------------------------------------- -->
<!-- 8. Write php script to check whether a number is positive, negative or zero
Sample Input: -60
Sample Output: ‘Negative’ -->

<?php
    echo "<h3> 8) Write php script to check whether a number is positive, negative or zero </h3>";
    function check_number($number){
        if($number>0){
            return "the $number is postive";
        }
        else if ($number == 0){
            return "the $number is Zero ";
        }
        else if ($number < 0 ){
            return "the $number is negative";
        }
    }

    echo check_number(-60);  
?>

<!-- ---------------------------------------------------------------------------------- -->
<!-- 9. Write a PHP to find the grade for the student, after calculating the average of his score in all the 
subject
Sample Inputs: [60,86,95,63,55,74,79,62,50]
Sample Output: ‘D’  -->

<?php
    echo "<h3> 9) Write a PHP to find the grade for the student, after calculating the average of his score in all the 
    subject </h3>";

    function average($marks){
        $sum = array_sum($marks);
        $counter = count($marks);
        $average = $sum / $counter;

        if($average < 60){
            return "F";
        }
        else if($average <70){
            return "D";
        }
        else if($average <80){
            return "C";
        }
        else if($average <90){
            return "B";
        }
        else if($average <100){
            return "A";
        }
    }

    $marks = array(60,86,95,63,55,74,79,62,50);
    echo average($marks);

?>



 

<!-- 1. Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no dash (-) at the 
start and end position.
Expected Output: 1-2-3-4-5-6-7-8-9-10 -->

<?php 
    echo "<h3> 1) Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no dash (-) at the 
    start and end position. </h3>";
    for ($i=1; $i<=10; $i++ ){
        echo "$i";
        if ($i < 10){
            echo "-";
        }
    }

?>

<!-- ---------------------------------------------------------------------------------- -->
<!-- 2. Create a script using a for loop to add all the integers between 0 and 30 and display the total.
Expected Output: total as a number  -->

<?php 
    echo "<h3> 2) Create a script using a for loop to add all the integers between 0 and 30 and display the total.
    Expected Output: total as a number </h3>";
    $sum = 0;
    for ($i=0; $i<=30; $i++){
        $sum += $i;
    }
    echo "the total number is = $sum";

?>

<!-- ---------------------------------------------------------------------------------- -->
<!-- 3) Create a script to generate the following pattern, using the nested for loop. -->

<?php 
    echo "<h3> 3) Create a script to generate the following pattern, using the nested for loop. </h3>";
    // Outer loop to handle the rows
    for ($i = 0; $i < 5; $i++) {
        // Inner loop to handle the columns
        for ($j = 0; $j < 5; $j++) {
            // Determine which letter to print
            if ($j < 4 - $i) {
                echo "A";
            } else {
                echo chr(65 + $i); // Print the changing letter based on the row
            }
        }
        // New line after each row
        echo "<br>";
    }
?>
 
<!-- ---------------------------------------------------------------------------------- -->
<!-- 4. Create a script to generate the following pattern, using the nested for loop. -->

<?php
    echo "<h3> 4) Create a script to generate the following pattern, using the nested for loop. </h3>";
    for($i=0; $i<5; $i++){
        for($j=0; $j<5; $j++){
            if($j < 4 - $i){
                echo 1;
            }
            else {
                echo (1+$i);
            }
        }
        echo "<br>";
    }
?>

<!-- ---------------------------------------------------------------------------------- -->
<!-- 5. Create a script to generate the following pattern, using the nested for loop  -->

<?php 
    echo "<h3> 5) Create a script to generate the following pattern, using the nested for loop </h3>";
    for ($i=1; $i<6; $i++){
        for($j=1; $j<6; $j++){
            if($j == $i){
                echo $i;
                continue;
            }
            echo 0;
        }
        echo "<br>";
    }
?>

<!-- ---------------------------------------------------------------------------------- -->
<!-- 6. Write a program to calculate and print the factorial of a number using a for loop. The factorial of 
a number is the product of all integers up to and including that number.
Sample Input: 5
Expected Output: 120 -->

<?php
    echo "<h3> 6) Write a program to calculate and print the factorial of a number using a for loop. The factorial of 
    a number is the product of all integers up to and including that number. </h3>";
    $number = 5;
    $factorial = 1;
    for($i=1; $i<=$number; $i++){
        $factorial *= $i; 
    }
    echo $factorial;
?>

<!-- ---------------------------------------------------------------------------------- -->
<!-- 7. Write a PHP script that creates the following table using for loops. Add cellpadding="3px" and 
cell spacing="0px" to the table tag.  -->


<?php
    echo "<h3> 7) Write a PHP script that creates the following table using for loops. to the table tag </h3>";
    echo "<table border=1 style= 'padding:10px ; border-spacing:10px'>";
    for($i=1; $i<7; $i++){
        echo "<tr> </tr>";
        for($j=1; $j<6; $j++){
            echo "<td>"."$i*$j=".$i*$j."</td>";
        }
       
    }

    echo "</table>";
?>
<!-- 1) Write a PHP script that will display the colors as unordered list :  -->
<?php
    $colors = array('white' , 'green' , 'red');
        echo " <h3> 1) Write a PHP script that will display the colors as unordered list :  </h3>";
        echo "<ul>";
            foreach($colors as $color){
                
                echo "<li> $color </li>" ;
                
            }
        echo "</ul>";
    
?>

<!-- ---------------------------------------------------------------------------------- -->
<!-- 2. Create a PHP script to displays the capital and country name from the above array $cities. Sort the list 
    by the capital of the country. -->
<?php
    

    $cities= array( 
        "Italy"=>"Rome",
        "Luxembourg"=>"Luxembourg",
        "Belgium"=> "Brussels", 
        "Denmark"=>"Copenhagen",
        "Finland"=>"Helsinki", 
        "France" => "Paris", 
        "Slovakia"=>"Bratislava", 
        "Slovenia"=>"Ljubljana",
        "Germany" => "Berlin", 
        "Greece" => "Athens",
        "Ireland"=>"Dublin", 
        "Netherlands"=>"Amsterdam", 
        "Portugal"=>"Lisbon", 
        "Spain"=>"Madrid" 
);
    echo " <h3> 2) Create a PHP script to displays the capital and country name from the above array cities. Sort the list 
    by the capital of the country. </h3>";

    asort($cities); // sort associative arrays in ascending order, according to the (value)

    foreach($cities as $city => $capital){
        echo "<h4 style = font-weight:200> The Capital of $city is $capital </h4> ";
    }

?>

<!-- ---------------------------------------------------------------------------------- -->
<!-- 3) Write a PHP script to display the first element of the above array.-->
<?php 
    $color = array (4 => 'white' , 6 => 'green' , 11 => 'red');
    echo " <h3> 3) Write a PHP script to display the first element of the above array.";

    echo ("<h4 style = font-weight:200>".reset($color)."</h4>"); 
    // reset(): The reset() function moves the internal pointer to the first element of the array.
?>

<!-- ---------------------------------------------------------------------------------- -->
<!-- 4) Write a PHP script that inserts a specific new item in an array in any position.  
    Sample Input:
    Array 1 2 3 4 5 
    Location: 4
    New Item: $
    Expected Output: 1 2 3 $ 4 5-->

    <?php
        echo "<h3> 4) Write a PHP script that inserts a specific new item in an array in any position. </h3>";
        $numbers = array(1 , 2 , 3 , 4 , 5);
        $location = 4;
        $new_item = "$";
        array_splice($numbers , $location - 1 , 0 ,$new_item);
        echo implode(" " , $numbers);
       echo "<br><br>"
    ?>

<!-- ---------------------------------------------------------------------------------- -->    
<!-- 5. Write a PHP script to sort the following associative array depending on the key value [asc] :
Sample Input: 
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
Expected Output:
c = apple
b = banana
d = lemon
a = orange -->

<?php 
    echo "<h3> 5) Write a PHP script to sort the following associative array depending on the key value [asc] :  </h3>";
    $fruits = array(
     "d" => "lemon",
     "a" => "orange", 
     "b" => "banana", 
     "c" => "apple"
    );

    asort($fruits);
    foreach($fruits as $char => $fruit){
        echo "<h4 style= font-weight:200> $char = $fruit </h4>";
    }

     
?>

<!-- ---------------------------------------------------------------------------------- -->
<!-- 6. Write a PHP script to calculate and display the average temperature for the recorded reads, also the 
script should display the list of the five lowest and the five highest temperatures 
Sample Input: 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 
65, 64, 68, 73, 75, 79, 73
Expected Output:
Average Temperature is: 70.6
List of seven lowest temperatures: 60, 62, 63, 63, 64,
List of seven highest temperatures: 76, 78, 79, 81, 85, -->

<?php 
    echo "<h3> 6) Write a PHP script to calculate and display the average temperature for the recorded reads, also the 
    script should display the list of the five lowest and the five highest temperatures </h3>";
    $temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 
    65, 64, 68, 73, 75, 79, 73);
    $count = count($temperatures); // number item in array
    $sum = array_sum($temperatures); // sum all item in array
    $average = $sum / $count;

    $sort = sort($temperatures); // sort item ass
    $seven_lowest_temeratures = array_slice($temperatures , 0 , 8);
    $seven_highest_temeratures= array_slice($temperatures , -7 , 8);
    

    
    echo "Average Temperature is:" . $average . "<br><br>";

    echo "List of seven lowest temperatures:" .implode("  ", $seven_lowest_temeratures) . "<br><br>";
    echo "List of seven highest temperatrures:" .implode("  ",$seven_highest_temeratures); "<br><br>";

?>

<!-- ---------------------------------------------------------------------------------- -->
<!-- 7) Write a PHP program to merge the following two arrays.
Sample Input: 
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
Expected Output:
Array
(
 [color] => green
 [0] => 2
 [1] => 4
 [2] => a
 [3] => b
 [shape] => trapezoid
 [4] => 4
) -->

<?php
    echo "<h3> 7) Write a PHP program to merge the following two arrays. </h3> ";
    $array1 = array("color" => "red", 2, 4);
    $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
    $array_merge = array_merge($array1 , $array2);
    echo "<pre>";
    print_r(array_merge($array1 , $array2));
    echo "</pre>";

?>


<!-- ---------------------------------------------------------------------------------- -->
<!-- 8) Write a PHP function to change the following array's and convert all the strings to upper case.
Sample Input:
$colors = array("red","blue", "white","yellow");
Expected Output :
Array
(
 RED
 BLUE
 WHITE
 YELLOW
) -->

<?php
    echo "<h3> 8) Write a PHP function to change the following array's and convert all the strings to upper case </h3>";
    $colors = array("red", "blue" , "white" , "yellow");
    echo "Array <br> ("."<br>";

    foreach($colors as $color){
        
        echo strtoupper($color)  . "<br>";
       
    }  
    echo ")";
?>



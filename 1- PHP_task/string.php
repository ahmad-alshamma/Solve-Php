<!-- 1. Write a PHP script to:
a. Convert the entered string to uppercase.
b. Convert the entered string to lowercase.
c. Make the first letter of the string uppercase.
d. Make the first letter of each word capitalized. -->

<?php 
    echo "<h3>1) Write a PHP script to: </h3>";
    function convert($string_word){
        echo "a. Convert the entered string to uppercase: ".strtoupper($string_word)."<br>";
        echo "b. Convert the entered string to lowercase: ".strtolower($string_word)."<br>";
        echo "c. Make the first letter of the string uppercase: ".ucfirst($string_word)."<br>";
        echo "d. Make the first letter of each word capitalized: ".ucwords($string_word);
    }

    convert("ahmad azzam");
?>

<!-- ---------------------------------------------------------------------------------- -->
<!-- 2. Write a PHP script splitting the following numeric string to be a date format.
Sample Output: '085119'
Expected Output: 08:51:19  -->

<?php
    echo "<h3> 2) Write a PHP script splitting the following numeric string to be a date format. </h3>";
    function splitting($string){
        $part1 = substr($string,0,2);
        $part2 = substr($string,2,2);
        $part3 = substr($string,4,2);

        echo "$part1:$part2:$part3";
    }

    splitting("085119");
?>

<!-- ---------------------------------------------------------------------------------- -->
<!-- 3. Write a PHP script to check whether the sentence contains a specific word.
Sample Output: ‘I am a full stack developer at orange coding academy’
Sample Word: ‘Orange’
Expected Output: ‘Word Found!’  -->

<?php 
    echo "<h3> 3) Write a PHP script to check whether the sentence contains a specific word.</h3>";
    
    $sentence = 'I am a full stack developer at orange coding academy';
    $wordToFind = 'Orange';

    
    if (stripos($sentence, $wordToFind)) {
        echo 'Word Found!'; 
    } else {
        echo 'Word Not Found!';
    }
?>

<!-- ---------------------------------------------------------------------------------- -->
<!-- 4. Write a PHP script to extract the file name from the URL.
Sample Output: 'www.orange.com/index.php'
Expected Output: 'index.php' -->

<?php 
    echo "<h3> 4) Write a PHP script to extract the file name from the URL. </h3>";
    $input = 'www.orange.com/index.php';
    $pate = basename($input);
    echo $pate;
?>

<!-- ---------------------------------------------------------------------------------- -->
<!-- 5. Write a PHP script to extract the username from the following email address.
Sample Output: 'info@orange.com'
Expected Output: 'info'  -->

<?php 
    echo "<h3> 5) Write a PHP script to extract the username from the following email address. </h3>";
        // Given email address
    $email = 'info@orange.com';

    // Extracting the username by splitting the email at the '@' character
    list($username, $domain) = explode('@', $email);

    // Displaying the result
    echo $username; // Expected Output: info
?>

<!-- ---------------------------------------------------------------------------------- -->
<!-- 6. Write a PHP script to get the last three characters from the string.
Sample Output: 'info@orange.com'
Expected Output: 'com'  -->

<?php
    echo "<h3>6) Write a PHP script to get the last three characters from the string.</h3>";
    $input = 'info@orange.com';
    echo (substr($input , -3 , 3));    
?>

<!-- ---------------------------------------------------------------------------------- -->
<!-- 7. Write a PHP script to generate simple random passwords [do not use rand () function] from a 
given string.
Sample Output: '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz'
Expected Output: 254ABCc or h242sfeDAFEe32 -> random number  -->

<?php
    echo "<h3> 7) Write a PHP script to generate simple random passwords [do not use rand () function] from a 
    given string. </h3>";

    function generateRandomPassword($length = 8, $characters = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz') {
        $charactersLength = strlen($characters);
        $randomPassword = '';
    
        // Use random_int for generating a random index
        for ($i = 0; $i < $length; $i++) {
            $randomIndex = random_int(0, $charactersLength - 1);
            $randomPassword .= $characters[$randomIndex];
        }
    
        return $randomPassword;
    }
    
    // Generate and display 5 random passwords of length 8
    for ($i = 0; $i < 5; $i++) {
        echo generateRandomPassword(8) . "\n";
    }
?>

<!-- ---------------------------------------------------------------------------------- -->
<!-- 8) Write a PHP script to replace the first word of the sentence with another word.
Sample Output: 'That new trainee is so genius.'
Sample Word: 'Our'
Expected Result: the new trainee is so genius. -->

<?php
    echo "<h3> 8) Write a PHP script to replace the first word of the sentence with another word. </h3>";
    $input = 'That new trainee is so genius.';
    $word = "the";
    echo str_replace("That" , $word , $input);
?>
 





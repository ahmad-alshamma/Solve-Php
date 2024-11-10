<?php
echo "
    <html>
    <head>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 20px;
            }


            h1 {
                color: #c73f3f;
                text-align: center;
                font-size: 36px;
                margin-bottom: 20px;
            }

            h2 {
                color: #555;
                font-size: 28px;
                margin-bottom: 15px;
            }


            ul {
                list-style-type: none;
                padding: 0;
            }

            li {
                margin: 10px 10px;
            }


            a {
                text-decoration: none;
                color: #007bff;
                font-weight: bold;
                font-size: 18px;
                padding: 10px 15px;
                border-radius: 5px;
                transition: background-color 0.3s ease, color 0.3s ease;
            }

            a:hover {
                background-color: #007bff;
                color: #fff;
            }
        </style>
    </head>
    <body>
        <div class='links-container'>
            <h2>1- PHP task</h2>
            <a href='./1- PHP_task/Array.php'>1- Array</a> <br><br>
            <a href='./1- PHP_task/function.php'>2- Function</a> <br><br>
            <a href='./1- PHP_task/Logical.php'>3- Logical Statements and Operators</a> <br><br>
            <a href='./1- PHP_task/loops.php'>4- Loops</a> <br><br>
            <a href='./1- PHP_task/string.php'>5- String Functions</a> <br><br>
        </div>

        <div class='links-container'>
            <h2>2- PHP Task2</h2>
            <a href='./1- Array/Array.php'>1- Array</a> <br><br>
            <a href='./2- Function/function.php'>2- Function</a> <br><br>
            <a href='./3- Logical Statements and Operators/Logical.php'>3- Logical Statements and Operators</a> <br><br>
            <a href='./4- Loops/loops.php'>4- Loops</a> <br><br>
            <a href='./5- String Functions/string.php'>5- String Functions</a> <br><br>
        </div>
    </body>
    </html>
";
?>
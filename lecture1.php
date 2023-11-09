
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
        echo "My first PHP script!";

        # Case sensitive

        $color = "red";
        echo "My car is " . $color . "<br>";
        echo "My house is " . $COLOR . "<br>";
        echo "My boat is " . $coLOR . "<br>";

        # Single line comment
        // Single line comment
        /*
        Multi line comment
        like this
        */


        #Variable always start with $

        $txt = "Hello world!";
        echo "I love $txt!<br>";
        echo "I love " . $txt . "!<br>";

        $a = 5;
        $b = 10;

        echo $a + $b ."<br>";

        $x = 5; //global    
        function myTest() {
            // using x inside this function will generate an error
            echo "<p>Variable x inside function is: $x</p>";
          }
          myTest();
          
          echo "<p>Variable x outside function is: $x</p>";

          $x = 5;
          $y = 10;
          
          function myTest1() {
            global $x, $y;
            $y = $x + $y;
          }
          
          myTest1();
          echo $y; // outputs 15
          
        /*
        PHP also stores all global variables in an array called $GLOBALS[index]. 
        The index holds the name of the variable.
        This array is also accessible from within functions and can be used to update global variables directly.
        */

        function myTest2() {
            static $x = 0;
            echo "<p>$x</p>";
            $x++;
          }
          
          myTest2();
          myTest2();
          myTest2();


          
    ?>
</body>
</html>

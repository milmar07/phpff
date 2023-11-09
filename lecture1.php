
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

        # PHP DATA TYPES

        #String
        $x = "Hello world!";
        $y = 'Hello world!';
        echo $x;
        echo "<br>";
        echo $y;
        echo "<br>";

        #Integer
        $x = 5985;
        var_dump($x);
        echo "<br>";

        #Float

        $x = 10.365;
        var_dump($x);
        echo "<br>";

        #Boolean
        $t = true;
        $f = false;

        var_dump($t);
        echo "<br>";
        
        var_dump($f);
        echo "<br>";


        #PHP OBJECTS **********************
        class Car {
            public $color;
            public $model;
            public function __construct($color, $model) {
              $this->color = $color;
              $this->model = $model;
            }
            public function meesage() {
                return "My car is a " . $this->color . " " . $this->model . "!";
            }            
        }

        $myCar = new Car("black", "Volvo");
        echo $myCar -> meesage();
        echo "<br>";
        $myCar = new Car("red", "Toyota");
        echo $myCar -> meesage();
        echo "<br>";

        #PHP NULL VALUE
        $x = "Hello world!";
        $x = null;
        var_dump($x);
        echo "<br>";


        #STRING FUNCTIONS *******************
        echo strlen("Hello world!"); // outputs 12
        echo "<br>";
        
    ?>
</body>
</html>


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
    ?>
</body>
</html>

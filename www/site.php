<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>

        <!-- Writing HTML to the document -->
        <?php
            echo("Hello World"); //always end with semicolon
            echo "Also Hello World"; //can use parenthesis & quotes or just quotes
            echo "<h1>Also Hello World</h1>";
        ?>

        <!-- Variables in PHP -->
        <?php
            $characterName = "Buzzcocks"; //variables denoted with $ sign
            $characterAge = 25;

            echo "There once was a gangster named $characterName<br>";
            echo "He was about $characterAge years old<br>";

            $characterName = "Trekka"; //update values stored in variables
            $characterName2 = "Buzzcocks";

            echo "$characterName liked to hang around with $characterName2";
            echo "<br><br>";
        ?>

        <!-- Data Types in PHP -->
        <?php
            $someStr = "string"; //this is a string
            $someInt = 25; //this is a positive integer
            $negInt = -5; //this is a negative integer
            $someFloat = 3.7; //this is a floating point integer
            $someBool = true; //this is a boolean
            $falseBool = false; //this is a boolean
            null; //this represents no value/absence of valuej
        ?>

        <!-- Working with strings in PHP -->
        <?php
            //See the PHP manual for more information, it's similar to MDN for JavaScript https://www.php.net/manual/en/index.php
            $phrase = "hElLO tHeRE";
            echo strtolower($phrase); //this is a string function
            echo strtoupper($phrase);
            echo strlen("Dog");
            echo $phrase[0]; //0 indexed
            echo $phrase[1];
            $phrase[0] = "B";
            echo "$phrase<br>";
            $phrase2 = "Hello World";
            echo str_replace("bello", "areet", strtolower($phrase)); //replaces substring text with next text
            echo substr($phrase, 0, 4); //gets substring from index 0 to 4
            echo "<br><br>";
        ?>

        <!-- Working with numbers in PHP -->
        <?php
            echo 5 + 9;
            echo 10 % 3; //mod opeerator - gives remainder of the division
            $num = 10;
            $num++; //increments the number
            $num--; //decrements the number
        ?>

        <!-- Getting user inputs -->
        <form action="site.php" method="get"> <!--action takes the name of the html page that will handle the form-->
            Name: <input type="text" name="name"> 
            Age: <input type="number" name="age"> 
            <input type="submit">
        </form>
        <br>
        <p>
            Your name is: <?php echo $_GET["name"] ?> <!-- Prints name entered into the input field of name "name" to the document -->
            Your age is: <?php echo $_GET["age"] ?> 
        </p>
        <!-- Information entered into the form is submitted to the URL -->

        <!-- URL Parameters -->
        <!--
            - Allows you to give information to the PHP page without requiring the user to enter the information 
            - e.g. http://localhost:4000/www/site.php?name=buzzcocks&age=23 - the above form with name "buzzcocks" & age 23, page will load with these values rendered onto the document
        -->
        
        <!-- POST vs GET --> 
        <!-- Here is a copy of the above form, using POST. This will not store values in the URL -->
        <form action="site.php" method="post">
            Name: <input type="text" name="name"> 
            Age: <input type="number" name="age"> 
            <input type="submit">
        </form>
        <br>
        <p>
            Your name is: <?php echo $_POST["name"] ?>
            Your age is: <?php echo $_POST["age"] ?> 
        </p>

        <!-- Arrays -->
        <?php
            $friendsArray = array("Buzzcocks", "Trekka", "Humpty Dumpty");
            echo $friendsArray[0]; //prints 1st element in the array
            echo count($friendsArray); //returns number of elements in the array
        ?>

        <form action="site.php" method="post">
            Apples: <input type="checkbox" name="fruits[]" value="apples"><br> <!-- fruits[] stores value inside of array -->
            Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
            Pearss: <input type="checkbox" name="fruits[]" value="pears"><br>
            <input type="submit">
        </form>

        <?php
            $fruits = $_POST["fruits"];
            echo $fruits[0];
        ?>

        <!-- Associative Arrays -->
        <?php
            $grades = array("Jim" => "A", "Boff" => "B", "Buzzcocks", "C"); //associative arrays store key value pairs - ensure all keys are uniquel
            echo $grades["Jim"]; //prints the value for the key "Jim" in the associative array
            echo $grades[$_POST["name"]]; //returns grade for the name enetered into the text box if it exists
        ?>

        <!-- Functions -->
        <?php
            function sayHi($name){ //any code in parenthesis is an argument
                echo "Hello $name";
            }; //any code inside of curly brackets is part of the function

            sayHi("Dan"); //calling the function

            function cube($num){
                return $num ** 3;
            };

            echo cube(3);
        ?>

        <!-- If Statements -->
        <?php
            $isMale = true;
            $isTall = false;
            if ($isMale && $isTall){ //can also use the or operator ||
                echo "You are a tall male";
            } elseif ($isMale && !$isTall) { //notice its elseif not elif
                echo "You are a small man";
            } else {
                echo "You are female";
            };

            function getMax($num, $num2){ //using if statements in functions
                if($num > $num2){ //can also use double equals to check if they are equal ==
                    echo "Num 1 is bigger";
                    return $num1;
                } else {
                    echo "Num 2 is bigger";
                    return $num2;
                }
            }

            echo getMax(300,900);
        ?>

        <!-- Switch Statements -->
        <form action="site.php" method="post">
            Grade: <input type="text" name="grade"><br>
            <input type="submit">
        </form>

        <?php
            $grade = $_POST["grade"];
            switch($grade){
                case "A":
                    echo "You did fkin class pal";
                    break;
                case "B":
                    echo "You did areet mate";
                    break;
                case "C":
                    echo "You did canny shite like";
                    break;
                default:
                    echo "You wot m8";
            }
        ?>

    </body>
</html>
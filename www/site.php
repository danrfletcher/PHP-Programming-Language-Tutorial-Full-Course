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
    </body>
</html>
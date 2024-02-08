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
        ?>

        <!-- Data Types in PHP -->

    </body>
</html>
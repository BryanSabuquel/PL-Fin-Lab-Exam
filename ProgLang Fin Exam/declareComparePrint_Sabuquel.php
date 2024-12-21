<!DOCTYPE html>
<html>
<body>
    <?php
        // Declare student 1 information
        $s1fName = "Bryan Kenneth";
        $s1mName = "";
        $s1lName = "Sabuquel";
        $s1Age = 22;
        $s1TeamName = "Snowcone";

        // Declare student 2 information
        $s2fName = "Francis Carlo";
        $s2mName = "S.";
        $s2lName = "De Guia";
        $s2Age = 21;
        $s2TeamName = "Red Velvet";

        // Print Students information
        echo "<p>The Name of Student 1 is $s1fName $s1mName $s1lName. He is $s1Age Years Old and belongs to $s1TeamName.<br>
                The Name of Student 2 is $s2fName $s2mName $s2lName. He is $s2Age Years Old and belongs to $s2TeamName.</p>";



        // Calculate and perform arithmetic expressions
        $add = $s1Age + $s2Age;
        $sub = $s1Age - $s2Age;
        $mul = $s1Age * $s2Age;
        $div = $s1Age / $s2Age;
        $mod = $s1Age % $s2Age;

        // Print the calculated result
        echo "<p>Student 1 Age + Student 2 Age: $add<br>
                Student 1 Age - Student 2 Age: $sub<br>
                Student 1 Age * Student 2 Age: $mul<br>
                Student 1 Age / Student 2 Age: $div<br>
                Student 1 Age % Student 2 Age: $mod</p>";
    ?>
</body>
</html>
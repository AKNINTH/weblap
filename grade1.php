<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>grade1</title>
</head>

<body>

    <form action = "" method ="POST">

        <label for="input">input score:</label>
        <input type = "text" name ="wgrade1">
        <br>
        <input type = "submit" valus ="ซัมมิด">
        <hr>

    </form>

    <?php
    if($_POST){

        $score = $_POST["wgrade1"];

        
        if(($score >= 0) AND ($score <= 49))
        {
            echo "Grade F";
        }
        elseif(($score >= 50) AND ($score <= 54))
        {
            echo "Grade D";
        }
        elseif(($score >= 55) AND ($score <= 59))
        {
            echo "Grade D+";
        }
        elseif(($score >= 60) AND ($score <= 64))
        {
            echo "Grade C";
        }
        elseif(($score >= 65) AND ($score <= 69))
        {
            echo "Grade C+";
        }
        elseif(($score >= 70) AND ($score <= 74))
        {
            echo "Grade B";
        }
        elseif(($score >= 75) AND ($score <= 79))
        {
            echo "Grade B+";
        }
        elseif(($score >= 80) AND ($score <= 100))
        {
            echo "Grade A";
        }
        else
            echo "error";

    }

    ?>

</body>
</html>
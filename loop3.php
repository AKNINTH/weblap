<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loop2</title>
</head>
<body>
    <form action = "" method ="POST">

        <label for="input">input score:</label>
        <input type = "text" name ="wloop3">
        <br>
        <input type = "submit" valus ="ซัมมิด">
        <hr>

    </form>

    <?php
    if($_POST){

        $number_input = $_POST["wloop3"];

        if($number_input >= 21){
            exit;
        }
        elseif($number_input <= 0){
            exit;
        }
        else
        for($count = 1; $count <= 12; $count++){
            echo $number_input." X ".$count." = ". $number_input*$count;
            echo "<br>";
        }
    }
    ?>
</body>
</html>
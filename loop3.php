<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loop2</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">LOGO</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Dropdown</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="1.php">งานที่ 1</a></li>
                        <li><a class="dropdown-item" href="2.php">งานที่ 2</a></li>
                        <li><a class="dropdown-item" href="3.php">งานที่ 3</a></li>
                        <li><a class="dropdown-item" href="grade1.php">งานที่ 4</a></li>
                        <li><a class="dropdown-item" href="loop3.php">งานที่ 5</a></li>
                        <li><a class="dropdown-item" href="6.php">งานที่ 6</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <form action = "" method ="POST">

        <label for="input">input number:</label>
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
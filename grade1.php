<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>grade1</title>
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
                        <li><a class="dropdown-item" href="read_file.php">งานที่ 6</a></li>
                        <li><a class="dropdown-item" href="file_upload.php">งานที่ 7</a></li>
                        <li><a class="dropdown-item" href="showimg.php">งานที่ 8</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

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
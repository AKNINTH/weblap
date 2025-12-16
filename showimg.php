<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    
<div class="container text-center py-5 ">
    <?php
        $dir = "uploads/";

        // Open a directory, and read its contents
        if (is_dir($dir)){
        if ($dh = opendir($dir)){
            while (($file = readdir($dh)) !== false){
                if ($file === '.' || $file === '..') {
                    continue;
                }
                echo "<br>" . "filename:" . $file . "<br>" ;
                $fullpath = $dir.$file;
            
                echo "<img src='" . $fullpath . "'" . "style='max-width: 300px; height: 300px;'";
                echo "<br>";
                
            }
            closedir($dh);
        }
        }
    ?>
</div>
</body>
</html>
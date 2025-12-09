<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>งานที่2</title>
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

        <p>สร้างเว็บแอพเพื่อเป็นเครื่องคิดเลขอย่างง่าย มีอินพุทตัวเลข 2 จำนวน โดยให้มีฟังก์ชั่นดังนี้</p>
        <p>บวก ลบ คูณ หาร หารคิดเศษ</p>
        <p>โดยให้เช็คอินพุทหากไม่เป็นตัวเลขให้แจ้ง error</p>
        <p>ให้ disabled ปุ่ม submit และเมื่อป้อนตัวเลขครบ 2 จำนวนให้เปิดปุ่ม submit</p>
        <hr>
        <label for="input">input number:</label>
        <input type = "text" name ="wnum1">
        <input type = "text" name ="wnum2">
        <br>
        <select name = "op">
            <option value="+">บวก</option>
            <option value="-">ลบ</option>
            <option value="*">คูณ</option>
            <option value="/">หาร</option>
            <option value="%">หารคิดเศษ</option>
        </select>
        <br>
        <input type = "submit" valus ="ซัมมิด">
        <hr>
    
    </form>

    <?php
    $op = $_POST["op"];

    if($op == '+'){
        echo $_POST["wnum1"] + $_POST["wnum2"];
    }
    if($op == '-'){
        echo $_POST["wnum1"] - $_POST["wnum2"];
    }
    if($op == '*'){
        echo $_POST["wnum1"] * $_POST["wnum2"];
    }
    if($op == '/'){
        echo $_POST["wnum1"] / $_POST["wnum2"];
    }
    if($op == '%'){
        echo $_POST["wnum1"] % $_POST["wnum2"];
    }
    ?>

</body>
</html>
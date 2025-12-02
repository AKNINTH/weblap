<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>งานที่2</title>
</head>

<body>
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
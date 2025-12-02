<?php

if (!isset($_POST["w2"]) || $_POST["w2"] === "") { //เช็คค่าว่าง
    echo "กรอกตัวเลขเพื่อคำนวน";
    exit();
}

$input_number = $_POST["w2"];

if (!is_numeric($input_number)) { //เช็คตัวเลข
    echo "กรอกเป็นตัวเลขเท่านั้นเพื่อคำนวน";
    exit();
}

if (intval($input_number) != $input_number) { //ตรวจสอบจำนวนเเต็มเท่านั้น
    echo "$input_number เป็นเลขทศนิยม ไม่สามารถตรวจสอบจำนวนเฉพาะได้";
    exit();
}

//1.
$num = $input_number;

if ($num % 2 == 0) {
    echo "$num เป็นจำนวนคู่<br>";
}

if ($num % 2 == 1) {
    echo "$num เป็นจำนวนคี่<br>";
}

if ($num % 2 == -1) {
    echo "$num เป็นจำนวนคี่<br>";
}

//2.
$process_number = $input_number;

if ($process_number <= 1) {
    echo "$process_number ไม่ใช่จำนวนเฉพาะ";
}
else {
    $process_prime_number = 0;
    for ($i = 2; $i <= sqrt($process_number); $i++) { //ส่วนประกอบ++

        if ($process_number % $i == 0) { //หารส่วนประกอบแล้วไม่มีเศษ
            //ถ้าเศษ = 0 แสดงว่ามีส่วนประกอบหารลงตัว = ไม่ใช่จำนวนเฉพาะ
            $process_prime_number = 1;  //เปลี่่ยนเป็นไม่ใช่จำนวนเฉพาะ
            echo "มีตัวประกอบคือประกอบคือ $i<br>";
            break;
        }
    }

    if ($process_prime_number == 0) {
        echo "$process_number เป็นจำนวนเฉพาะ";
    }
    if ($process_prime_number == 1) {
        echo "$process_number ไม่ใช่จำนวนเฉพาะ";
    }
}

?>
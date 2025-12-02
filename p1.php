<?php


// echo $_POST["v1"] + $_POST["v2"];

    $op = $_POST["op"];

    if($op == '+'){
        echo $_POST["v1"] + $_POST["v2"];
    }
    if($op == '-'){
        echo $_POST["v1"] - $_POST["v2"];
    }
    if($op == '*'){
        echo $_POST["v1"] * $_POST["v2"];
    }
    if($op == '/'){
        echo $_POST["v1"] / $_POST["v2"];
    }

?>

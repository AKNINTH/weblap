<?php

if($_FILES){
    
    echo $_FILES['filename']['name'];
    echo "<br>";
    echo $_FILES['filename']['type'];
    echo "<br>";
    echo $_FILES['filename']['size'];
    echo "<br>";
    echo $_FILES['filename']['tmp_name'];

}

?>
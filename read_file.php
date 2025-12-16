<?php
$fp = fopen("data1.txt", "r");

if (!$fp) {
    echo "Cannot open file data1.txt at this time, please try again";
    exit;
}

echo "Opening file data1.txt for reading only<br>";

$n = [];
$sum = 0;

while (($line = fgets($fp)) !== false) {
    $line = trim($line);

    if (is_numeric($line)) {
        $value = intval($line);
        $n[] = $value;
        $sum += $value;
    }
}

fclose($fp);

$count = count($n);

if ($count === 0) {
    echo "No numeric data found.";
    exit;
}

echo "<hr>" . "Sum / Count: $sum / $count<br>";
echo "Average: " . ($sum / $count) . "<hr>";

echo "Min number: " . min($n) . "<br>";
echo "Max number: " . max($n) . "<hr>";

?>

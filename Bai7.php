<?php

$rows = 7;
$cols = 7;
$matrix = array();

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $cols; $j++) {
        $matrix[$i][$j] = $i * $j;
    }
}


for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $cols; $j++) {
        echo $matrix[$i][$j] . "\t"; 
    }
    echo "<br>"; 
}

?>


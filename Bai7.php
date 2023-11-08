<?php

$rows = 7;
$cols = 7;
$matrix = array();

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $cols; $j++) {
        $matrix[$i][$j] = $i * $j;
    }
}

echo '<table border="1">';
for ($i = 1; $i <= $rows; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= $cols; $j++) {
        echo '<td>' . $matrix[$i][$j] . '</td>';
    }
    echo '</tr>';
}
echo '</table>';

?>

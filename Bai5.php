<?php

$around = "around";
echo 'What goes ' . $around . ' comes ' . $around . '.';
echo"<br />";

$month = date('F', time());
if ($month == "August") {
    print("It's August, so it's really hot.");
} elseif ($month != "August") {
    print("It's not August, so it's not really hot.");
}
?>
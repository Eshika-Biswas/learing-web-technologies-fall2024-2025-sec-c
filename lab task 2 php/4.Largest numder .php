<?php
$a = 20;
$b = 30;
$c = 35;

if ($a > $b && $a > $c) {
    echo "Largest number is: $a";
} elseif ($c > $b) {
    echo "Largest number is: $c";
} else {
    echo "Largest number is: $b";
}
?>

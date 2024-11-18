<?php
 echo "Asterisk Pattern:<br>";
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
echo "<br>";


echo "Number Pattern:<br>";
$count = 1;
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "$count ";
        $count++;
    }
    echo "<br>";
}
echo "<br>";


echo "Alphabet Pattern:<br>";
$char = 'A';
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "$char ";
        $char++;
    }
    echo "<br>";
}
echo "<br>";
?>
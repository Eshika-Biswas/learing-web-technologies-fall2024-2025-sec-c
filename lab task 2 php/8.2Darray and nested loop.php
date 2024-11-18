<?php
echo "Shape with Numbers:";
$numberArray = array(
    array(1, 2, 3),
    array(1, 2),
    array(1)
);

foreach ($numberArray as $row) {
    foreach ($row as $element) {
        echo "$element ";
    }
    echo "<br>";
}
echo "<br>";
echo "Shape with Alphabets:";
$charArray = array(
    array('A'),
    array('B', 'C'),
    array('D', 'E', 'F')
);

foreach ($charArray as $row) {
    foreach ($row as $element) {
        echo "$element ";
    }
    echo "<br>";
}
echo "<br>";
?>
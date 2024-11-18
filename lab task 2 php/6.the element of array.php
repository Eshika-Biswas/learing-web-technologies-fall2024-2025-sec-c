<?php
$array = array(15, 25, 35, 45, 55);
$searchElement = 45;

$found = false;
foreach ($array as $element) {
    if ($element == $searchElement) {
        $found = true;
        break;
    }
}

if ($found) {
    echo "$searchElement is found in the array";
} else {
    echo "$searchElement is not found in the array";
}
?>


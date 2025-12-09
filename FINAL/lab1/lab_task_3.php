<?php

echo "For Loop - Numbers 1 to 20:<br />";
for ($i = 1; $i <= 20; $i++) {
    echo $i . " ";
}
echo "<br><br>";

echo "While Loop - Even Numbers 1 to 20:<br>";
$num = 1;
while ($num <= 20) {
    if ($num % 2 == 0) {
        echo $num . " ";
    }
    $num++;
}
echo "<br><br>";

$fruits = array(
    "apple" => "red",
    "banana" => "yellow",
    "grape" => "purple",
    "orange" => "orange",
    "kiwi" => "green"
);

echo "Foreach Loop - Fruits and Colors:<br>";
foreach ($fruits as $fruit => $color) {
    echo $fruit . " is " . $color . "<br>";
}
echo "<br>";

echo "For Loop with Break - First 5 Numbers:<br>";
for ($i = 1; $i <= 20; $i++) {
    echo $i . " ";
    if ($i == 5) {
        break;
    }
}
echo "<br>";

?>
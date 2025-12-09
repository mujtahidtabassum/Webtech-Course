<?php

$temperature = 22;

if (!is_numeric($temperature)) {
    echo "Invalid temperature value!\n";
} else {
    echo "Temperature: " . $temperature . "°C\n";
    
    if ($temperature < 10) {
        echo "It's cold\n";
    } elseif ($temperature >= 10 && $temperature <= 25) {
        echo "It's warm\n";
    } else {
        echo "It's hot\n";
    }
}

echo "\n";

$day = 3;

if (!is_numeric($day) || $day < 1 || $day > 7) {
    echo "Invalid day value! Please use numbers 1-7.\n";
} else {
    echo "Day number: " . $day . "\n";
    
    switch ($day) {
        case 1:
            echo "Monday\n";
            break;
        case 2:
            echo "Tuesday\n";
            break;
        case 3:
            echo "Wednesday\n";
            break;
        case 4:
            echo "Thursday\n";
            break;
        case 5:
            echo "Friday\n";
            break;
        case 6:
            echo "Saturday\n";
            break;
        case 7:
            echo "Sunday\n";
            break;
    }
}

?>
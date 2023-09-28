<?php
function printIfAreFloat($number)
{
    if (is_float($number)) {
        echo "Yes, $number are float. <br>";
    } else {
        echo "No, $number aren't float. <br>";
    }
}

printIfAreFloat(5);
printIfAreFloat(5.22);
printIfAreFloat(12);

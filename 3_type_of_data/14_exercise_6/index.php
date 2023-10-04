<?php

$car_props = ['Name' => 'skyline', 'color' => 'red', 'cm' => 'RealNãoSeikkk'];
// the exercise only needs 2 props of this, so...
echo $car_props['Name'];
echo "<br>";
echo $car_props['color'];
echo "<br>";
// doing with foreach
echo "------forEach syntax-------<br>";
foreach ($car_props as $PropsCar) {
    echo $PropsCar;
    echo "<br>";
}

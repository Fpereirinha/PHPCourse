<?php
    $myPerson = ['name' => 'Pedro', 'age' => 22, 'surna' => 'Fernandes'];
    echo $myPerson['name'];
    echo "<br>";
    foreach($myPerson as $key){
        echo $key;
        echo "<br>";
    }
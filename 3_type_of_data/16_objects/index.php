<?php

class Person
{
    function getName()
    {
        return $this->name;
    }
}
$Pedro = new Person();
$Pedro->name = 'Pedro';
echo $Pedro->name;
echo "<br>";
echo $Pedro->getName();

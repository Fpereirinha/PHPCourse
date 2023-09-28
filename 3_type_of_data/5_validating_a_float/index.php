<?php
$number = 5.22;
$str = "Pedro";

if (is_float($str)) {
    echo "this is an float. $str";
} else {
    echo "this aren't a float. $str";
}
echo "<br>";
if (is_float($number)) {
    echo "this is an float. $number";
} else {
    echo "aren't a float. $number";
}

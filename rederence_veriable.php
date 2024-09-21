<?php
$x="abc";
$$x=1000;

echo "x=".$x;
echo "<br>referance of x is = ".$$x;
echo "<br> x = ".$abc;

$name="Izma";
$$name="Shaikh";

echo "<br> My name is $name ".$$name;
?>
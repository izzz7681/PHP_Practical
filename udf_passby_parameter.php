<?php
function even_odd($n)
{
   
    if($n%2==0)
    {
        echo $n."<br>Given number is a even";
    }
    else{
        echo $n."<br>Given number is a odd";
    }
}
echo "<br>answer1=".even_odd(5);
echo "<br>answer1=".even_odd(6);
echo "<br>answer1=".even_odd(7);
?>
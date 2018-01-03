<?php
$a = 2;
$b =&$a;
echo $a."<br>";
echo $b."<br>";
$c = "2$b$a";
echo $c;
?>
<!DOCTYPE>
<html>
<head>
<title>Inside Job | Poniters</title>
</head>
<body>
    <?php ?><br>
    <?php $Number = array(1,25,56,25,12,36,45,89,63,455); 
    print_r($Number);
    ?><br><hr>
<?php
echo current($Number)."<br>";
next($Number);
echo current($Number)."<br>";
next($Number);
echo current($Number)."<br>";
reset($Number);
echo current($Number)."<br>";

?><br>
</body>
</html>


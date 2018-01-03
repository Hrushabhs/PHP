<!DOCTYPE>
<html>
<head>

</head>
<body>
<?php
$int1  = 3;
$int2 = 4;
$float1 = 4.114;
?><br>
<?php echo $float1+22+$int1; ?>
<br>
Ceil:  <?php echo ceil($float1);  ?><br>
Floor: <?php echo floor($float1) ?><br>
<?php echo "is {$int1} :integer ". is_int($int1); ?><br>
<?php echo "is {$int2} :integer ". is_int($int2); ?><br>
<?php echo "is {$int1} :integer ". is_float($int1); ?><br>
<?php echo "is {$float1} :integer ". is_int($float1); ?><br>
<hr>
<?php echo decbin($int2); ?><br>
<?php echo bindec($int2); ?><br>
<?php echo sqrt($int2); ?><br>
<?php echo abs($int2-100); ?><br>
<?php echo pow($int2,3); ?><br>

</body>
</html>
<!DOCTYPE>
<html>
<head>

</head>
<body>
    <?php
$name= array("HRushabh",12,"Shiva","Hero","Master","Gangleader");
?><br>
<?php $food = array('Pizza',12.22,array("Hrushabh",'german','french'),"Sandwich");?>
<br>
<?php echo $food[2];  ?><br>
<?php echo $food[3][2] ?><br>
<?php $food[55]="Apple"; ?><br>
<pre>
<?php echo print_r($food); ?><br>
</pre>
</body>
</html>
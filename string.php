<!DOCTYPE>
<html>
<head>

</head>
<body>
<?php
$first ="I like to tell you that ";
$sec= "I wanna Join REDHAT ";
$combine = $first;
$combine .= $sec;
echo "Original string is : $combine <br>";
?>
Uppercase first : <?php  echo ucfirst($combine); ?><br>
Uppercase words : <?php  echo ucwords($combine); ?><br>
Lowercase first : <?php  echo strtolower($combine); ?><br>
Uppercase first : <?php  echo strtoupper($combine); ?><br>
<hr>
        Repeat: <?php echo str_repeat($combine,4); ?><br>
        Substring: <?php echo substr($combine,5,10); ?><br>
        position of specific word: <?php echo strpos($combine,"tell");?><br>
        find character : <?php echo strchr($combine, "e"); ?><br>

    </body>
</html>


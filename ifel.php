<!DOCTYPE>
<html>
<title>If else statements
</title>
<body>
<?php 
$weather = "cloudy";
if($weather == "Sunny"){
    echo "Weather is pleasant ware sun glasses.";
}
elseif($weather=="cloudy"){
    echo "Weather is cloudy take umbrella with you.";
}
elseif($weather=="Cold"){
    echo "Weather is Cold so plese ware Jacket";
}
else{
    echo "What happened to weather Its very diifernet today ";
}
?>
<hr>
<?php 
$name = "hrushabh";
$ans = $name =="hrushabh"? "Ya ur are ri8":"No one is there with this Name";
echo $ans;
?>

</body>
</html>
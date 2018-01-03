<!DOCTYPE>
<html>
<title>Cookie
</title>
<body>
<?php 
$expireTime = time() + 86400;
setcookie("Name","Hrushabh",$expireTime);
setcookie("Age",21,$expireTime);
setcookie("Number",987456321,$expireTime);
echo $_COOKIE["Name"]."<br>";
echo 'My Name is : '.$_COOKIE["Name"]." my age is : ". $_COOKIE["Age"]." and my Mobile Number is : " .$_COOKIE["Number"].".";

?>

</body>
</html>
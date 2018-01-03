<!DOCTYPE>
<html>
<title>Session
</title>
<body>
<?php 
session_start();
?>
<?php
$_SESSION["Name"]="Hrushabh Sirsulwar";
$Name=$_SESSION["Name"];
echo $Name."<br>";
$_SESSION["Age"]=21;
$Age=$_SESSION["Age"];
echo $Age."<br>";
$_SESSION["Mobile"]=789451365;
$Mobile=$_SESSION["Mobile"];
echo $Mobile;
?>

</body>
</html>
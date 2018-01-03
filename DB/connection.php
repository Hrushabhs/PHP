<!DOCTYPE>
<html>
<title>Connection
</title>
<body>
<?php 
$Connection = mysqli_connect("localhost","root","","record");
if($Connection){
    echo "Connection is Established";
}
else{
    echo "Something Went Wrong";
}

?>

</body>
</html>
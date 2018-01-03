<!DOCTYPE>
<html>
<title>Second Page
</title>
<body>
<?php 
$Username=$_POST["Username"];
$Password=$_POST["Password"];
$Submit=$_POST["Submit"];
    if(isset($_POST["Submit"])){
        echo "Login Successful Welcome {$Username}.<hr>";
    }
if(isset($Username)&&!empty($Username)){
echo "Username is Set with {$Username} <br>";
}
else{
    echo "No Username is given| Please Enter Username. <br>";
}
if(isset($Password)&&!empty($Password)){
echo "Password is Set with {$Password}<br>";
}
else{
    echo "No Password is given| Please Enter Password. <br>";
}
?>

</body>
</html>
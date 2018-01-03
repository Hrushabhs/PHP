<?php
if(isset($_POST["Submit"])){
$Username=$_POST["Username"];
$Password=$_POST["Password"];
if($Username=="Hrushabh" && $Password=="Hrushabhs"){
    echo "Welcome : {$_POST["Username"]}";
}
else{
    echo "The User Not exist |try again!!";
}



}
else{
    echo "<h2><b>Login Required</b></h2> ";
}
?>
<!DOCTYPE>
<html>
<title>First page Form
</title>
<body>
<fieldset>
    <legend>Simple Form </legend>
    <form action="second.php" method="POST">
<label for="username">Username: </label>
<input type="text" id="username" name="Username"><br><br>
<label for="password">Password: </label>
<input type="Password" id="password" name="Password"><br><br>
<input type="Submit" name="Submit" value="Submitted">


    </form>
</fieldset>
</body>
</html>
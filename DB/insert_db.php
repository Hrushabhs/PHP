<?php
if(isset($_POST["Submit"])){
    if(!empty($_POST["Name"])&&!empty($_POST["Emp_No"])){
    $Name=$_POST["Name"];
    $Emp_No=$_POST["Emp_No"];
    $Dept=$_POST["Dept"];
    $Salary=$_POST["Salary"];
    $Addr=mysql_real_escape_string($_POST["Addr"]);
    $Connection=mysql_connect('localhost','root',''); //Establishing Connection with the database
    $Selected=mysql_select_db('record',$Connection); //Selecting our Database
    $Query="INSERT INTO emp_record(name,emp_no,dept,salary,addr)
            VALUES('$Name','$Emp_No','$Dept','$Salary','$Addr')";
        $Execute=mysql_query($Query);
    if($Execute){
        echo '<div id="center"><span class="success">Record Has been Added</span> </div>';
    }
    }
    else{
        echo '<span class="FieldInfoHeading">Please Atleast add Name and Social Security Number</span>';
    }
    }
?>
<!DOCTYPE>
<html>
<title>Insert Data to Database
</title>
<style type="text/css">
input[type="text"],textarea{
    border: 1px solid_dashed;
    background-color:rgb(221,216,212);
    width:460px;
    padding:1px;
    font-size:1.0em;

}
input[type="Submit"]{
	color: white;
	font-size: 1.0em;
	font-family: Bitter,Georgia,Times,"Times New Roman",serif;
	width: 200px;
        height: 40px;
        background-color:  #5D0580;
        border: 5px solid ;
        border-bottom-left-radius: 35px;
        border-bottom-right-radius: 35px;
        border-top-left-radius: 35px;
        border-top-right-radius: 35px;
        border-color: rgb(221,216,212);
        font-weight: bold;
        float: left;
}
.FieldInfo{
	color: rgb(251, 174, 44);
        font-family: Bitter,Georgia,"Times New Roman",Times,serif;
        font-size: 1em;
	
}
.success{
color: rgb(158, 27, 214);
font-family: Bitter,Georgia,"Times New Roman",Times,serif;
font-size: 1.4em;
font-weight:bold;
}
.FieldInfoHeading{
     color: rgb(251, 174, 44);
    font-family: Bitter,Georgia,"Times New Roman",Times,serif;
    font-size: 1.3em;
}
#center{
	width: 500px;
	margin:0 auto;
}
fieldset{
	background-image: url("ems1.jpg");
	background-repeat: repeat-x;
}
body{
	background-image: url("2.jpg");
	background-repeat: repeat;
}
</style>
<body>

<div id="center">
<form action="insert_db.php" method="Post">
<fieldset>
<span class="FieldInfo">Employee Name:</span><br><input type="text" Name="Name" value=""><br>
<span class="FieldInfo">Social Security Number:</span><br><input type="text" Name="Emp_No" value=""><br>
<span class="FieldInfo">Department:</span><br><input type="text" Name="Dept" value=""><br>
<span class="FieldInfo">Salary:</span><br><input type="text" Name="Salary" value=""><br>
<span class="FieldInfo">Home Address:</span><br><textarea Name="Addr"></textarea><br>
<br><input type="Submit" Name="Submit" value="Submit Your Record"><br>
<input type="Submit" Name="View" value="View all Record"><br>

    
    
</fieldset>	
    
    
</form>
</div>


</body>
</html>
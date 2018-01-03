<?php 
$NameError="";
$EmailError="";
$GenderError="";
$WebsiteError="";
if(isset($_POST["Submit"])){
    if(empty($_POST["Name"])){
        $NameError="Name is Required";
    }
    else{
        $Name=User_input($_POST["Name"]);
        if(!preg_match("/^[A-Za-z. ]*$/",$Name)){
            $NameError="Only Letters and Whitespaces Are Allowed.";
        }
    }
    if(empty($_POST["Email"])){
        $EmailError="Email is Required";
    }
    else{
        $Email=User_input($_POST["Email"]);
        if(!preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/",$Email)){
            $EmailError="Invalid Email Format.";
        }
    }
    if(empty($_POST["Gender"])){
        $GenderError="Gender is Required";
    }
    else{
        $Gender=User_input($_POST["Gender"]);
    }
    if(empty($_POST["Website"])){
        $WebsiteError="Website is Required";
    }
    else{
        $Website=User_input($_POST["Website"]);
        if(!preg_match("/(https:|ftp:)\/\/+[a-zA-Z0-9.\-_\/?\$=&\#\~`!]+\.[a-zA-Z0-9.\-_\/?\$=&\#\~`!]*/",$Website)){
            $WebsiteError="Invalid Website Format.";
        }
    }
if(!empty($_POST["Name"]) && !empty($_POST["Email"])&& !empty($_POST["Gender"])&& !empty($_POST["Website"]))
{
if((preg_match("/^[A-Za-z. ]*$/",$Name)==true) &&(preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/",$Email)==true)&&(preg_match("/(https:|ftp:)\/\/+[a-zA-Z0-9.\-_\/?\$=&\#\~`!]+\.[a-zA-Z0-9.\-_\/?\$=&\#\~`!]*/",$Website)==true))
{
echo "<h2>Your Submitted Information</h2><br>";
echo "Name: {$_POST["Name"]}<br>";
echo "Email: {$_POST["Email"]}<br>";
echo "Gender: {$_POST["Gender"]}<br>";
echo "Website: {$_POST["Website"]}<br>";
echo "Comment: {$_POST["Comment"]}<br>";
$emailTo=$_POST["Email"];
$subject="Final Mail sending Demo";
$body="A person name ".$_POST["Name"]."With Email : ".$_POST["Email"]."Having Gender  :".$_POST["Gender"]."Have a Website of : ".$_POST["Website"]."Added Comment ::".$_POST["Comment"];
$Sender="From:shrushabh97@gmail.com";
    if (mail($emailTo, $subject, $body, $Sender)) {
               echo "Mail sent successfully!";
                   } else {
                               echo "Mail not sent!";
                   }
}else{
    echo '<span class="Error"> Please enter Information correctly.</span>'; 
}
}
}
function User_input($Data){
    return $Data;
}

?>

<!DOCTYPE>
<html>
<title>Form Validation Project
</title>
<style type="text/css">
input[type="text"],input[type="email"],textarea{
        border: 1px solid_dashed;
        background-color: grey;
        padding: .5em;
        width: 400px;
        font-size: 1.0em;
}
.Error{
    color: red;

}
</style>
<body>
<h2>Form Validation with PHP.</h2>

<form  action="FormValid.php" method="post"> 
<legend>* Please Fill Out the following Fields.</legend>			
<fieldset>
Name:<br>
<input class="input" type="text" Name="Name" value="">
<span class="Error">* <?php echo $NameError;?></span><br>	 
E-mail:<br>
<input class="input" type="text" Name="Email" value="">
<span class="Error">* <?php echo $EmailError;?></span><br>
Gender:<br>
<input class="radio" type="radio" Name="Gender" value="Female">Female
<input class="radio" type="radio" Name="Gender" value="Male">Male
<span class="Error">* <?php echo $GenderError;?></span><br>		   
Website:<br>
<input class="input" type="text" Name="Website" value="">
<span class="Error">* <?php echo $WebsiteError;?></span><br>
Comment:<br>
<textarea Name="Comment" rows="5" cols="25"></textarea>
<br>
<br>
<input type="Submit" Name="Submit" value="Submit Your Information">
   </fieldset>
</form>


</body>
</html>
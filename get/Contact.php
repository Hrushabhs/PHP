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
<!doctype html>
<html>
<head>
    <title>Contact Page</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
 
 <link rel="stylesheet" href="CSS/Basic.css">
    <style>
#menu{
    background-color: rgb(200, 200, 200);
    border: 2px solid #5D0580;
    
}
#menu ul li{
    float: left;
    font-size: 1.6em;
    margin-top:-7px;
    font-weight:bold;
    font-family: bitter,georgia,times,"Times New Roman",serif;
    
}

#menu ul{
    list-style: none;
    margin-bottom: 0px;
    
    height: 30px;
    border-bottom: 1px solid #000;
}

#menu ul li a{
    
    display: block;
    color: #000;
    text-decoration: none;
    padding: 0 20px;
    line-height: 30px;
}

#menu ul li a:hover,#menu ul li a.selected
{
    background: url("images/pattern.png");
    background-color: #5D0580;
    color: #fff; 
}
    
    #social{
   
    
}

#social ul li{
    float: left;
    margin-left: 10px;
    margin-top: 15px;
    list-style: none;
}
section.links h3{
    background: rgba(0, 0, 0, 0) url("images/pattern.png") repeat scroll 0 0;
    color: white;
    font-family: Bitter,Georgia,Times,"Times New Roman",serif;
    font-size: 1.9em;
    font-weight: 100;
    line-height: 45px;
   display: block;

}
section.links{
height: 300px;
}
section.links ul{
    margin-left: -30px;
   
}
section.links li{
    list-style: none;
    padding-top: 10px;
    
}
section.links li a{
    background-color: #fbae2c;
    display: block;
    list-style: none;
    font-size: 1.1em;
 
    line-height: 30px;
    text-decoration: none;
    color: white;
	
    }
section.links li a:hover{
    background: url("images/pattern.png");
    display: block;
    list-style: none;
    font-size: 1.3em;
    font-weight: bold;
    line-height: 30px;
    text-decoration: none;
    padding-left: 25px;
    color: white;
   border-bottom-left-radius: 15px;
   border-bottom-right-radius: 15px;
   border-top-left-radius: 15px;
   border-top-right-radius: 15px;
   background-color:#5D0580;/*rgba(168,88,163,1);*/
    }
   

h2,legend{
    color: White;
    font-size: 1.6em;  
background: url("images/pattern.png");
font-family: Bitter,Georgia,Times,"Times New Roman",serif;
text-align: center;
background-color:#5D0580;

}

#request{
    color: rgb(251, 174, 44);
    font-family: Bitter,Georgia,"Times New Roman",Times,serif;
    font-size: 3.0em;
    line-height: 1.9em;
    font-weight: bold;

    
}
.req{
     font-size: 1.2em;
      font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}


</style>
    
</head>
<body>
    <div id="wrap">
        <div id="header">
            <div id="logo">
	<!--	<img id="mainImage" src="images/bournelegacy.jpg" width="990" height="400" alt="image"/> -->
	    </div>
        </div>
        
        <!-- Main Area Content Area -->
        <div id="main">
                       <div id="content">
           
	<h1 id="request">Movie Premier Booking Form</h1>
<p class="req">Interested in Movie Premier at NY Cinema? Please complete and submit the following form to the Booking Office. One of our representatives will send you an information package tailored to the field(s) of Premier that interest you. Please indicate whether you would like additional information or not</p>


<style type="text/css">
input[type="text"],input[type="email"],textarea{
	border:  1px solid dashed;
	background-color: rgb(221,216,212);
	width: 480px;
	padding: .5em;
	font-size: 1.0em;
}
.Error{
	color: red;
    font-size: 1.2em;  
font-family: Bitter,Georgia,Times,"Times New Roman",serif;}
input[type="submit"]{
 color: white;
    float: right;
    font-size: 1.3em;
    font-family: Bitter,Georgia,Times,"Times New Roman",serif;
    width: 170px;
    height: 40px;
    background-color:  #5D0580;
    border: 5px solid ;
    border-bottom-left-radius: 35px;
   border-bottom-right-radius: 35px;
   border-top-left-radius: 35px;
   border-top-right-radius: 35px;
    border-color: rgb(221,216,212);
      font-weight: bold;
}
.FieldInfo{
     color: rgb(251, 174, 44);
    font-family: Bitter,Georgia,"Times New Roman",Times,serif;
    font-size: 1.3em;
   

}
.MF{
	color: black;
    font-size: 1.2em;  
font-family: Bitter,Georgia,Times,"Times New Roman",serif;}

</style>

<?php ?>

<form  action="" method="post"> 
<legend>* Please Fill Out the following Fields.</legend>			
<fieldset>
 <span class="FieldInfo">
Name:</span><br>
<input class="input" type="text" Name="Name" value="">
<span class="Error">*<?php echo $NameError;  ?></span><br>
<span class="FieldInfo">
E-mail:</span><br>
<input class="input" type="text" Name="Email" value="">
<span class="Error">*<?php echo $EmailError; ?></span><br>
<span class="FieldInfo">
Gender:</span><br>
<input class="radio" type="radio" Name="Gender" value="Female"><span class="MF">Female</span>
<input class="radio" type="radio" Name="Gender" value="Male"><span class="MF">Male</span>
<span class="Error">*<?php echo $GenderError; ?></span><br>
<span class="FieldInfo">
Website:</span><br>
<input class="input" type="text" Name="Website" value="">
<span class="Error">*<?php echo $WebsiteError; ?></span><br>
<span class="FieldInfo">
Comment:</span><br>
<textarea Name="Comment" rows="5" cols="25"></textarea>
<br>
<br>
<input type="Submit" Name="Submit" value="Submit">
   </fieldset>
</form>

 	
	 
<script src="Script/Myscript.js"></script>
</body>
</html>
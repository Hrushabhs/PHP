
<!DOCTYPE>
<html>
<title>Reusibility
</title>
<body>
<?php 
$web = "Google India";
$search = "https://www.google.co.in/search?q=wordpress+simple+static+download&rlz=1C1CHBF_enIN762IN762&oq=wordpress+simple+static+download&aqs=chrome..69i57.17298j0j4&sourceid=chrome&ie=UTF-8";
$result = "https://". urlencode($web). "?search ". urldecode($search);
echo $result;
?>

</body>
</html>
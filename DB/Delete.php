<?php
$Connection=mysql_connect('localhost','root','');
$Selected=mysql_select_db('record',$Connection);
$Delete_Record=$_GET['Delete'];
$Delete_Query="DELETE FROM emp_record
WHERE id='$Delete_Record'";
$Execute=mysql_query($Delete_Query);
if($Execute){
    echo '<script>window.open("Search_db.php?Deleted=Record Succesfully Deleted","Search_db.php"</script>';
  

}
else{
    "Something Went Wrong";
}

?>
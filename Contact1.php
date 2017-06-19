<!DOCTYPE html>
<html>
<head>




<?php


//$con=mysqli_connect('182.50.133.82:3306','jct','jct@123');

$con=mysqli_connect('127.0.0.1','root','root');

if(!$con)
{
	echo 'Failed';
}


if(!mysqli_select_db($con,'jctechnology'))
{

	 echo 'DataBase Not Connected';
 }

$Name=$_POST['Name'];
 
 $Email=$_POST['Email'];
 
$Comment=$_POST['Comment'];
 
 
 
 $sql="INSERT INTO contact(Name,Email,Comment) VALUES ('$Name','$Email','$Comment')";
 
if(!mysqli_query($con,$sql))
	 
	 {
		 echo 'Not Inserted';
	 }
	 else
		  {
		 echo'<h3>Thanks. We Will Get Back To You Very Soon...</h3>';
	 }
	 
header("refresh:2 url=index.html");
 


?>
	

</body>
</html>
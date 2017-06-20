<Html>
<head>

</head>

<body>
 <center>
<?php


//$con=mysqli_connect('182.50.133.82:3306','jct','jct@123');

$con=mysqli_connect('127.0.0.1','root','root');

if(!$con)
{
	echo 'Failed';
}

 if(!@mysqli_select_db($con,'jctechnology'))
 {

	 echo 'DataBase Not Connected';
 }
 
 
 $sql="select * from admin where id=1";
 
 $records=mysqli_query($con,$sql);
 
 while($row = mysqli_fetch_array($records))
 {
	 
	$username= $_POST['username'];
	 
	$password= $_POST['password'];
	
	
	$username1= $row['username'];
	 
	$password1= $row['password'];
 }

 if($username== $username1 && $password == $password1 )
 {
	 session_start();
  
 $_SESSION['userName'] = 'Admin';
	 
	 $_SESSION['userName1'] = 'Admin1';
  
 header("refresh:0 url=AdminHome.php");
	 
 die();
 }
else

{
  echo 'Enter Correct Username and Password';
   
   header("refresh:2 url=AdminLogin.html");
}

?>
</center>
</body>
</html>

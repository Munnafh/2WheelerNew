<!DOCTYPE html>
<!--
 * A Design by GraphBerry
 * Author: GraphBerry
 * Author URL: http://graphberry.com
 * License: http://graphberry.com/pages/license
-->
<html lang="en">
    
     <head>  
           <title>Destiny Wheels</title>  
		   
		   <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57.png">
        <link rel="shortcut icon" href="images/ico/favicon.ico">
		
            <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script> 
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
		   
		   <link rel="stylesheet" type="text/css" href="css/Style4.css" />
		   <link rel="stylesheet" type="text/css" href="css/Style5.css" />
		   
		   
      </head> 
<body style="color:black;" >
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
   
    <ul class="nav navbar-nav">
      <li class="active"><a href="AdminHome.php">Home</a></li>
      <li><a href="Addcar2.php"><span class="glyphicon glyphicon"></span> Add Car</a></li>
      <li><a href="Modify_Car.php"><span class="glyphicon glyphicon"></span> Modify Car</a></li>
      <li><a href="Logout.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
    </ul>
  </div>
</nav>
<div class="container">

		<div class="row">
							<div class="col-lg-12 form-group ">
								<h2>2 Wheeler Lists :-</h2>
								<br>



<table class='table table-hover table-inverse'>
  <tr>
	   <th align="middle"><h4>Id</h4></th>
	   <th align="middle"><h4>Image</h4></th>
    <th align="middle"><h4>Type</h4></th>
    <th align="middle"><h4>Name</h4></th>
	 <th align="middle"><h4>Manufacturer Name</h4></th>
	   <th align="middle"><h4>Model No</h4></th>
    <th align="middle"><h4>Available Purchase</h4></th>
    <th align="middle"><h4>Available Hire</h4></th>
	<th align="middle"><h4> Available</h4></th>
    <th align="middle"><h4>Price Buying</h4></th>
    <th align="middle"><h4>Price Renting</h4></th>
      <th align="middle"><h4>Description</h4></th>
	  	  
  </tr>
 <?php

session_start();
if(isset($_SESSION['userName1']))
{


//$con=mysqli_connect('182.50.133.82:3306','jct','jct@123');

$con=mysqli_connect('127.0.0.1','root','root');

if(!$con)
{
	echo 'Not Connect to the Server';
}

 if(!@mysqli_select_db($con,'jctechnology'))
 {

	 echo 'DataBase Not Connected';
 }
 
 $sql="SELECT * FROM `wheelers_details`";
 
 $records=mysqli_query($con,$sql);
 
 while($row = mysqli_fetch_array($records))
 {
	 echo "<tr>";
	 echo "<td>".$row['id']."</td>";
	 echo '  
                            
                                <th>
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['wheeler_image'] ).'" height="20" width="30" class="img-thumnail" />  
                               </th>

                               						   
                         
                     '; 
	 echo "<td>".$row['wheeler_type']."</td>"; 
	 echo "<td>".$row['wheeler_name']."</td>";
	 echo "<td>".$row['manufacturer_name']."</td>"; 
	 echo "<td>".$row['model_no']."</td>";
	 echo "<td>".$row['available_purchase']."</td>"; 
	 echo "<td>".$row['available_hire']."</td>";
	 echo "<td>".$row['pieces_available']."</td>"; 
	 echo "<td>".$row['price_buying']."</td>";
	 echo "<td>".$row['price_hiring']."</td>"; 
	 echo "<td>".$row['description']."</td>";
	
	 //session_destroy();
	 
	 
 }
 
// session_destroy();
 
}
else
	
{
	session_destroy();

	header("refresh:0 url=AdminLogin.html");	
}
 
 
 
 
 
 
 
 
 ?>
 
 
 
</table>
</div>
</div>
<div class="row">
<div class="col-lg-12 form-group">
<h2>Customer Details</h2>
								

<table class='table table-bordered'>
  <tr>
	   <th align="middle"><h4>Id</h4></th>
    <th align="middle"><h4>First Name</h4></th>    
      <th align="middle"><h4>Last Name</h4></th>
	  <th align="middle"><h4>Address</h4></th>
	  <th align="middle"><h4>City</h4></th>
    <th align="middle"><h4>State</h4></th>    
      <th align="middle"><h4>Zip</h4></th>
	  <th align="middle"><h4>Phone No</h4></th>
	  <th align="middle"><h4>Email</h4></th>
    <th align="middle"><h4>2 Wheeler Name</h4></th>    
      <th align="middle"><h4>Rent OR Buy</h4></th>
	  <th align="middle"><h4>Rs</h4></th>
        
  </tr>
 
 <?php

if(isset($_SESSION['userName1']))
{
	
	//session_destroy();

//$con=mysqli_connect('182.50.133.82:3306','jct','jct@123');

$con=mysqli_connect('127.0.0.1','root','root');

if(!$con)
{
	echo 'Not Connect to the Server';
}

 if(!@mysqli_select_db($con,'jctechnology'))
 {

	 echo 'DataBase Not Connected';
 }
 
 $sql="SELECT * FROM `customer`";
 
 $records=mysqli_query($con,$sql);
 
 while($row = mysqli_fetch_array($records))
 {
	 echo "<tr>";
	 echo "<td>".$row['id']."</td>";
	 echo "<td>".$row['first_Name']."</td>";
	 echo "<td>".$row['last_Name']."</td>";
	 echo "<td>".$row['address']."</td>";
	  echo "<td>".$row['city']."</td>";
	 echo "<td>".$row['state']."</td>";
	 echo "<td>".$row['zip']."</td>";
	 echo "<td>".$row['phone_No']."</td>";
	  echo "<td>".$row['email']."</td>";
	 echo "<td>".$row['wheeler_Name']."</td>";
	 echo "<td>".$row['hireOrbuy']."</td>";
	 echo "<td>".$row['price']."</td>";
	
 }
 
}
else
{
	
	header("refresh:0 url=AdminLogin.html");
}
 
 
 
 
 
 
 ?>
 
</table>
</div>
</div>
<div class="row">
<div class="col-lg-12 form-group ">
								<h2>Contact Us Table :-</h2>
								<br>

<table class='table table-bordered'>
  <tr>
	   <th align="middle"><h4>Id</h4></th>
    <th align="middle"><h4>Name</h4></th>    
      <th align="middle"><h4>Email</h4></th>
	  <th align="middle"><h4>Comment</h4></th>
        
  </tr>
 
 <?php

if(isset($_SESSION['userName1']))
{
	
	//session_destroy();

//$con=mysqli_connect('182.50.133.82:3306','jct','jct@123');

$con=mysqli_connect('127.0.0.1','root','root');

if(!$con)
{
	echo 'Not Connect to the Server';
}

 if(!@mysqli_select_db($con,'jctechnology'))
 {

	 echo 'DataBase Not Connected';
 }
 
 $sql="SELECT * FROM `contact`";
 
 $records=mysqli_query($con,$sql);
 
 while($row = mysqli_fetch_array($records))
 {
	 echo "<tr>";
	 echo "<td>".$row['Id']."</td>";
	 echo "<td>".$row['Name']."</td>";
	 echo "<td>".$row['Email']."</td>";
	 echo "<td>".$row['Comment']."</td>";
	
 }
 
}
else
{
	
	header("refresh:0 url=AdminLogin.html");
}
 
 
 
 
 
 
 ?>
 
</table>


</div>
</div>
</div>
</body>
</html>

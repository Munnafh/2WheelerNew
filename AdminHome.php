<!DOCTYPE html>
<!--
 * A Design by GraphBerry
 * Author: GraphBerry
 * Author URL: http://graphberry.com
 * License: http://graphberry.com/pages/license
-->
<html lang="en">
    
    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Destiny Wheels</title>
        <!-- Load Roboto font -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- Load css styles -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/pluton.css" />
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="css/jquery.cslider.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="css/animate.css" />
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57.png">
        <link rel="shortcut icon" href="images/ico/favicon.ico">
		<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
 <link rel="stylesheet" type="text/css" href="css/pop.css" />

  	

    </head>
<body style="color:black;" >
<br>
<center><h3>Admin Section!! Only For Admin Uses</h3></center>
<div class="container">
   
	<div class="col-lg-12 well">
	<div class="row">
	<div class="col-sm-4 form-group">
	</div>
							<div class="col-sm-4 form-group">
							
								<center>
								<a class="btn btn-theme btn-lg" href="http://localhost:8080/dwCode-master/Addcar2.php">Add Car</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp

<a class="btn btn-theme btn-lg" href="http://localhost:8080/dwCode-master/Modify_Car.php">Modify Car</a>
						</center>
							</div>
							<div class="col-sm-4 form-group">
	</div>
							</div></div></div>














<div class="container">

		<div class="row">
							<div class="col-sm-4 col-sm-4 col-sm-4 ">
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
 
 
}
else
	
{

	echo '<h3><font color="red">Please Login First</font></h3>';	
}
 
 
 
 
 
 
 
 
 ?>
 
 
 
</table>
<br>

<h2>Customer Details</h2>
								<br>

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
	
	echo '<h3><font color="red">Please Login First</font></h3>';
}
 
 
 
 
 
 
 ?>
 
</table>

<br>
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
	
	echo '<h3><font color="red">Please Login First</font></h3>';
}
 
 
 
 
 
 
 ?>
 
</table>


</div>
</div>
</div>
</body>
</html>
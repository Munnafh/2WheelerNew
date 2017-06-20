
<?php  
 $connect = mysqli_connect('127.0.0.1','root','root','jctechnology');  
 if(isset($_POST["insert"]))  
 { 
     
	  $id=$_POST['wheeler_name'];
      
      $query ="Update wheelers_details set pieces_available = pieces_available -1   WHERE id='$id'";
     if(mysqli_query($connect, $query))  
      {  
          
      }
  
 }  
 ?>  

<?php  
 $connect = mysqli_connect('127.0.0.1','root','root','jctechnology');  
 if(isset($_POST["insert"]))  
 {

      $First_Name=$_POST['First_Name'];
      $Last_Name=$_POST['Last_Name'];
	  $Address=$_POST['Address'];
      $City=$_POST['City'];
	  $State=$_POST['State'];
      $Zip=$_POST['Zip'];
	  $Phone_No=$_POST['Phone_No'];
      $Email=$_POST['Email'];
	  $Car_Name=$_POST['Car_Name'];
	  $Rentel_or_Buy=$_POST['Rentel_or_Buy'];
	  $Price=$_POST['Price'];
	  
      $query1 = "INSERT INTO customer (first_Name,last_Name,address,city,state,zip,phone_No,email,wheeler_Name,hireOrbuy,price) VALUES ('$First_Name','$Last_Name', '$Address', '$City', '$State', '$Zip', '$Phone_No', '$Email', '$Car_Name', '$Rentel_or_Buy', '$Price')";  
      if(mysqli_query($connect, $query1))  
      {  
           echo '<script>alert("Your Data Inserted Sucessfully")</script>';  
      }

 }
 ?>






<!DOCTYPE html>  
 <html>  

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
		   <link rel="stylesheet" type="text/css" href="js/Style3.css" />
		   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
      </head>  
      <body  background="images/background.jpg">
	  
	  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
   
    <ul class="nav navbar-nav">
      <li class="active"><a href="AdminHome.php">Home</a></li>
      <li><a href="Addcar2.php"><span class="glyphicon glyphicon-user"></span> Add Car</a></li>
      <li><a href="Modify_Car.php"><span class="glyphicon glyphicon-user"></span> Modify Car</a></li>
      <li><a href="AdminLogin.html"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
    </ul>
  </div>
</nav>
	  <div class="container">
   
	<div class="col-lg-12 well">
	<div class="row">
	<div class="col-sm-4 form-group">
	</div>
							<div class="col-sm-4 form-group">
							
								<center>
								<label>Select 2 Wheeler Purpose</label>
	 <select id='purpose' class="form-control" >
<option value="0" selected>Rental</option>
<option value="1">Buy</option>

</select>
						</center>
							</div>
							<div class="col-sm-4 form-group">
	</div>
							</div></div></div>
<div id="Rental">
 
<div class="container">
<center>
    <h2 class="well">2 Wheeler Rental Registration Form</h2>
	</center>
	<div class="col-lg-12 well">
	<div class="row">
	<form method="post" enctype="multipart/form-data"> 
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>First Name</label>
								<input type="text" name="First_Name" placeholder="Enter First Name Here.." class="form-control" required>
							</div>
							<div class="col-sm-6 form-group">
								<label>Last Name</label>
								<input type="text" name="Last_Name" placeholder="Enter Last Name Here.." class="form-control" required>
							</div>
						</div>					
						<div class="form-group">
							<label>Address</label>
							<textarea placeholder="Enter Address Here.." name="Address" rows="3" class="form-control" required></textarea>
						</div>	
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>City</label>
								<input type="text" name="City" placeholder="Enter City Name Here.." class="form-control" required>
							</div>	
							<div class="col-sm-4 form-group">
								<label>State</label>
								<input type="text" name="State" placeholder="Enter State Name Here.." class="form-control" required>
							</div>	
							<div class="col-sm-4 form-group">
								<label>Zip</label>
								<input type="text" name="Zip" placeholder="Enter Zip Code Here.." class="form-control" required>
							</div>		
						</div>				
					<div class="form-group">
						<label>Phone Number</label>
						<input type="text" name="Phone_No" placeholder="Enter Phone Number Here.." class="form-control" required>
					</div>		
					<div class="form-group">
						<label>Email Address</label>
						<input type="email" name="Email" placeholder="Enter Email Address Here.." class="form-control" required>
					</div>	
					<div class="row">
							
							<div class="col-sm-6 form-group">
								<label>2 Wheeler Model Number </label>
								<select name="wheeler_name" class="form-control" required>
<?php

$conn = new mysqli('127.0.0.1', 'root', 'root', 'jctechnology') 
or die ('Cannot connect to db');

    $result = $conn->query("select 	id, wheeler_name from wheelers_details");

   
   

    while ($row = $result->fetch_assoc()) {

                  unset($id, $name);
                  $id = $row['id'];
                  $name = $row['wheeler_name']; 
                 echo "<option value='". $row['id']."'>".$row['wheeler_name'].'</option>';
				 
				  

}

   
?> 
</select>
							</div>
							<div class="col-sm-6 form-group">
								<label>2 Wheeler Rental Price</label>
								<input type="text" name="Price" placeholder="2 Wheeler Rental Price Here.." class="form-control" required>
							</div>
						</div>
						
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Rental Start Date</label>
								<input type="Date" name="Rental_Start_Date"  class="form-control" required>
							</div>
							<div class="col-sm-6 form-group">
								<label>Rental End Date</label>
								<input type="Date" name="Rental_End_Date"  class="form-control" required>
							</div>
						</div>	
					
					<input value="Rent" type="hidden" name="Rentel_or_Buy">
					<div class="col-sm-4 form-group">
	</div>
							<div class="col-sm-4 form-group">
								<center>
	<input type="submit" name="insert" id="insert" value="Submit" class="btn btn-lg btn-info"/>
						</center>
							</div>
							<div class="col-sm-4 form-group">
	</div>
					
					 					
					</div>
					
					
					
				</form> 
				</div>
	</div>
	</div>
</div>

<div id="Buy" style="display: none"> 
<div class="container">
<center>
    <h2 class="well">2 Wheeler Buying Registration Form</h2>
	</center>
	<div class="col-lg-12 well">
	<div class="row">
	<form method="post" enctype="multipart/form-data"> 
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>First Name</label>
								<input type="text" name="First_Name" placeholder="Enter First Name Here.." class="form-control" required>
							</div>
							<div class="col-sm-6 form-group">
								<label>Last Name</label>
								<input type="text" name="Last_Name" placeholder="Enter Last Name Here.." class="form-control" required>
							</div>
						</div>					
						<div class="form-group">
							<label>Address</label>
							<textarea placeholder="Enter Address Here.." name="Address" rows="3" class="form-control" required></textarea>
						</div>	
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>City</label>
								<input type="text" name="City" placeholder="Enter City Name Here.." class="form-control" required>
							</div>	
							<div class="col-sm-4 form-group">
								<label>State</label>
								<input type="text" name="State" placeholder="Enter State Name Here.." class="form-control" required>
							</div>	
							<div class="col-sm-4 form-group">
								<label>Zip</label>
								<input type="text" name="Zip" placeholder="Enter Zip Code Here.." class="form-control" required>
							</div>		
						</div>				
					<div class="form-group">
						<label>Phone Number</label>
						<input type="text" name="Phone_No" placeholder="Enter Phone Number Here.." class="form-control" required>
					</div>		
					<div class="form-group">
						<label>Email Address</label>
						<input type="email" name="Email" placeholder="Enter Email Address Here.." class="form-control" required>
					</div>	
					<div class="row">
							
							<div class="col-sm-4 form-group">
								<label>2 Wheeler Model Number</label>
								<select name="wheeler_name" class="form-control" required>
<?php

$conn = new mysqli('127.0.0.1', 'root', 'root', 'jctechnology') 
or die ('Cannot connect to db');

    $result = $conn->query("select 	id,wheeler_name from wheelers_details");

   
   

    while ($row = $result->fetch_assoc()) {

                  unset($id, $name);
                  $id = $row['id'];
                  $name = $row['wheeler_name']; 
                 echo "<option value='". $row['id']."'>".$row['Car_Name'].'</option>';
				 
}
  
?> 
</select>
							</div>
							<div class="col-sm-4 form-group">
								<label>2 Wheeler Buying Price</label>
								<input type="text" name="Price" placeholder="2 Wheeler Buying Price Here.." class="form-control" required>
							</div>
							
							<div class="col-sm-4 form-group">
								<label>Buying Date</label>
								<input type="Date" name="Buying_Date"  class="form-control" required>
							</div>
							
						</div>
					
					<input value="Buy" type="hidden" name="Rentel_or_Buy">
					<div class="col-sm-4 form-group">
	</div>
							<div class="col-sm-4 form-group">
								<center>
	<input type="submit" name="insert" id="insert" value="Submit" class="btn btn-lg btn-info"/>
						</center>
							</div>
							<div class="col-sm-4 form-group">
</div>				
</div>					
</form>
<br>
</div>
</div>
</div>
</div>	
</body>  
</html> 
<script>
$(document).ready(function(){
    $('#purpose').on('change', function() {
      if ( this.value == '0')
      {
           $("#Buy").hide();
        $("#Rental").show();
      }
       if ( this.value == '1')
      {
          $("#Rental").hide();
        $("#Buy").show();
      }
      
    });
});
</script>


 

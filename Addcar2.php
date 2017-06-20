<?php  
 $connect = mysqli_connect('127.0.0.1','root','root','jctechnology');  
 if(isset($_POST["insert"]))  
 { 
      $wheeler_type=$_POST['wheelerType'];
      $wheeler_name=$_POST['wheelerName'];
	  $manufacturer_name=$_POST['manufacturerName'];
      $model_no=$_POST['modelNo'];
	  $available_purchase=$_POST['purchase'];
      $available_hire=$_POST['hire'];
	  $pieces_available=$_POST['noAvailable'];
      $price_buying=$_POST['priceBuying'];
	  $price_hiring=$_POST['priceHiring'];
	  $description=$_POST['description'];
     
      $imgURL = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO wheelers_details (wheeler_image,wheeler_type,wheeler_name,manufacturer_name,model_no,available_purchase,available_hire,pieces_available,price_buying,price_hiring,description) VALUES ('$imgURL','$wheeler_type', '$wheeler_name', '$manufacturer_name', '$model_no', '$available_purchase', '$available_hire', '$pieces_available', '$price_buying', '$price_hiring', '$description')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Your Data Inserted Sucessfully")</script>';  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Destiny Wheels</title>  
		     <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
		   
		    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57.png">
        <link rel="shortcut icon" href="images/ico/favicon.ico">
		   
		   <link rel="stylesheet" type="text/css" href="css/Style4.css" />
      </head>  
      <body>  
	  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
   
    <ul class="nav navbar-nav">
      <li class="active"><a href="AdminHome.php">Home</a></li>
      <li><a href="Addcar2.php"><span class="glyphicon glyphicon"></span> Add Car</a></li>
      <li><a href="Modify_Car.php"><span class="glyphicon glyphicon"></span> Modify Car</a></li>
      <li><a href="AdminLogin.html"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
    </ul>
  </div>
</nav>
	  
           <div class="row">
    <div class="col-md-6 col-sm-12 col-lg-6 col-md-offset-3">
		<div class="panel panel-primary">
			<div class="panel-heading" style="color:black;"><center><b> Enter 2 Wheelers Details Here</center>
			</div>
			<div class="panel-body">
				<form method="post" enctype="multipart/form-data"> 
				<div class="form-group">
						<label for="gender">2 Wheeler Type</label>
						<select name="wheelerType" id="gender" class="form-control">
							<option selected>Scooty</option>
							<option>Motorcycle</option>
							
						</select>
						<span id="error_gender" class="text-danger"></span>
					</div>
				
					<div class="form-group">
						<label for="myName">Vehicle Name *</label>
						<input id="myName" name="wheelerName" class="form-control" type="text" data-validation="required">
						<span id="error_name" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="lastname">Manufacturer Name*</label>
						<input id="lastname" name="manufacturerName" class="form-control" type="text" data-validation="required">
						<span id="error_lastname" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="lastname">Model No*</label>
						<input id="lastname" name="modelNo" class="form-control" type="text" data-validation="required">
						<span id="error_lastname" class="text-danger"></span>
					</div>
					
					
					<div class="form-group">
						<label for="gender">Available For Purchase</label>
						<select name="purchase" id="gender" class="form-control">
							<option selected>Yes</option>
							<option>No</option>
							
						</select>
						<span id="error_gender" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="gender">Available For Hire</label>
						<select name="hire" id="gender" class="form-control">
							<option selected>Yes</option>
							<option>No</option>
							
						</select>
						<span id="error_gender" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="lastname">No of Wheeler Available for Hire*</label>
						<input id="lastname" name="noAvailable" class="form-control" type="text" data-validation="required">
						<span id="error_lastname" class="text-danger"></span>
					</div>
					
					<div class="form-group">
						<label for="lastname">Price For Buying*</label>
						<input id="lastname" name="priceBuying" class="form-control" type="text" data-validation="required">
						<span id="error_lastname" class="text-danger"></span>
					</div>
					
					<div class="form-group">
						<label for="lastname">Price For Renting*</label>
						<input id="lastname" name="priceHiring" class="form-control" type="text" data-validation="required">
						<span id="error_lastname" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="disc">Description</label>
						<textarea class="form-control" name="description" rows="3"></textarea>
					</div>
					<div class="form-group">
					<label for="disc">Choose 2 Wheeler Images </label>
					<input type="file" name="image" id="image" />  
					</div>
					
			     <input type="submit" name="insert" id="insert" value="Save" class="btn btn-info" />  
				</form>

			</div>
		</div>
	</div>
</div>
 <!--               <br />  
                <br />  
                <table class="table table-bordered">  
                     <tr>  
                     <th align="middle"><h4>Image</h4></th>  
                       
					 <th align="middle"><h4>CarName</h4></th>
                     <th align="middle"><h4>Details</h4></th>
	                </tr>
                <?php  
                $query = "SELECT * FROM wheelers_details ORDER BY id DESC";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
			         echo "<tr>";
                     echo '  
                            
                               "<td>"  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" />  
                               "</td>" 

                               						   
                         
                     '; 

                     echo "<td>".$row['Name']."</td>"; 
	                 echo "<td>".$row['Details']."</td>";						 
                }  
                ?>  
                </table> -->  
				
           </div> 
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  

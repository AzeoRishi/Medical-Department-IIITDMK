<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
	     <?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => idmp
		$conn = mysqli_connect("localhost", "root", "", "medical_department");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$Name = $_REQUEST['Name'];
		$ID = $_REQUEST['ID'];
		$Vaccine_type = $_REQUEST['Vaccine_type'];
		$Status = $_REQUEST['Status'];
		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO vaccination_status VALUES ('$Name',
			'$ID','$Vaccine_type','$Status')";
			
			
			if(mysqli_query($conn, $sql)){
			echo "<h3>Your Vaccination Status Is Stored";

			echo nl2br("\n$Name\n $ID\n "
				. "$Vaccine_type\n $Status");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>

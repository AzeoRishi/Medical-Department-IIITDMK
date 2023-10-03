<!DOCTYPE html>
<html>



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
		$Staff_ID = $_REQUEST['Staff_ID'];
		$Category = $_REQUEST['Category'];

		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO medical_staff VALUES ('$Staff_ID','$Name','$Category')";
			
			
			if(mysqli_query($conn, $sql)){
			echo "data stored in a database successfully";

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

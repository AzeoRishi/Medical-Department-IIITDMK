<!DOCTYPE html>
<html>



<body>
	<center>
	     <?php

		// servername => localhost
		// username => root
		// password => empty
		
		$conn = mysqli_connect("localhost", "root", "", "medical_department");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$Staff_ID = $_REQUEST['Staff_ID'];

        $records = mysqli_query($conn,"select * from medical_staff");
		 while($data = mysqli_fetch_array($records))
                {
                   if($Staff_ID==$data['Staff_ID']){
                      $sql="DELETE FROM medical_staff
                            WHERE Staff_ID='$data[Staff_ID]'";					  
				   }

			
				}	
			if(mysqli_query($conn, $sql)){
			echo "data deleted";


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

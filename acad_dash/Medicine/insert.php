<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
	  <?php
        $link = mysqli_connect("localhost", "root", "", "medical_department");
        $sql="";
// Check connection
       if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
       }
       $Name = $_REQUEST['Name'];
	   $Stock=$_REQUEST['Stock'];
	   $Demand=$_REQUEST['Demand'];
	   $sql = "INSERT INTO medicine VALUES ('$Name','$Stock','$Demand')";
			if(mysqli_query($link, $sql)){
		    echo "Updated data successfully\n";
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}

	mysqli_close($link);
   ?>
	</center>
</body>

</html>-
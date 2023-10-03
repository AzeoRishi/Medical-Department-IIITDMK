<!DOCTYPE html>
<html lang="en"> 
<head>
 <title>Modify Staff</title>
</head>
<style>

  label{
            cursor: pointer;
            display: inline-block;
            padding: 3px 6px;
            text-align: right;
            width: 150px;
            vertical-align: top;
        }
.container
{
	margin:0 auto;
	width:1500px;
	
	}
 .css{
	
    
    background:lightblue;
    padding: 10px;
	float:left;
	height:25px;
	margin: 10px 0px 0px 0px;
	
}
table{
	border-collapse:collapse;
	width;100%;
	color:rgb(97,90,169);
	font-family:monospace;
	font-size:25px;
	text-align:left;
	margin:0 auto;
	width:1500px;
}	
th{
	background-color:rgb(97,90,169);
	color:white;
}

</style>
<body style="background-color:lightblue">

 <table>
 <tr>
 <th>Staff ID</th>
  <th>Name</th>
   <th>Category</th>
   
</tr>
 <?php
 $conn = mysqli_connect("localhost", "root", "", "medical_department");
  if($conn === false){
  die("ERROR: Could not connect. ". mysqli_connect_error());
 }
 $sql="SELECT * from medical_staff";
 $result=$conn->query($sql);
 if($result-> num_rows > 0){
	 while($row=$result->fetch_assoc())
	 {
		 echo "<tr><td>".$row["Staff_ID"]."</td><td>".$row["Name"]."</td><td>".$row["Category"]."</td><tr>";
	 }
 echo "</table>";
 echo "<p class='css'> <a href='http://localhost/acad_dash/modify_staff/update_staff.php'><input type='submit' value='Update'></a></p>";
 echo "<p class='css'> <a href='http://localhost/acad_dash/modify_staff/delete_staff.php'><input type='submit' value='Delete'></a></p>";
} 
else { echo "0 results"; }


$conn->close();
 ?>
 </table>

</body>
</html
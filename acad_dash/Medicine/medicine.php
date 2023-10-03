<!DOCTYPE html>
<html lang="en"> 
<head>
 <title>Leave Page</title>
</head>
<style>
.container
{
	margin:0 auto;
	width:1500px;
	
	}
  label{
            cursor: pointer;
            display: inline-block;
            padding: 3px 6px;
            text-align: right;
            width: 150px;
            vertical-align: top;
        }
.btn-group .button {
  background-color: rgb(50,47,90);
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  float: left;
  
}


.btn-group .button:hover {
  background-color: rgb(97,90,169);
}
.back{
  /* The image used */
  background-image: url("banner.png"); 

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.myDiv1{
	
	background-color: #4CAF50;
	width:40%;
	position:absolute;
	top:10%;
	left:10%;
	
 }
.myDiv2{
	
	
	
	margin:50px 10px 0px 10px;
	
	
	
 }
 .border1{
		margin:50px 0px 0px 0px;
	background-color:rgb(50,47,90);
	width:100%;
	height:50px;
	float: left;
	
}
.border2{
		margin:0px 0px 50px 0px;
	background-color:rgb(50,47,90);
	width:100%;
	height:50px;
	float: center;
	
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
 <th>Name</th>
  <th>Stock</th>
   <th>Demand</th>
    
</tr>
 <?php
 $conn = mysqli_connect("localhost", "root", "", "Medical_Department");
  if($conn === false){
  die("ERROR: Could not connect. ". mysqli_connect_error());
 }
 $sql="SELECT Name,Stock,Demand from medicine";
 $result=$conn->query($sql);
 if($result-> num_rows > 0)
 {
	 while($row=$result->fetch_assoc())
	 {
		 echo "<tr><td>".$row["Name"]."</td><td>".$row["Stock"]."</td><td>".$row["Demand"]."</td><tr>";
	 }
 echo "</table>";
 echo "<p class='css'> <a href='http://localhost/acad_dash/medicine/insert_login.php'><input type='submit' value='Insert New medicine'></a></p>";
} 
else { echo "0 results"; }
$conn->close();
 ?>
 </table>

</body>
</html
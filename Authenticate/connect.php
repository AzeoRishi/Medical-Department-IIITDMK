<!DOCTYPE html>
<html>
<head><title>Insert Page page</title></head>
<style>
.format{
	color:rgb(50,47,90);
	background-color:lightblue;
	width:1000px;
	margin:100px 70px 50px 70px;
	height:450px;
	box-shadow: 10px 10px rgb(50,47,90);
	border-radius: 10px;
 }
 .container
{
	margin:0 auto;
	width:1500px;
	
	}
 .mycss{
	color: green;
    border:1px solid #000;
    background:lightblue;
    padding: 10px;
	width:50%;
	height:25px;
	margin: 300px 0px 0px 0px;
	
}
</style>
<body><center> 
 <?php
 $conn = mysqli_connect("localhost", "root", "", "Medical_Department");
 if($conn === false){
  die("ERROR: Could not connect. ". mysqli_connect_error());
 }
 $pswrd = $_REQUEST['Password'];
 $Email = $_REQUEST['Email'];
  
 $records = mysqli_query($conn,"select * from Credential");
 $k=0;
 while($data = mysqli_fetch_array($records))
 {
   if($Email==$data['Email'] && $pswrd==$data['Password']){
      $k++;
      echo "<p class ='mycss container'> Access allowed click to continue:  
	  <a href='http://localhost/student_dash/index_dash.php'> <input type='submit' value='Open Dashboard'> </a>
	  </p>";
     
      }
   else{
      continue;}  
 } 
 if($Email=="academics@iiitdm.ac.in" && $pswrd=="authentic321")
 {
	 $k=1;
	 echo "<p class ='mycss container'> Academics Access allowed click to continue to dashboard:  
	  <a href='http://localhost/acad_dash/index_dash.php'> <input type='submit' value='Open Dashboard'> </a>
	  </p>";
 }
 if($k==0){
	 echo "<p> Access Denied </p>";
   echo "Please re check your credentials";}
 mysqli_close($conn);
 ?>
 </center>
</body>
</html

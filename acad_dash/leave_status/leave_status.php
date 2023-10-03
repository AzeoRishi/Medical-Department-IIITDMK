<!DOCTYPE html>
<html>
<head>
	<title>Approve Status</title>
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
$Checkup_id = $_REQUEST['Checkup_id'];
$Leave_Status = $_REQUEST['Leave_Status'];
$records = mysqli_query($link,"select * from medical_leave");
$K=0;
while($data = mysqli_fetch_array($records))
 {
  if($Checkup_id==$data['Checkup_id']){
        $sql = "UPDATE medical_leave ". "SET Leave_Status = '$Leave_Status' "."WHERE Checkup_id= '$Checkup_id' " ;
        $retval = mysqli_query($link,$sql);
        $K++;
        if(! $retval ) {
        die('Could not update data: ' . mysqli_error());}
        else{
        echo "Updated data successfully\n";}
  }
}
if($K==0){
echo "Incorrect ckeckup id try again \n";
}
// Close connection
mysqli_close($link);
?>
	</center>
</body>

</html>
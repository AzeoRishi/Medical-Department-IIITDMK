<!DOCTYPE html>
<html>
<head><title>Connect Leave Page</title></head>
<body><center> 
 <?php
 $conn = mysqli_connect("localhost", "root", "", "Medical_Department");
 if($conn === false){
  die("ERROR: Could not connect. ". mysqli_connect_error());
 }
 
 $n=8;
function getName($n) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
  
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
  
    return $randomString;
}
 
 $Name = $_REQUEST['Name'];
 $College_id = $_REQUEST['College_id'];
 $Reason = $_REQUEST['Reason'];
 $Period = $_REQUEST['Period'];
 $Checkup_id= getName($n);
 $Approval='Unreviewed';
 $sql = "INSERT INTO Medical_Leave VALUES ('$Name','$College_id','$Reason','$Period','$Checkup_id','$Approval')";
 if(mysqli_query($conn, $sql)){
  echo "<h3> Your Leave Request Is Registered. Please make note of checkup id below</h3>";
  echo $Checkup_id;
 }
 else{echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);}
 mysqli_close($conn);
 ?>
 </center>
</body>
</html>

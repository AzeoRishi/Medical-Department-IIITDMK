<!DOCTYPE html>
<html lang="en"> 
<head>
 <title>Authentication Page</title>
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
	color:rgb(50,47,90);
	background-color:lightblue;
	width:1000px;
	margin:100px 70px 50px 70px;
	height:450px;
	box-shadow: 10px 10px rgb(50,47,90);
	border-radius: 10px;
 }
 
</style>
<body style="background-image:url('test6.jpg');">
 <center>
 
  <div class="myDiv2">
  <img src="logo1.png" alt="Show">
   <h1>IIITDM MEDICAL DEPARTMENT WELCOMES YOU!</h1>
   <form action="connect.php" method="post"> 
   <h3> <label for="Name">Name:</label>
   <input type="text" name="Name" id="Name"</p>
   <p><label for="Password">Password:</label>
   <input type="text" name="Password" id="Password"></p>
   <p><label for="Email">Email:</label>
   <input type="text" name="Email" id="Email"></p>
   <input type="submit" value="Login">
   
   <br>
   </form>
   </div>
   
 </center>
</body>
</html

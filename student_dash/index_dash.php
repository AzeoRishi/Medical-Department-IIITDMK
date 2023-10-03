<!DOCTYPE html>
<html>
<head>
 <title>General Dashboard</title>
<style>
.container
{
	margin:70px auto;
	width:1470px;
	}
	.border1{
		
	background-color:rgb(50,47,90);
	width:100%;
	height:50px;
	float: left;
	
}

.main{
	box-shadow: 10px 10px rgb(50,47,90);
	background-color:lightblue;
	border-radius: 30px 30px 30px 30px;
	height:550px;
	
}
.logo{
	
	text-align:center;
	margin:20px 0px 20px 0px;
}
.btns
{
width:1400px;
height:300px;
border-radius: 0px 30px 30px 0px;
background-color:rgb(209,238,245);
 padding:30px 0px 0px 0px;

}
.btn-group .button1 {
  background-color: rgb(50,47,90); /* Green */
  
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  cursor: pointer;
  border-radius: 0px 0px 0px 0px;
  width: 400px;
  display: block;
  
}
.btn-group .button2 {
  background-color: rgb(50,47,90); /* Green */
  
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  cursor: pointer;
  border-radius: 0px 30px 0px 0px;
  width: 400px;
  display: block;
 
}
.btn-group .button3 {
  background-color: rgb(50,47,90); /* Green */
 
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  cursor: pointer;
  border-radius: 0px 0px 30px 0px;
  width: 400px;
  display: block;
}
.btn-group .button1:hover {
  background-color: rgb(97,90,169);
}
.btn-group .button2:hover {
  background-color: rgb(97,90,169);
}
.btn-group .button3:hover {
  background-color: rgb(97,90,169);
}
.notice{
	
	float:right;
	margin: -200px 0px 50px 0px;
	font-family:HP Simplified;
	padding:10px 10px 0px 2px;
	color: rgb(85,80,152);
    text-align: right;
    text-decoration:none;
   font-size: 15px;
   display: inline-block;
  cursor: text;
  width:800px;
}
.display1{
	font-family:HP Simplified;
	padding:0px 4px 5px 4px;
	
  color: rgb(85,80,152);
  
  text-align: left;
  text-decoration:none;
  
  font-size: 15px;
  display: inline-block;
  
  cursor: text;
}
</style>
</head>

<body style="background-color:rgb(205,236,243)">


<div class="container">
<div class="main">
<div class="logo"> 
<img src="logo1.png" alt="Show">
</div>
<div class="btns">
<div class="btn-group">
<a href="http://localhost/student_dash/Medical_Leave/Applyleave.php">
  <button class="button2">Apply Medical Leave</button>
</a>
<a href="http://localhost/student_dash/enter_vacc/enter_vacc_login.php">
  <button class="button1">Enter Vaccination Status</button>
 </a>
 <a href="http://localhost/student_dash/update_vacc/update_login.php">
  <button class="button1">Update Vaccination Status</button>
 </a>
 <a href="http://localhost/student_dash/Status/request_status.php">
  <button class="button1">Check Medical Leave Status</button>
 </a>
 <a href="http://localhost/student_dash/medicine/medicine_std.php">
  <button class="button3">Medicine List</button>
   </a>
  <div class="notice">
 <h2>Notice Board</h2>
  <h class="display1">Update your vaccination status as soon as there is any update on your dose</h><br>
   <h class="display1">We are looking forward to help you</h><br>
    <h class="display1">We are planning for vaccination camp for our Staff and students</h><br>
	
	 <h class="display1">300 out of 1500 students are vaccinated in our college</h><br>
	 <h class="display1">in case of any technical glitch please inform academics so that we get notified</h><br>
 </div>
 </div>
 
 </div>
</div>
</div>
</body>

</html>
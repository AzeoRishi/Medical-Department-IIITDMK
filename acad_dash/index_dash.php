<!DOCTYPE html>
<html>
<head>
 <title>Academic Dashboard</title>
<style>
.container
{
	margin:50px auto;
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
	height:600px;
	
}
.logo{
	
	text-align:center;
	margin:20px 0px 20px 0px;
}
.btns
{
width:1400px;
height:350px;
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
  background-color: rgb(50,47,90); 
  
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
	margin: -300px 0px 50px 0px;
	font-family:HP Simplified;
	padding:10px 15px 100px 180px;
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
<a href="http://localhost/acad_dash/View_Medical/index_viewm.php">
  <button class="button2">View Medical Leave Data</button>
</a>
<a href="http://localhost/acad_dash/status/view_status.php">
  <button class="button1">View Vaccination Status Data</button>
 </a>
 <a href="http://localhost/acad_dash/Medicine/medicine.php">
  <button class="button1">View/Add Medicines</button>
 </a>
 <a href="http://localhost/acad_dash/update_medicine/Update_medicine_login.php">
  <button class="button1">Update Medicine Stock/Demand</button>
 </a>
 <a href="http://localhost/acad_dash/modify_staff/index_views.php">
  <button class="button1">View/Update/Delete Medical Staff</button>
 </a>
 <a href="http://localhost/acad_dash/leave_status/leave_status_login.php">
  <button class="button3">Approve/Reject Medical Leave</button>
   </a>
  <div class="notice">
 <h2>Instructions</h2>
  <h class="display1">You can view all medical leaves at a single place</h><br>
   <h class="display1">Using checkup id academics person can approve or reject a leave</h><br>
    <h class="display1">Medicine stock and demand can be updated</h><br>
	
	 <h class="display1">Academic person can view vaccination status of whole college</h><br>
	 <h class="display1">in case of any technical glitch please inform us</h><br>
 </div>
 </div>
 
 </div>
</div>
</div>
</body>

</html>
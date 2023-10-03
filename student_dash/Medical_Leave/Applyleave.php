<!DOCTYPE html>
<html lang="en"> 
<head>
 <title>Medical Leave</title>
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
.main{
	
margin:25px 10px 0px 10px;
	
	
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
	float: left;
	
}
 
</style>
<body style="background-color:lightblue">
 <center>
 <div class="border1">


<div class="btn-group container">
  <a href="http://localhost/student_dash/index_dash.php">
  <button class="button">Dashboard</button>
  </a>
</div>
</div>
  <div class="main container">
  <img src="logo1.png" alt="Show">
   <h1>Enter Details To Apply Leave</h1>
   <form action="connectleave.php" method="post"> 
   <h3> <label for="Name">Name:</label>
   <input type="text" name="Name" id="Name"</p>
   <p><label for="College_id">College Id:</label>
   <input type="text" name="College_id" id="College_id"></p>
   <label> Select Reason </label>  
   <select name="Reason">  
   <option>---Select Reason--</option>
   <option value = "Fever"> Fever   
   </option>  
   <option value = "Stomach Ache"> StomachAche   
   </option>  
   <option value = "Fracture"> Fracture  
   </option>  
   <option value = "Food Contamination"> Food Contamination
   </option> 
</option>  
   <option value = "Dengue"> Dengue
   </option>     
   </option>  
   <option value = "Malaria"> Maleria
   </option>  
   </option>  
   <option value = "Covid"> Covid
   </option>  
   </option>  
   <option value = "Flu"> Flu
   </option>  
   
   <option value = "Others"> Others  
   </option>  
   </select>  
   <p><label for="Period">Request Period:</label>
   <input type="text" name="Period" id="Period"></p>
   <br>
   <input type="submit" value="Apply">
   <br>
   </form>
   </div>
   <div class="border2">

</div>
 </center>
</body>
</html
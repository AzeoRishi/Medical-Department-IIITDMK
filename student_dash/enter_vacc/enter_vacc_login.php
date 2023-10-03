<!DOCTYPE html>
<html lang="en">

<head>
	<title>ENTER VACCINATION STATUS</title>
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
	
margin:0px 10px 0px 10px;
	
	
}
 .border1{
		margin:0px 0px 0px 0px;
	background-color:rgb(50,47,90);
	width:100%;
	height:50px;
	float: left;
	
}
.border2{
		margin:10px 0px -50px 0px;
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
		<h1>ENTER VACCINATION STATUS</h1>
		<form action="enter_vacc.php" method="post">
			
			
<p>
				<label for="Name">Name:</label>
				<input type="text" name="Name" id="Name">
			</p>



			
			
<p>
				<label for="ID">ID:</label>
				<input type="varchar" name="ID" id="">
			</p>



			
			
<p>
				<label for="Vaccine_type">Vaccine type:</label>
<br>			
                <input type="radio" name="Vaccine_type" id="Vaccine_type" value="Covishield">Covishield
<br>		     
                <input type="radio" name="Vaccine_type" id="Vaccine_type" value="Covaxin">Covaxin
<br>										
<input type="radio" name="Vaccine_type" id="Vaccine_type" value="Pfizer-BioNTech">Pfizer-BioNTech
<br>
                <input type="radio" name="Vaccine_type" id="Vaccine_type" value="None">None
			</p>
			
<p>
				<label for="Status">Status(no.of doses taken):</label>
<br>
				<input type="radio" name="Status" id="Status" value="One Dose">One Dose
<br>				
				<input type="radio" name="Status" id="Status" value="Two Doses">Two Doses
<br>				
				<input type="radio" name="Status" id="Status" value="No Dose">No Dose
			</p>


			
			<input type="submit" value="Save">
		</form>
		</div>
   <div class="border2">

</div>
	</center>

<?php
if(isset($_post['Vaccine_type'])){
echo "Vaccine used is" .$Vaccine_type.'<br/>';}
if(isset($_post['Status'])){
echo "Number of doses taken" .$Status.'<br/>';}
?>
</body>

</html>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>NEW STAFF DATA</title>
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
	text-align:center;
margin:50px 10px 0px 10px;
	
	
}
 .border1{
		margin:60px 0px 0px 0px;
	background-color:rgb(50,47,90);
	width:100%;
	height:50px;
	float: left;
	
}
.border2{
		margin:10px 0px 40px 0px;
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
  <a href="http://localhost/acad_dash/index_dash.php">
  <button class="button">Dashboard</button>
  </a>
</div>
</div>
  <div class="main container">
  <img src="logo1.png" alt="Show">
		<h1>NEW STAFF DATA</h1>
		<form action="u_status.php" method="post">
			
			
	
<p>
				<label for="Staff_ID">Staff ID:</label>
				<input type="varchar" name="Staff_ID" id="Staff_ID">
			</p>	
<p>
				<label for="Name">Name:</label>
				<input type="text" name="Name" id="Name">
			</p>					
<p>
				<label for="Category">Category:</label>			
                <input type="text" name="Category" id="Category">
			
			<input type="submit" value="Save">
		</form>
		</div>
		 <div class="border2">

</div>
	</center>
</body>

</html>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>Insert Medicine</title>
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
		<h1>Add New Medicine</h1>
		<form action="insert.php" method="post">
			
			
<p>
	<label for="Name">Enter Medicine Name:</label>
	<input type="text" name="Name" id="Name">
</p>
			
<p>
	<label for="Stock">Enter Stock:</label>
	<input type="text" name="Stock" id="Stock">
</p>
			
<p>
	<label for="Demand">Enter Demand:</label>
	<input type="text" name="Demand" id="Demand">
</p>
<input type="submit" value="Add">
		</form>
			</div>
   <div class="border2">

</div>
	</center>

</body>

</html>
<?php
require 'connection.php';
if(isset($_POST["submit"])){
	$empid= $_POST["empid"];
	$designation= $_POST["designation"];
	$password= $_POST["password"];
	$confirmpassword= $_POST["confirmpassword"];
	$duplicate=mysqli_query($conn,"SELECT *  FROM login WHERE empid='$empid'");
	if(mysqli_num_rows($duplicate)>0){
		echo "<script>alert('Password has been already generated');</script>";
	}
	else{
		if($password==$confirmpassword){
			$query="INSERT INTO login VALUES('$empid','$password','$designation')";
			mysqli_query($conn,$query);
			echo "<script>alert('Password generate Succesfully')</script>";
		}
		else{
			echo"<script>alert('Passwrod does not match')</script>";
		}
	}
}
?>
<!Doctype html>
<html lang="eng" dir="ltr">
<head>
    <link rel="stylesheet" href="styles.css">
	<meta charset="utf-8">
	<title>Registration</title>
		<style>
		label{
		width:100px;
		display:inline-block;
		margin:4px;
		}

		#form{
		margin-top:50px;
		margin-left:000px;
		border-radius: 10px;
		background:black;
		color:white;
		width:290px;
		padding:4px;
		display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
		align: center;
		}



	</style>
</head>
<body>
	<center>
 <div id="form">
	<h2>Password Generation</h2>
	<form class="" action="" method="post" autocomplete="off">
	<label for="empid">Employe Id:</label>
	<input type="int" name="empid" id="empid" required value=""></br>
	<label for="password">Password:</label>
	<input type="password" name="password" id="password" required value=""></br>
	<label for="confirmpassword">Confirm Password:</label>
	<input type="password" name="confirmpassword" id="confirmpassword" required value=""></br>

	<label for="designation">Designation:</label>
	<select id="designation" name="designation">
	<option value=" ">select</option>
    <option value="superviser">Superviser</option>
    <option value="employe">Employe</option>
    </select>
	<br>
	<button type="submit" name="submit">Register</button>
	</br>
	<a href="employee.php" style="color:white;" >Login</a>

	</div>
	</form>
</div>
</center>
</body>
</html>

<?php
require 'connection.php';
$empid = $_GET['employeid'];

if(isset($_POST["submit"])){
	date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d H:i:s');
	$issue = $_POST["issue"];

	$employeid = $_GET['employeid'];

	$description = $_POST["description"];
	$priority = $_POST["priority"];
	$query = "INSERT INTO ticket VALUES('','$employeid','$issue','$description','$priority','new','','','$date')";

	//INSERT INTO ticket SET name='Ankur', city='Noida'; 

	mysqli_query($conn,$query);
	header("Refresh:0; url= empdetail.php?employeid= $employeid");
	echo"<script>alert('Successfully redirecting after ok!')</script>";
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
		width:30px;
		display:inline-block;
		margin:50px;
		}

		#form{
		margin-top:20px;
		margin-left:000px;
		border-radius: 2px;
		background:black;
		color:white;
		width:400px;
		padding:10px;
		display: flex;
        flex-direction: column;
        align-items:left;
        text-align:left;
		align: center;
		}

	</style>
</head>
<body>
	<center>
 <div id="form">
 <center>
	<h2>Ticket Generation</h2>
</center>
	<form action	= " " method="post" autocomplete="off">
	<label for		= "issue">Issue:</label>
		<select id		= "issue" name="issue">
		<option value	= "select">select</option>
		<option value	= "hardware">Hardware</option>
		<option value	= "software">Software</option>
	</select>
	<br>
	<label for	="description">Description:</label>
	<textarea id="description" name="description" rows="4" cols="30"></textarea>
	<br>
	<label for	= "priority">Priority:</label>
	<select id	= "priority" name="priority">
		<option value	= "4-low">4-Low</option>
		<option value	= "3-medium">3-Medium</option>
		<option value	= "2-high">2-High</option>
		<option value	= "1-critical">1-Critical</option>
    </select>
	<br>
	<center>
	<button type="submit" name="submit" value ="submit">Submit</button>
	<br>
	<a href= "empdetail.php?employeid=<?php echo $empid; ?>" color ="white">go to previous menu</a>
	</center>
	</br>

	</div>
	</form>
</div>
</center>
</body>
</html>

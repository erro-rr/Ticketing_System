<!DOCTYPE html>
	<?php
		include 'connection.php';
		if (isset($_GET['employeid'])) {
			$empid= $_GET['employeid'];
			$sql="select * from employe where empid ='$empid'";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		}
	?>
<html lang="en">
	<head>
	    <link rel="stylesheet" href="styles.css">
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>ticket system help desk</title>
		<link rel="stylesheet" href="styles.css">
	</head>
	<style>
		 table,tr, th, td {
		 border: 1px solid black;
		 border-collapse:collapse;
		 }

		 .text{
			justify-content: center;
			align-items: center;
			margin: auto;
			width: 40%;
			border: 2px solid #139cb4;
			padding: 40px;
			background-color: rgb(139, 211, 211);
		 }
		 .btn {
			border: none;
			color: white;
			padding: 14px 28px;
			font-size: 16px;
			cursor: pointer;
			justify-content: center;
		 }




		 .flex-parent {
			display: flex;

		 }


		 .jc-center {
			justify-content: center;

		 }

		 button.margin-right {

			margin-right: 20px;
		 }
	</style>
<body>
        <center>
            <h1>Hello User!</h1>
        </center>

      <br>
      <div class="text">
		  <table style="width:100%">
			  <tr>
			  <th>EmpID</th>
			  <td> <?php echo $row['empid']; ?> </td>
			  </tr>
			  <tr>
			  <th>Name</th>
			  <td>  <?php echo $row['name']; ?> </td>
			  </tr>
			  <tr>
			  <th>Department</th>
			  <td><?php echo $row['department']; ?></td>
			  </tr>
			  <tr>
			  <th>System no </th>
			  <td> <?php echo $row['system']; ?></td>
			  </tr>
		  </table>
	  </div>
	  <hr>
	<div class="buttons">
     <form action= "generateticket.php?employeid= <?php echo $row['empid']; ?>" method="post">
      <button type="submit">GENERATE TICKET</button>
	  </form><br>
	  <form action="ticketstatus.php?employeid= <?php echo $row['empid']; ?>" method="post">
      <button type="submit">TICKET STATUS</button>
    </form>
	<br>
	<form action="index.php " method="post">
      <button type="submit">Logout</button>
    </form>
    </div>
</body>
</html>

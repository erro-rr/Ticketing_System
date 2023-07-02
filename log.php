<!DOCTYPE html>
<?php
include'connection.php';
$ticketid = $_GET['ticketid'];
?>

<html>
  <head>
    <title>TICKET LOG</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
      body {
        text-align: center;
      }
      h3 {
        font-size: 36px;
        margin-bottom: 30px;
      }
      button {
        background-color: blue;
        color: white;
        border-radius: 5px;
        padding: 5px 5px;
        margin: 2px;
        font-size: 12px;
        cursor: pointer;
      }
	  .container{
	  margin-top:50px;
	  margin-left:0020px;
	  }

    </style>
  </head>
 
  <body>
     <h3>TICKET LOG FOR: <?php echo $ticketid;?></h3>
<center>
<div class="container">
      <table class="table table-bordered">
       <thead>
	  <tr>
	     <th> LOG ID</th>
		 <th>ISSUE</th>
		 <th>priority</th>
		 <th>Status</th>
		 <th>Assigned group</th>
		 <th>Assigned Officer</th>
		 <th>Remarks</th>
		 <th>Date and time</th>
	   </tr>
    </thead>
<?php
$sql="SELECT * FROM logtable where ticketid = '$ticketid'";
$result=mysqli_query($conn,$sql);
 while($row=mysqli_fetch_assoc($result)){
	$id= $row['id'];
	$issue =  $row['issue'];
	$priority = $row['priority'];
	$status = $row['status'];
	$assignedgrp = $row['assignedgrp'];
	$assignedofficer = $row['assignedofficer'];
	$remarks = $row['remarks'];
	$date = $row['updatetime'];
	echo'<tr>
    <td>'.$id.'</td>
    <td>'.$issue.'</td>
    <td>'.$priority.'</td>
	<td>'.$status.'</td>
	<td>'.$assignedgrp.'</td>
	<td>'.$assignedofficer.'</td>
	<td>'.$remarks.'</td>
	<td>'.$date.'</td>
  </tr>';
 }
?>
     </table>
	 <button class="color- white"><a href="dashboard.php">previous menu</a></button>
</div>
</center>
</body>
</html>

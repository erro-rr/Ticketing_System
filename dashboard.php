<!DOCTYPE html>
	<?php
		include'connection.php';
	?>
  <head>
    <title>My Dashboard</title>
	<link rel="stylesheet" href="styles.css">
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
     <h3>Suppervisor dashboard</h3>
	 <form action="empregistration.php" method="post">
		<button type="submit">Register an EMP</button>
	 </form>
	 <form action="index.php" method="post">
		<button type="submit">LOGOUT</button>
	 </form>

	<center>
	<div class="container">
		<table class="table table-bordered">
		   <thead>
			  <tr>
				 <th>TicketID</th>
				 <th>Employee ID</th>
				 <th>ISSUE</th>
				 <th>Description</th>
				 <th>Status</th>
				 <th>Priority</th>
				 <th>created on</th>
				 <th>Operation</th>
			  </tr>
			</thead>
			<?php
				$sql="SELECT * FROM ticket";
				$result=mysqli_query($conn,$sql);
				 while($row=mysqli_fetch_assoc($result)){
					$ticketid= $row['ticketid'];
					$empid =  $row['empid'];
					$issue = $row['issue'];
					$description = $row['description'];
					$status = $row['status'];
					$priority = $row['priority'];
					$date = $row['created on'];
					echo'<tr>
					<td>'.$ticketid.'</td>
					<td>'.$empid.'</td>
					<td>'.$issue.'</td>
					<td>'.$description.'</td>
					<td>'.$status.'</td>
					<td>'.$priority.'</td>
					<td>'.$date.'</td>
					<td>
					<button><a href="showticket.php?ticketid='.$ticketid.' ">Update</a></button>
					<button><a href="log.php?ticketid= '.$ticketid.' ">Ticket Log</a></button>
					</td>
				  </tr>';
				 }
			?>
		</table>
	</div>
	</center>
  </body>
</html>

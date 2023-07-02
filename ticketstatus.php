<!DOCTYPE html>
<?php
include 'connection.php';
if (isset($_GET['employeid'])) {
	$empid= $_GET['employeid'];
	$sql="select * from ticket where empid= '$empid'";
	$result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$count = mysqli_num_rows($result);
	if ($count == 0) {
		echo "<script>alert( 'no ticket available') </script>";
  	     //header ("location:empdetail.php?employeid= $empid ");
		 header("Refresh:0; url= empdetail.php?employeid= $empid");
	}
}
?>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show ticket</title>
</head>

<body>
    <style>
        table,
        tr,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        .text {
            justify-content: center;
            align-items: center;
            margin: auto;
            width: 40%;
            border: 2px solid #535858;
            padding: 40px;
            background-color: rgb(200, 209, 209);
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
        

        
    </style>
    </head>

    <body>

        <script>
            function myFunction() {
                location.replace(" ")
            }
        </script>

        <center>
            <h1>Information regarding your tickets are given below!</h1>
        </center>

        <br>
        <div class="text">
		 <table style="width:100%">

		 <thead>
		  <tr>
			 <th>TicketID</th>
			 <th>Issue</th>
			 <th>Description</th>
			 <th>Status</th>
			 <th>priority</th>
			 <th>Assigned officer</th>
			 <th>created on</th>
		   </tr>
		  </thead>
<?php
	$sql="SELECT * FROM ticket where empid= '$empid'";
	$result=mysqli_query($conn,$sql);
	 while($row=mysqli_fetch_assoc($result)){
		$ticketid= $row['ticketid'];
		$empid =  $row['empid'];
		$issue = $row['issue'];
		$description = $row['description'];
		$status = $row['status'];
		$priority = $row['priority'];
		$assignedofficer = $row['assignedofficer'];
		$date = $row['created on'];
		echo'
			<tr>
            <td> '.$ticketid.'</td>
            <td> '.$empid.' </td>
			<td> '.$issue.'  </td>
            <td> '.$description.' </td>
            <td> '.$priority.'  </td>
            <td> '.$assignedofficer.'  </td>
            <td> '.$date.' </td>
			</tr>';
	 }
?>
               
            </table>
        </div>
        <br><center>
      <a href="empdetail.php?employeid= <?php echo $empid;?>"> click here to go back</a>
	  </center>
    </body>

</html>
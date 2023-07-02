<!DOCTYPE html>
<html>
<head>
  <title>Employee Login</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      margin-top: 50px;
    }

    form {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 20px;
      background-color: lightgray;
      border-radius: 5px;
      width: 30%;
    }

    label {
      margin-top: 10px;
    }

    input[type="text"], input[type="password"] {
      padding: 10px;
      margin-top: 10px;
      border-radius: 5px;
      border: none;
    }

    input[type="submit"] {
      padding: 10px 20px;
      margin-top: 20px;
      background-color: lightblue;
      border-radius: 5px;
      border: none;
      cursor: pointer;
    }
  </style>
</head>
 <body>
  <div class="container">
    <form action="" method="post">
      <label for="empid">Employee ID:</label>
      <input type="text" id="empid" name="empid"><br><br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password"><br><br>
      <input type="submit" value="Submit" name="submit">
    </form>
  </div>
    <div class="container signin">
      <footer>
      <p>not generated password yet? <a href="passwordgen.php"> generate password</a>.</p>
      </footer>
    
  </div>
 </body>
</html>

</body>
</html>
<?php
include ('connection.php');
if (isset($_POST["submit"])){
  $empid = $_POST['empid'];
  $password = $_POST['password'];

  $username = mysqli_real_escape_string ($conn, $empid);
  $passwords= mysqli_real_escape_string ($conn, $password);

  $querry = "select * from login where empid = '$username' and password = '$passwords'";
  $result = mysqli_query($conn, $querry);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);

  if ($count == 1) {
  	echo "<script>alert( 'Login successful') </script>";
  	header ("location:empdetail.php?employeid=$empid ");
  }
  else {
  	echo "<script>alert( 'Login failed. Invalid username or password.') </script>";
  }
}
?>

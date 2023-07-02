<!DOCTYPE html>
<html>
<head>
  <div class="title">
  <title>HELPDESK</title>
  </div>
  <link rel="stylesheet" href="styles.css">
  <style>
    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
	  margin-top:50px;
    }


   .logo {
      margin-top: 5px;
    }
    .buttons {
        display: flex;
        justify-content: space-between;
        width: 30%;
        margin-top: 50px;
        
      }
      button{
        padding: 10px 20px;
        border-radius: 5px;
        background-color: white;
      }

   
  </style>
</head>
<body>
  <div class="container">
    <div class="logo">
      <img src="" alt="">
    </div>
    <div class="buttons">
      <form action="employee.php" method="post">
      <button type="submit">EMPLOYEE</button>
	  </form>
	  <form action="suppervisor.php" method="post">
      <button type="submit">SUPERVISOR</button>
    </form>
    </div>
  </div>
</body>
</html>

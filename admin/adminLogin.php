<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
{
$id = $_POST['name'];
$pass = $_POST['pass'];
if(!empty($id) && !empty($pass) )
		{
      if($id==001 && $pass=="admin")
      {
        echo "<script> window.location.href='./adminHome.php'; </script>";
      }
      else
      {
        echo "Wrong ID or Password";
      }
    }else{
      echo "Empty ID or Password";
     } 
}
?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Simple Login Form Example</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-form">
  <form method="post">
    <h1>Admin Login</h1>
    <div class="content">
      <div class="input-field">
        <input type="text" name="name" placeholder="Email" autocomplete="nope">
      </div>
      <div class="input-field">
        <input type="password" name="pass" placeholder="Password" autocomplete="new-password">
      </div>
      <a href="#" class="link">Forgot Your Password?</a>
    </div>
    <div class="action">
      <button>Register</button>
      <button>Sign in</button>
    </div>
  </form>
</div>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>

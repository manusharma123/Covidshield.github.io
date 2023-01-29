<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_id = $_POST['name'];
		$password = $_POST['pass'];

		if(!empty($user_id) && !empty($password) )
		{

			//read from database
			$query = "select * from user_table where id = '$user_id' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['pass'] === $password)
					{

						$_SESSION['id'] = $user_data['id'];
						// $url='G:\MCA\XAMPP\htdocs\php program\php project 1\covid project\Index.php';
						// header("Location: ".$url);
						echo "<script> window.location.href='./Index.php'; </script>";
						die;
					}
				}
			}
			
			echo "Wrong username or password!";
		}else
		{
			echo "Empty username or password!";
		}
	}

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>User Login</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'><link rel="stylesheet" href="./css/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-form">
  <form method="POST">
    <h1>Login</h1>
    <div class="content">
      <div class="input-field">
        <input type="text" name="name" placeholder="ID" autocomplete="nope">
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

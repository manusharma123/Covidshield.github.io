<?php

session_start();
  include('connection.php');
	include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$name=$_POST['name'];
    $pass=$_POST['pass']; 
    $addr=$_POST['address']; 
    $email=$_POST['email']; 
    $phno=$_POST['phone']; 
    $status=$_POST['status'];
		if(!empty($name) && !empty($pass) && !is_numeric($name))
		{
      
			//save to database
			//$user_id = random_num(3);
			$query = "INSERT INTO `user_table` (`user_name`, `pass`, `phone_no`, `email`, `address`, `vaccin`) VALUES ('$name', '$pass', '$phno', '$email', '$addr', '$status')";

			mysqli_query($con, $query);

			//header("Location: ./Index.php");
			echo "<script> window.location.href='../Index.php'; </script>";
      die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Registration Form</title>
  <link rel='stylesheet'><link rel="stylesheet" href="./css/style1.css">
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>
<body>
<!-- partial:index.partial.html -->
<form method="POST">
  <section class="h-100 bg-dark">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"
                alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">User registration form</h3>

                <div class="form-outline mb-4">
                  <input type="text" name="name" class="form-control form-control-lg" required/>
                  <label class="form-label" for="form3Example8">Full name</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="pass" class="form-control form-control-lg" required/>
                  <label class="form-label" for="form3Example8">Password</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" name="address" class="form-control form-control-lg"required />
                  <label class="form-label" for="form3Example8">Address</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="email" name="email" class="form-control form-control-lg" required/>
                  <label class="form-label" for="form3Example8">Email</label>
                </div>
                
                <div class="form-outline mb-4">
                  <input type="text" name="phone" class="form-control form-control-lg" required/>
                  <label class="form-label" for="form3Example8">Phone no</label>
                </div>
                
                
                  <select class="form-select" name="status" aria-label="Default select example" required>
                    <option selected>Vaccine status</option>
                    <option value="Vaccined">Vaccined</option>
                    <option value="Not vaccined">Not vaccined</option>
                    <option value="Pending">Pending</option>
                  </select>
                  
                <div class="d-flex justify-content-end pt-3">
                  <button type="submit" class="btn btn-warning btn-lg ms-2">Submit form</button>
                </div>
                <div class="d-flex justify-content-end pt-3">
                  <button type="reset" class="btn btn-light btn-lg">Reset all</button>
                </div>
                

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>
<!-- partial -->


</body>
</html>

<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "covid";
$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}


if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$name=$_POST['hospitalName'];
    $hospitalAddress=$_POST['hospitalAddress']; 
    $vaccineavailable=$_POST['vaccineavailable'];
    if(!empty($name) )
		{
      
			//save to database
			//$user_id = random_num(3);
			$query = "INSERT INTO `add_hospital`(`Hospital_name`, `Hospital_address`, `vaccine_available`) VALUES ('$name','$hospitalAddress','$vaccineavailable')";

			mysqli_query($con, $query);

			//header("Location: ./Index.php");
			echo "<script> window.location.href='./adminHome.php'; </script>";
      die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Covid Test</title>
    
	<!-- Demo CSS (No need to include it into your project) -->
	<link rel='stylesheet' href='../user/css/demo.css'>
<style>
:root{
    --succes-color: #2ecc71;;
    --error-color: #e74c3c;
}
.container{
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.3);
    width: 400px;
    margin: 10px auto;
}

h2{
    text-align: center;
    margin: 0 0 20px;
}

.form{
    padding: 30px 40px;
}

.form-control{
    margin-bottom: 10px;
    padding-bottom: 20px;
    position: relative;
}

.form-control label{
    color:#777;
    display: block;
    margin-bottom: 5px; 
}
 
.form-control input
{
    border: 2px solid #f0f0f0;
    border-radius: 4px;
    display: block;
    width: 100%;
    padding: 10px;
    font-size: 14px;   
}

.form-control input:focus{
    outline: 0;
    border-color: #777;

}

.form-control.success input {
    border-color: var(--succes-color);
}

.form-control.error input {
    border-color: var(--error-color);    
}

.form-control small{
    color: var(--error-color);
    position: absolute;
    bottom: 0;
    left: 0;
    visibility: hidden;
}

.form-control.error small{
    visibility: visible;
}
.form button {
    cursor: pointer;
    background-color: #3498db;
    border: 2px solid #3498db;
    border-radius: 4px;
    color: #fff;
    display: block;
    padding: 10px;
    font-size: 16px;
    margin-top:20px;
    width:100%;
}
      
</style>
  </head>
  <body>
  
 <main>
 <div class='container'>
        <form id='form' class='form' method="post">
            <h2>Register With Us</h2>
            <div class='form-control'>
                <label for='username'>Username</label>
                <input type='text' id='username' name="hospitalName" placeholder="Hospital Name">
                <small>Error Message</small>
            </div>
            <div class='form-control'>
                <label for='email'>Address</label>
                <input type='text' id='email' name="hospitalAddress" placeholder='Address'required>
                <small>Error Message</small>
            </div>
            
            <div class='form-control'>
            <label for='email'>Vaccine available</label>
                <select class='form-select' name='vaccineavailable' aria-label='Default select example' required>
                    <option selected>choose</option>
                    <option value='yes'>yes</option>
                    <option value='no'>no</option>
                </select>
                <small>Error Message</small>
            </div>
            <button type='submit'>Submit</button>
        </form>
    </div>
 </main>
 
  

  </body>
</html>

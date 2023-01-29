<?php
session_start();

include("connection.php");
include("functions.php");
$user_data=check_login($con);

if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$n=$_POST['n'];
        $a=$_POST['a'];  
        $H=$_POST['H'];
        $P = $_POST['P'];
        $E = $_POST['E'];
		if(!empty($H))
		{
			//save to database
			//$user_id = random_num(3);
            $query="UPDATE `add_hospital` SET `user_Name`='$n',`addhar_number`='$a',`Phone_number`='$P',`email_id`='$E' WHERE Hospital_name='$H' ";

			mysqli_query($con, $query);

			//header("Location: ./Index.php");
			echo "<script> window.location.href='./Index.php'; </script>";
            die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}


?>
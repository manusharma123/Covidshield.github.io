<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "covid";
$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$con )
{

	die("failed to connect!");
}
include("functions.php");
  $user_data=check_login($con);

 // $id=$_POST['nid'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="CodeHim">
    <title>Custom Select Dropdown Example</title>
    
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
	<!-- Demo CSS (No need to include it into your project) -->
	<link rel="stylesheet" href="css/demo.css">
  
  </head>
  <body>
      <form method= "post" action="next.php">
 <main >
     <!-- Start DEMO HTML (Use the following code into your project)-->
<h1 style="text-align: center;">Covid Result</h1>
<div id="dropdown-wrapper" class="dropdown-wrapper" tabindex="1">
    <span>Choose User Id</span>


    <ul class="dropdown-list" name="userid" style="align:center">
      <?php
      $query = "select id from user_table where covid_status is NULL";

      $result = mysqli_query($con,$query);
      $total=mysqli_num_rows($result);
    if($total!=0)
    {
      
      while($row = mysqli_fetch_array($result))
      {
        echo"<li name='userid' value=".$row['id']."><a href=#>".$row['id']."</a></li>";
      }
    }
        

        ?>
    </ul>
   
</div>     
<input type="submit" style="background-color: red;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 10px 2px;
  cursor: pointer;" value="NEXT">
     <!-- END EDMO HTML (Happy Coding!)-->
 </main>
 
 
 </form>
  
  <!-- Script JS -->
  <script src="./js/script.js"></script>
   
  </body>
</html>
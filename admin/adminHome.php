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
<!-- Created By CodingNepal -->
<head>
   <meta charset="utf-8">
   <title>Welcome Admin</title>
   <link rel="stylesheet" href="project1css.css">
   <script src="https://code.jquery.com/jquery-3.4.1.js">
   </script>
   <style>
     table tr th {
      margin-left: 30px;
  background:gray;
  color:white;
  text-align:left;
  vertical-align:center;
}
   </style>


   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="background-image: url('../images/200309_d_hn545_003-15738.jpg'); background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;">
   <nav>
      <ul>
         <li class="logo">Covid App Admin</li>
         <li class="items"><a href="#">Home</a></li>
         <li class="items"><a href="../about us.html">About us</a></li>
         <li class="items"><a href="../contact us.html">Contact us</a></li>
         <li class="items"><a href="./Addhospital.php">Add Hospital</a></li>
         <li class="items"><a href="test.php">Give Covid Result</a></li>
         <li class="items"><a href="./vaccination.php">Vaccination</a></li>
         <li class="items"><a href="adminLogin.php">Logout</a></li>
         
         <li class="btn"><a href="#"><i class="fas fa-bars"></i></a></li>
      </ul>
   </nav>

   
  <div class="panel-body" style="margin-left: 200px">
      <table class="table table-bordered bordered table-striped table-condensed datatable" ui-jq="dataTable" ui-options="dataTableOpt">
      <thead>
        <tr>
          <th>Id</th>
          <th>User Name</th>
          <th>Phone number</th>
          <th>Email</th>
          <th>Address</th>
          <th>Vaccine status</th>
          <th>Covid status</th>
          <th>Addhar number</th>
          <th>RTPCR</th>
        </tr>
      </thead>
        <tbody>
        <?php
      $query = "select * from user_table where covid_status is NULL";

      $result = mysqli_query($con,$query);
      $total=mysqli_num_rows($result);
    if($total!=0)
    {
      
      while($row = mysqli_fetch_array($result))
      {
         echo" <tr style='color:white;'>
            <td>". $row['id']."</td>
            <td>". $row['user_name']."</td>
            <td>". $row['phone_no']."</td>
            <td>". $row['email']."</td>
            <td>". $row['address']."</td>
            <td>". $row['vaccin']."</td>
            <td>". $row['covid_status']."</td>
            <td>". $row['addhar_number']."</td>
            <td>". $row['RTPCR']."</td>
          </tr>";
         }
      }
          
  
          ?>
        </tbody>
    </table>
  </div>

   
   <script>
      $(document).ready(function(){
        $('.btn').click(function(){
          $('.items').toggleClass("show");
          $('ul li').toggleClass("hide");
        });
      });
   </script>
</body>
</html>
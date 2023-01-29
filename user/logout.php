<?php 
session_start(); /* Starts the session */
session_destroy(); /* Destroy started session */
echo "<script> window.location.href='../Index.php'; </script>";   /* Redirect to login page */
exit;
?>
<?php
session_start();
   $userpass= $_POST["password"];
   $username= $_POST["username"];

//    $conn=mysqli_connect("localhost","root");
    require(ROOT_PATH . '/app/database/connect.php');

   if(!$conn)
   {
       echo "connection failed";
   }
   else
   {
        mysqli_select_db($conn,"blog");

        $out_q="SELECT * FROM users WHERE username='$username' and password='$userpass'";

        $o=mysqli_query($conn,$out_q);

        $row = mysqli_fetch_array($o,MYSQLI_ASSOC);

        if(mysqli_num_rows($o) == 1)
        {
           $_SESSION["name"]=$row["username"];
           $_SESSION["status"]='a';
           header('location: ' . BASE_URL . '/index.php');
        }
        else
        {
            unset($_SESSION);
            session_destroy();
            echo "<script> alert('Wrong Username and Password combination!'); window.location.href='../php/login.php'; </script>";
        }
        mysqli_close($conn);
    }
?>
<?php
$conn=mysqli_connect("localhost","root", "", "library");

   if(!isset($_SESSION['adlogin']))
   {
        session_start();
    }
    
 ?>    
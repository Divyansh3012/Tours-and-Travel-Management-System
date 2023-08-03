<?php
$conn=mysqli_connect("localhost","root", "", "tourdb");

   if(!isset($_SESSION['adlogin']))
   {
        session_start();
    }
    
 ?>    
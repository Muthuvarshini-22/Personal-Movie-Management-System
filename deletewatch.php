<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('location: mainpage.php#popup1');
}


include('connectdb.php');
$id=$_REQUEST['id'];
$username=$_SESSION['username'];
$del = "DELETE  FROM watched WHERE movie_id= '$id' and username='$username'"; 
$result = $conn -> query($del);
header("Location:watcheddisplay.php"); 
$conn->close();
?>
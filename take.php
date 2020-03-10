<?php
   include_once('koneksi.php');
    session_start();
   
    $username = $_SESSION['username'];
   $query = mysqli_query($koneksi,"SELECT * FROM profile where username='$username'");
   $row_query = $query->fetch_assoc();

   $koneksi->close();

   
   
?>


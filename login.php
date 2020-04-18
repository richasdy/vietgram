<?php
    include_once('koneksi.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username ='$username'and password = '$password'";
    
    $result = $conn->query($sql);

    if(mysqli_num_rows($result) > 0){
        session_start();

        $_SESSION['username'] = $username;
        
        header("location: feed.php");
    }else {
        header("location: index.php");
    }

    $conn->close();
?>
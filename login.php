<?php 
    include 'connection.php';

    if ($_POST['submit']) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = mysqli_query($conn,"SELECT * FROM USERS WHERE USERNAME = '$username' AND PASSWORD = '$password'");
        $result = mysqli_num_rows($query);
        session_start();
        if ($result > 0) {
            $_SESSION['username'] = $username;
            $_SESSION['status'] = 'login';
            header('location:feed.php');
        } else {
            header('location:index.php?error=failed');
        }
    }
?>
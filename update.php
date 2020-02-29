<?php 
    include 'connection.php';

    session_start();
    if (isset($_POST['submit'])) {
        $user = $_GET['user'];
        $name = $_POST['name'];
        $username = $_POST['username'];
        $web = $_POST['website'];
        $bio = $_POST['bio'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $queryUser = mysqli_query($conn, "UPDATE USERS SET USERNAME = '$username', EMAIL = '$email' WHERE USERNAME = '$user'");
        $queryProfile = mysqli_query($conn, "UPDATE PROFILES SET NAME = '$name', WEBSITE = '$web', BIO = '$bio', PHONE_NUMBER = '$phone', GENDER = '$gender' WHERE USERNAME = '$username'");
        if ($queryUser && $queryProfile) {
            $_SESSION['username'] = $username;
            header('location:edit-profile.php');
            $_SESSION['status'] = 'success';
        } else
            echo "<script>alert('Update gagal!')</script>";
    }
?>
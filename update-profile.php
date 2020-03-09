<?php
    include_once('koneksi.php');

    $username = $_POST['username'];
    $name = $_POST['name'];
    $website = $_POST['website'];
    $bio = $_POST['bio'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $gender = $_POST['gender'];

    $sql="UPDATE profile SET name='$name',website='$website',bio='$bio',email='$email',phonenumber='$phonenumber',gender='$gender' WHERE username='$username'";
    $result = $conn->query($sql);
    // echo $result;
    header('location: profile.php');
?>
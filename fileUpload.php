<?php
    include_once('koneksi.php');
    session_start();
    $username = $_SESSION['username'];
    $caption = $_POST['caption'];
    //get file
    $target = "upload/";
    $nama_file = $_FILES["file-upload"]["name"];
    //move to upload/ folder
    $upload = move_uploaded_file($_FILES["file-upload"]["tmp_name"], $target.$nama_file);

    $query = "INSERT INTO PHOTO (username,url,caption,likes) values
              ('$username','$nama_file','$caption',0)";

    $result = $conn->query($query);
    $conn->close();
    
    header('location: feed.php');
?>

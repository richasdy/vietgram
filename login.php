<?php
    session_start();
    if(isset($_POST["login"])){
        include 'config.php';

        $username = $_POST["username"];
        $password = $_POST["password"];

        if($username == "" || $password == ""){
            echo "username and password must be filled!";
        }else{
            $sql = "SELECT * FROM Users where username = '$username' AND password = '$password'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0){
                $data = mysqli_fetch_assoc($result);
                $_SESSION['login'] = true;
                $_SESSION['user'] = $username;
                $_SESSION['uid'] = $data['id'];
                header("Location: feed.php");
            }else{
                header("Location: index.php");
            }
        }
    }
?>
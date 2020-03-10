<?php
    session_start();
    if(isset($_POST["submit"])){
        include 'config.php';

        $name = $_POST["fullName"];
        $username = $_POST["username"];
        $website = $_POST["website"];
        $bio = $_POST["bio"];
        $email = $_POST["email"];
        $phone_number = $_POST["phone"];
        $gender = $_POST["gender"];

        if($username == ""){
            echo "username must be filled!";
        }else{
            $sql = "UPDATE profiles SET 
                    username = '$username', 
                    name = '$name',
                    website = '$website',
                    bio = '$bio',
                    email = '$email',
                    phone_number = '$phone_number',
                    gender = '$gender'
                    WHERE id = '".$_SESSION['uid']."'
            ";
            $result = mysqli_query($conn, $sql);
            if($result){
                $_SESSION['user'] = $username;
                header("Location: profile.php");
            }else{
                echo "Update Failed";
            }

            $sql = "UPDATE Users SET 
                    username = '$username', 
                    email = '$email'
                    WHERE id = '".$_SESSION['uid']."'
            ";
            $result = mysqli_query($conn, $sql);
            if($result){
                header("Location: profile.php");
            }else{
                echo "Update Failed";
            }
        }
    }
?>
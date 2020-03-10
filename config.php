<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $name = 'instaClone';

    $conn = new mysqli($host, $username, $password, $name);
    if(!$conn){
        echo "Connection error!";
        exit();
    }
?>
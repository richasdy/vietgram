<?php 
    session_start();
    include 'config.php';
    if($_POST['upload']){
        $user = $_SESSION["uid"];
        $caption = $_POST["caption"];
        $location = $_POST["location"];
        $ekstensi_diperbolehkan	= array('png','jpg');
        $nama = $_FILES['file']['name'];
        $names= "uploads/".$nama;
        $x = explode('.', $nama);
        $ekstensi = strtolower(end($x));
        $ukuran	= $_FILES['file']['size'];
        $file_tmp = $_FILES['file']['tmp_name'];	

        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 1044070){			
                move_uploaded_file($file_tmp, 'uploads/'.$nama);
                $sql = "INSERT INTO photo (id, url, caption, location)
                        VALUES('$user', '$names', '$caption', '$location')";
                $result = mysqli_query($conn, $sql);
                if($result){
                    echo 'FILE BERHASIL DI UPLOAD';
                    header("Location: feed.php");
                }else{
                    echo 'GAGAL MENGUPLOAD GAMBAR';
                    // echo $user.$nama.$caption.$location;
                }
            }else{
                echo 'UKURAN FILE TERLALU BESAR';
            }
        }else{
            echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
        }
    }
?>
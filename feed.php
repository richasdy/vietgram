<?php
    session_start();
    include 'config.php';
    include 'date.php';
    if (!isset($_SESSION["login"])) {
        header("Location: index.php");
        exit;
    }
    $uid = $_SESSION["uid"];
    $sql = "SELECT * FROM photo";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        // echo "get data success";
        $data = array();
        while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }
    }else{
        echo "no data";
    }
    // $data = "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feed | <?= $_SESSION["user"];?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- script -->
   <script>
    $(document).ready(function(){
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $(".photo").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
    });
    </script>

</head>

<body>
    <nav class="navigation">
        <div class="navigation__column">
            <a href="feed.php">
                <!-- Master branch comment -->
                <img src="images/logo.png" />
            </a>
        </div>
        <div class="navigation__column">
            <i class="fa fa-search"></i>
            <input type="text" placeholder="Search" id="myInput" >
        </div>
        <div class="navigation__column">
            <ul class="navigations__links">
                <li class="navigation__list-item">
                    <a href="explore.php" class="navigation__link">
                        <i class="fa fa-compass fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="#" class="navigation__link">
                        <i class="fa fa-heart-o fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="profile.php" class="navigation__link">
                        <i class="fa fa-user-o fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="upload.php" class="navigation__link">
                        <i class="fa fa-upload fa-lg"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <main id="feed">
        <ul id="myUL">
        <?php foreach($data as $row){ ?>
                <?php 
                    $id = $row['id'];
                    $sql = "SELECT * from Users where id=$id";
                    $username = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result)>0){
                        // echo "get data success";
                        $name = mysqli_fetch_assoc($username);
                    }else{
                        echo "no data";
                    }
                ?>
                <li hidden><a href="#"><?php echo $row['caption']; ?></a></li>
                <div class="photo">
                    <header class="photo__header">
                        <img src="<?php echo $name['fotoProfile']; ?>" class="photo__avatar" />
                        <div class="photo__user-info">
                            <span class="photo__author"><?php echo $name['username']; ?></span>
                            <span class="photo__location"><?php echo $row['location']; ?></span>
                        </div>
                    </header>
                    <!-- photo feed -->
                    <img src=" <?php echo $row['url']; ?> " alt="<?php echo $row['url']; ?>" />
                    <div class="photo__info">
                        <div class="photo__actions">
                            <span class="photo__action">
                                <i class="fa fa-heart-o fa-lg"></i>
                            </span>
                            <span class="photo__action">
                                <i class="fa fa-comment-o fa-lg"></i>
                            </span>
                        </div>
                        <span class="photo__likes"><?php echo $row['like']; ?></span>
                        <span class="photo__caption" id="photoID"><?php echo $row['caption']; ?></span>
                        <br><br>
                        <ul class="photo__comments">
                            <li class="photo__comment">
                                <span class="photo__comment-author">OG_Redbull</span> love this!
                            </li>
                            <li class="photo__comment">
                                <span class="photo__comment-author">Team_Liquid</span> This is Awesome!
                            </li>
                        </ul>
                        <span class="photo__time-ago"><?= time_Ago($row['timeStamp']); ?></span>
                        <div class="photo__add-comment-container">
                            <textarea name="comment" placeholder="Add a comment..."></textarea>
                            <i class="fa fa-ellipsis-h"></i>
                        </div>
                    </div>
                </div>
                <!-- <?php $data = $data." ".$row['caption']; ?> -->
        <?php } ?>
        <!-- <div id="dataList"><?php echo $data?></div> -->
    </ul>
    </main>
    <footer class="footer">
        <div class="footer__column">
            <nav class="footer__nav">
                <ul class="footer__list">
                    <li class="footer__list-item"><a href="#" class="footer__link">About Us</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Support</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Blog</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Press</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Api</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Jobs</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Privacy</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Terms</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Directory</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Language</a></li>
                </ul>
            </nav>
        </div>
        <div class="footer__column">
            <span class="footer__copyright">© 2017 Vietgram</span>
        </div>
    </footer>

</body>

</html>
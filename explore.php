<?php
    session_start();
    include 'config.php';
    include 'date.php';
    if (!isset($_SESSION["login"])) {
        header("Location: index.php");
        exit;
    }
    $uid = $_SESSION["uid"];
    $sql = "SELECT * FROM profiles";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        // echo "get data success";
        $data = array();
        while($row = mysqli_fetch_array($result)){
            $data[] = $row;
        }
    }else{
        echo "no data";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Explore | <?= $_SESSION["user"];?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <nav class="navigation">
        <div class="navigation__column">
            <a href="feed.php">
                <img src="images/logo.png" />
            </a>
        </div>
        <div class="navigation__column">
                <i class="fa fa-search"></i>
            <input type="text" placeholder="Search">
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
    <main id="explore">
        <ul class="explore__users">
            <?php foreach($data as $row){ ?>
            <li class="explore__user">
                
                <div class="explore__user-column">
                    <img src="<?= $row['fotoProfile']; ?>" class="explore__avatar"/>
                    <div class="explore__info">
                        <span class="explore__username"><?= $row['username']; ?></span>
                        <span class="explore__full-name"><?= $row['name']; ?></span>
                    </div>
                </div>
                <div class="explore__user-column">
                    <button>Follow</button>
                </div>
            </li>
            <?php } ?>
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
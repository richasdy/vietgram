<?php
    session_start();
    include 'config.php';
    include 'date.php';
    if (!isset($_SESSION["login"])) {
        header("Location: index.php");
        exit;
    }
    $uid = $_SESSION["uid"];
    $sql = "SELECT * FROM Users where id = '$uid'";
    $detailUser = mysqli_query($conn, $sql);
    if(mysqli_num_rows($detailUser)>0){
        // echo "get data success";
        $dataInfo = mysqli_fetch_assoc($detailUser);
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
    <title>Edit Profile | <?= $_SESSION["user"];?></title>
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
            </ul>
        </div>
    </nav>
    <main id="edit-profile">
        <div class="edit-profile__container">
            <header class="edit-profile__header">
                <div class="edit-profile__avatar-container">
                    <img src="" class="edit-profile__avatar" />
                </div>
                <h4 class="edit-profile__username">Image Upload</h4>
            </header>
            <form action="uploadImg.php" method="post" enctype="multipart/form-data" class="edit-profile__form">
                <div class="form__row">
                    <label for="image" class="form__label">image:</label>
                    <input id="image" type="file" name="file" class="form__input" />
                </div>
                <div class="form__row">
                    <label for="caption" class="form__label">Caption:</label>
                    <input id="caption" type="text" name="caption" class="form__input" />
                </div>
                <div class="form__row">
                    <label for="location" class="form__label">Location:</label>
                    <input id="location" type="text" name="location" class="form__input" />
                </div>
                <input type="submit" name="upload" value="Submit">
            </form>
        </div>
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
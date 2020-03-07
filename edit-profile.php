<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profile | Vietgram</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <?php
        session_start();
        if (!isset($_SESSION['username']))
            header('location:index.php');
    ?>
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
            <form action="feed.php" method="get">
                <input type="text" placeholder="Search" name="search">
            </form>
        </div>
        <div class="navigation__column">
            <ul class="navigations__links">
                <li class="navigation__list-item">
                    <a href="explore.html" class="navigation__link">
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
                    <a href="logout.php" class="navigation__link">
                        <i class="fa fa-sign-out fa-lg"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <main id="edit-profile">
        <?php 
            include "connection.php";
            $username = $_SESSION['username'];
            $query = mysqli_query($conn,"SELECT * FROM PROFILES WHERE USERNAME = '$username'");
            $result = mysqli_fetch_array($query);
        ?>
        <div class="edit-profile__container">
            <header class="edit-profile__header">
                <div class="edit-profile__avatar-container">
                    <img src="images/avatar.jpg" class="edit-profile__avatar" />
                </div>
                <h4 class="edit-profile__username"><?php echo $result[0] ?></h4>
            </header>
            <form action="update.php?user=<?php echo $_SESSION['username'] ?>" method="POST" class="edit-profile__form">
                <div class="form__row">
                    <label for="full-name" class="form__label">Name:</label>
                    <input id="full-name" name="name" type="text" class="form__input" value="<?php echo $result[1] ?>" />
                </div>
                <div class="form__row">
                    <label for="user-name" class="form__label">Username:</label>
                    <input id="user-name" name="username" type="text" class="form__input" value="<?php echo $result[0] ?>" />
                </div>
                <div class="form__row">
                    <label for="website" class="form__label">Website:</label>
                    <input id="website" name="website" type="text" class="form__input" value="<?php echo $result[3] ?>" />
                </div>
                <div class="form__row">
                    <label for="bio" class="form__label">Bio:</label>
                    <textarea id="bio" name="bio"><?php echo $result[4] ?></textarea>
                </div>
                <div class="form__row">
                    <label for="email" class="form__label">Email:</label>
                    <input id="email" name="email" type="email" class="form__input" value="<?php echo $result[2] ?>" />
                </div>
                <div class="form__row">
                    <label for="phone" class="form__label">Phone Number:</label>
                    <input id="phone" name="phone" type="tel" class="form__input" value="<?php echo $result[5] ?>" />
                </div>
                <div class="form__row">
                    <label for="gender" class="form__label">Gender:</label>
                    <?php $gender = $result[6]; ?>
                    <select id="gender" name="gender">
                        <option value="male" <?php echo $gender == 'male' ? 'selected' : '' ?>>Male</option>
                        <option value="female" <?php echo $gender == 'female' ? 'selected' : '' ?>>Female</option>
                        <option value="cant" <?php echo $gender == 'cant' ? 'selected' : '' ?>>Can't remember</option>
                    </select>
                </div>
                <input type="submit" name="submit" value="Submit">
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
<style>
    .success-alert {
        justify-content: center;
        background-color: #4CAF50;
        padding: 20px;
        max-width: 760px;
        color: white;
        width: 100%;
        margin: auto;
        margin-top: 30px;
        margin-bottom: 30px;
    }
    .closebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 12px;
        cursor: pointer;
        transition: 0.3s;
    }
    .closebtn:hover {
        color: black;
    }
</style>
<?php
    if (isset($_SESSION['status'])) {
        if ($_SESSION['status'] == 'success') { ?>
            <script>
                $('<div class="success-alert"><span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span><span style="font-weight:bold">Success!</span> Your profile has been updated.</div>').insertBefore('#edit-profile');
            </script>
        <?php 
        unset($_SESSION['status']);
        }
    }
?>

</html>
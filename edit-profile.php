<?php
    session_start();

    include_once('koneksi.php');

    $username = $_SESSION['username'];
    
    $sql = "SELECT * from profile WHERE username='$username'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profile | Vietgram</title>
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
                    <img src="images/avatar.jpg" class="edit-profile__avatar" />
                </div>
                <h4 class="edit-profile__username"><?php echo $row['username']; ?></h4>
            </header>
            <form action="update-profile.php" method="POST" class="edit-profile__form">
                <div class="form__row">
                        <label for="user-name" class="form__label">Username:</label>
                        <input id="user-name" readonly name="username" type="text" value="<?php echo $row['username']; ?>" class="form__input" />
                </div>    
                <div class="form__row">
                    <label for="full-name" class="form__label">Name:</label>
                    <input id="full-name" name="name" type="text" value="<?php echo $row['name']; ?>" class="form__input" />
                </div>
                <div class="form__row">
                    <label for="website" class="form__label">Website:</label>
                    <input id="website" name="website" type="url" value="<?php echo $row['website']; ?>" class="form__input" />
                </div>
                <div class="form__row">
                    <label for="bio" class="form__label">Bio:</label>
                    <textarea name="bio" id="bio">
                        <?php 
                            echo $row['bio'];
                        ?>
                    </textarea>
                </div>
                <div class="form__row">
                    <label for="email" class="form__label">Email:</label>
                    <input id="email" name="email" type="email" value="<?php echo $row['email']; ?>" class="form__input" />
                </div>
                <div class="form__row">
                    <label for="phone" class="form__label">Phone Number:</label>
                    <input id="phone" name="phonenumber" type="tel" value="<?php echo $row['phonenumber']; ?>" class="form__input" />
                </div>
                <div class="form__row">
                    <label for="gender" class="form__label">Gender:</label>
                    <select name="gender" id="gender">
                        <?php 
                            if($row['gender'] == "L"){
                                    echo "<option selected value='L'>Male</option>";
                                    echo "<option value='P'>Female</option>";
                                    echo "<option value='cant'>Cant remember</option>";
                            }elseif($row['gender'] == "P"){
                                    echo "<option  value='L'>Male</option>";
                                    echo "<option selected value='P'>Female</option>";
                                    echo "<option value='cant'>Cant remember</option>";
                            }else {
                                    echo "<option  value='L'>Male</option>";
                                    echo "<option value='P'>Female</option>";
                                    echo "<option selected value='cant'>Cant remember</option>";
                            }
                        ?>
                    </select>
                </div>
                <input type="submit" value="Submit">
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
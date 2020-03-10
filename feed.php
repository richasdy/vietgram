<?php 
    session_start();

    if(!isset($_SESSION['username']) == true){
        header("location: index.php");
    }

    include_once('koneksi.php');

    $sql = "SELECT * FROM photo";
    $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feed | Vietgram</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
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
            <form action="feed.php" method="get">
                <input type="text" name="caption" placeholder="Search">
            </form>
        </div>
        <div class="navigation__column">
            <ul class="navigations__links">
                <li class="navigation__list-item">
                    <a href="#" data-toggle="modal" data-target="#uploadModal" class="navigation__link">
                        <i class="fa fa-upload fa-lg"></i>
                    </a>
                </li>
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
    <main id="feed">
        <?php
        if(!isset($_GET['caption'])){
            while($row = mysqli_fetch_assoc($result)){?>
                <div class="photo">
                    <header class="photo__header">
                        <img src="images/avatar.jpg" class="photo__avatar" />
                        <div class="photo__user-info">
                            <span class="photo__author">inthetiger</span>
                            <span class="photo__location">Bestechung</span>
                        </div>
                    </header>
                    <img src="<?php echo $row['url'] ?>" />
                    <div class="photo__info">
                        <div class="photo__actions">
                            <span class="photo__action">
                                <i class="fa fa-heart-o fa-lg"></i>
                            </span>
                            <span class="photo__action">
                                <i class="fa fa-comment-o fa-lg"></i>
                            </span>
                        </div>
                        <span class="photo__likes"><?php echo $row['likes'] ?> likes</span>
                        <div class="photo__caption"><?php echo $row['caption'] ?></div><br>
                        <ul class="photo__comments">
                            <li class="photo__comment">
                                <span class="photo__comment-author">serranoarevalo</span> love this!
                            </li>
                            <li class="photo__comment">
                                <span class="photo__comment-author">serranoarevalo</span> love this!
                            </li>
                            <li class="photo__comment">
                                <span class="photo__comment-author">serranoarevalo</span> love this!
                            </li>
                            <li class="photo__comment">
                                <span class="photo__comment-author">serranoarevalo</span> love this!
                            </li>
                        </ul>
                        <span class="photo__time-ago">2 hours ago</span>
                        <div class="photo__add-comment-container">
                            <textarea name="comment" placeholder="Add a comment..."></textarea>
                            <i class="fa fa-ellipsis-h"></i>
                        </div>
                    </div>
                </div>
        <?php }}
        else{
            $caption = $_GET['caption'];
            $sql = "SELECT * FROM photo WHERE caption like'%$caption%'";
            $result = $conn->query($sql);
            while($row = mysqli_fetch_assoc($result)){ 
        ?>
            <div class="photo">
                <header class="photo__header">
                    <img src="images/avatar.jpg" class="photo__avatar" />
                    <div class="photo__user-info">
                        <span class="photo__author">inthetiger</span>
                        <span class="photo__location">Bestechung</span>
                    </div>
                </header>
                <img src="<?php echo $row['url'] ?>" />
                <div class="photo__info">
                    <div class="photo__actions">
                        <span class="photo__action">
                            <i class="fa fa-heart-o fa-lg"></i>
                        </span>
                        <span class="photo__action">
                            <i class="fa fa-comment-o fa-lg"></i>
                        </span>
                    </div>
                    <span class="photo__likes"><?php echo $row['likes'] ?> likes</span>
                    <div class="photo__caption"><?php echo $row['caption'] ?></div><br>
                    <ul class="photo__comments">
                        <li class="photo__comment">
                            <span class="photo__comment-author">serranoarevalo</span> love this!
                        </li>
                        <li class="photo__comment">
                            <span class="photo__comment-author">serranoarevalo</span> love this!
                        </li>
                        <li class="photo__comment">
                            <span class="photo__comment-author">serranoarevalo</span> love this!
                        </li>
                        <li class="photo__comment">
                            <span class="photo__comment-author">serranoarevalo</span> love this!
                        </li>
                    </ul>
                    <span class="photo__time-ago">2 hours ago</span>
                    <div class="photo__add-comment-container">
                        <textarea name="comment" placeholder="Add a comment..."></textarea>
                        <i class="fa fa-ellipsis-h"></i>
                    </div>
                </div>
            </div>
    <?php }}
    ?>
    
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

    <!-- Modal -->
    <div id="uploadModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <h3>Post</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form action="fileUpload.php" method="post" enctype="multipart/form-data">
                            <div class="container-upload">
                                <input type="file" name="file-upload" id="file-upload" class="btn-style" required>
                            </div>
                            <br>
                            <br>
                            <label for="#caption">Caption:</label>
                            <div>
                                <TextArea name="caption" id="caption" class="md-textarea form-control"></TextArea>
                            </div>
                            <br><br>
                            <div class="text-right">
                                <input class="btn btn-primary" type="submit" name="upload" value="Post">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
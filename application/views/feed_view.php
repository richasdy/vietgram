<?php 
    if (isset($_GET['search'])) {
        include 'connection.php';
        $search = $_GET['search'];
        $query = mysqli_query($conn, "SELECT * FROM PHOTOS JOIN USERS USING(USERNAME) WHERE CAPTION LIKE '%$search%'");
        $result = mysqli_num_rows($query);
        if ($result > 0) {
            while ($res = mysqli_fetch_array($query)) { ?>
                <div class="photo">
                    <header class="photo__header">
                        <img src="<?= base_url('images/avatar.jpg') ?>" class="photo__avatar" />
                        <div class="photo__user-info">
                            <span class="photo__author"><?php echo $res['username'] ?></span>
                            <span class="photo__location">Bestechung</span>
                        </div>
                    </header>
                    <img src="<?php echo $res['url'] ?>" style="width: 100%" />
                    <div class="photo__info">
                        <div class="photo__actions">
                            <span class="photo__action">
                                <i class="fa fa-heart-o fa-lg"></i>
                            </span>
                            <span class="photo__action">
                                <i class="fa fa-comment-o fa-lg"></i>
                            </span>
                        </div>
                        <span class="photo__likes"><?php echo $res['likes'] ?> likes</span>
                        <!-- photo caption -->
                        <ul class="photo__comments"> 
                            <li class="photo__comment">
                                <span class="photo__comment-author"><?php echo $res['username'] ?></span> <?php echo $res['caption'] ?>
                            </li>
                        </ul>
                        <ul class="photo__comments photo__add-comment-container">
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
                </div> <?php
            }
        } else
            echo "<h6 class='lead'>No result for ". $_GET['search'] . "</h6>";
    } else { ?>
        <div class="photo">
            <header class="photo__header">
                <img src="<?= base_url('images/avatar.jpg') ?>" class="photo__avatar" />
                <div class="photo__user-info">
                    <span class="photo__author">inthetiger</span>
                    <span class="photo__location">Bestechung</span>
                </div>
            </header>
            <img src="<?= base_url('images/feedPhoto.jpg') ?>" />
            <div class="photo__info">
                <div class="photo__actions">
                    <span class="photo__action">
                        <i class="fa fa-heart-o fa-lg"></i>
                    </span>
                    <span class="photo__action">
                        <i class="fa fa-comment-o fa-lg"></i>
                    </span>
                </div>
                <span class="photo__likes">45 likes</span>
                <!-- photo caption -->
                <ul class="photo__comments"> 
                    <li class="photo__comment">
                        <span class="photo__comment-author">serranoarevalo</span> love this!
                    </li>
                </ul>
                <ul class="photo__comments photo__add-comment-container">
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
        <div class="photo">
            <header class="photo__header">
                <img src="<?= base_url('images/avatar.jpg') ?>" class="photo__avatar" />
                <div class="photo__user-info">
                    <span class="photo__author">inthetiger</span>
                    <span class="photo__location">Bestechung</span>
                </div>
            </header>
            <img src="<?= base_url('images/feedPhoto.jpg') ?>" />
            <div class="photo__info">
                <div class="photo__actions">
                    <span class="photo__action">
                        <i class="fa fa-heart-o fa-lg"></i>
                    </span>
                    <span class="photo__action">
                        <i class="fa fa-comment-o fa-lg"></i>
                    </span>
                </div>
                <span class="photo__likes">45 likes</span>
                <ul class="photo__comments">
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
        </div> <?php
    }
?>
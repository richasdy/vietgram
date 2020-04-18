    <main id="feed">
        <?php foreach ($post as $data) { ?>
            <div class="photo">
                <header class="photo__header">
                    <img src="<?php echo base_url() . 'assets/images/avatar.jpg' ?>" class="photo__avatar" />
                    <div class="photo__user-info">
                        <span class="photo__author">inthetiger</span>
                        <span class="photo__location">Bestechung</span>
                    </div>
                </header>
                <img src="<?php echo $data['photo'] ?>" />
                <div class="photo__info">
                    <div class="photo__actions">
                        <span class="photo__action">
                            <i class="fa fa-heart-o fa-lg"></i>
                        </span>
                        <span class="photo__action">
                            <i class="fa fa-comment-o fa-lg"></i>
                        </span>
                    </div>
                    <span class="photo__likes"><?php echo $data['likes'] ?></span>
                    <ul class="photo__comments">
                        <li class="photo__comment">
                            <span class="photo__comment-author"><?php echo $data['username'] ?></span> <?php echo $data['caption'] ?>
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
        <?php } ?>
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
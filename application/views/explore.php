    <main id="explore">
        <div class="container">
            <h6>Discover People</h6>
            <div class="row">
                <div class="card-deck">
                    <?php foreach ($users as $user) { ?>
                        <div class="card text-center" style="width: 12rem;">
                            <div class="card-body align-items-center">
                                <img class="p-3" style="border-radius:50%" ; width="100px" height="100px" src="<?php echo $user['photo'] ?>" class="explore__avatar" />
                                <h5 class="card-title" style="text-align: center"><?php echo $user['username'] ?></h5>
                                <a class="btn btn-primary" href="<?php base_url() . 'index.php/Explore_controller/followTo?person='.$user['username']?>">
                                    follow
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
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
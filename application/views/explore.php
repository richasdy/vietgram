<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Explore | Vietgram</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/styles.css' ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navigation">
        <div class="navigation__column">
            <a href="<?php echo base_url() . 'index.php/Feed_controller/index' ?>">
                <img src="<?php echo base_url() . 'assets/images/logo.png' ?>" />
            </a>
        </div>
        <div class="navigation__column">
            <i class="fa fa-search"></i>
            <input type="text" placeholder="Search">
        </div>
        <div class="navigation__column">
            <ul class="navigations__links">
                <li class="navigation__list-item">
                    <a href="<?php echo base_url() . 'index.php/Explore_controller/index'?>" class="navigation__link">
                        <i class="fa fa-compass fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="#" class="navigation__link">
                        <i class="fa fa-heart-o fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="<?php echo base_url() . 'index.php/Profile_controller/index' ?>" class="navigation__link">
                        <i class="fa fa-user-o fa-lg"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
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
                                <button class="btn btn-primary">follow</button>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- <ul class="explore__users">
            <li class="explore__user">
                <div class="explore__user-column">
                    <img src="<?php echo base_url() . 'assets/images/avatar.jpg' ?>" class="explore__avatar" />
                    <div class="explore__info">
                        <span class="explore__username">inthetiger</span>
                        <span class="explore__full-name">Lynn Park</span>
                    </div>
                </div>
                <div class="explore__user-column">
                    <button>Follow</button>
                </div>
            </li>
            <li class="explore__user">

                <div class="explore__user-column">
                    <img src="<?php echo base_url() . 'assets/images/avatar.jpg' ?>" class="explore__avatar" />
                    <div class="explore__info">
                        <span class="explore__username">inthetiger</span>
                        <span class="explore__full-name">Lynn Park</span>
                    </div>
                </div>
                <div class="explore__user-column">
                    <button>Follow</button>
                </div>
            </li>
            <li class="explore__user">

                <div class="explore__user-column">
                    <img src="<?php echo base_url() . 'assets/images/avatar.jpg' ?>" class="explore__avatar" />
                    <div class="explore__info">
                        <span class="explore__username">inthetiger</span>
                        <span class="explore__full-name">Lynn Park</span>
                    </div>
                </div>
                <div class="explore__user-column">
                    <button>Follow</button>
                </div>
            </li>
        </ul> -->
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
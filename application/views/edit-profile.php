    <main id="edit-profile">
        <div class="edit-profile__container">
            <header class="edit-profile__header">
                <div class="edit-profile__avatar-container">
                    <img src="<?php echo $user['photo'] ?>" class="edit-profile__avatar" />
                </div>
                <h4 class="edit-profile__username"><?php echo $user['username'] ?></h4>
            </header>
            <form action="<?php echo base_url().'index.php/EditProfile_controller/updateUser'?>" method="post" class="edit-profile__form">
                <div class="form__row">
                    <label for="full-name" class="form__label">Name:</label>
                    <input id="full-name" name="full-name" type="text" class="form__input" value="<?php echo $user['fullname'] ?>" />
                </div>
                <div class="form__row">
                    <label for="user-name" class="form__label">Username:</label>
                    <input id="user-name" name="user-name" type="text" class="form__input" value="<?php echo $user['username'] ?>" disabled />
                </div>
                <div class="form__row">
                    <label for="website" class="form__label">Website:</label>
                    <input id="website" name="website" type="url" class="form__input" value="<?php echo $user['website'] ?>" />
                </div>
                <div class="form__row">
                    <label for="bio" class="form__label">Bio:</label>
                    <textarea id="bio" name="bio" ><?php echo $user['bio'] ?></textarea>
                </div>
                <div class="form__row">
                    <label for="email" class="form__label">Email:</label>
                    <input id="email" name="email" type="email" class="form__input" value="<?php echo $user['email'] ?>" />
                </div>
                <div class="form__row">
                    <label for="phone" class="form__label">Phone Number:</label>
                    <input id="phone" name="phone" type="tel" class="form__input" value="<?php echo $user['phone_number'] ?>" />
                </div>
                <div class="form__row">
                    <label for="gender" class="form__label">Gender:</label>
                    <select id="gender" name="gender">
                        <?php if ($user['gender'] == 'L') { ?>
                            <option selected value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="cant">Can't remember</option>
                        <?php } else if ($user['gender'] == 'P') { ?>
                            <option value="male">Male</option>
                            <option selected value="female">Female</option>
                            <option value="cant">Can't remember</option>
                        <?php } else { ?>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="cant">Can't remember</option>
                        <?php } ?>
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
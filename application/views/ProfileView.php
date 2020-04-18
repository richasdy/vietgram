<header class="profile__header">
    <div class="profile__column">
        <img src="<?= base_url('images/avatar.jpg') ?>" />
    </div>
    <div class="profile__column">
        <div class="profile__title">
            <h3 class="profile__username"><?= $profile->username ?></h3>
            <a href="<?= base_url('user/edit_profile') ?>">Edit profile</a>
            <i class="fa fa-cog fa-lg"></i>
        </div>
        <ul class="profile__stats">
            <li class="profile__stat">
                <span class="stat__number">333</span> posts
            </li>
            <li class="profile__stat">
                <span class="stat__number">1234</span> followers
            </li>
            <li class="profile__stat">
                <span class="stat__number">36</span> following
            </li>
        </ul>
        <p class="profile__bio">
            <span class="profile__full-name">
                <?= $profile->name ?>
            </span> <?= $profile->bio ?>
            <a href="https://<?= $profile->website ?>" target="_blank"><?= $profile->website ?></a>
        </p>
    </div>
</header>
<section class="profile__photos">
    <?php foreach ($photos as $photo): ?>
        <div class="profile__photo">
            <img src="<?= $photo->url ?>" style="width: 100%;height: 296px"/>
            <div class="profile__photo-overlay">
                <span class="overlay__item">
                    <i class="fa fa-heart"></i>
                    <?= $photo->likes ?>
                </span>
                <span class="overlay__item">
                    <i class="fa fa-comment"></i>
                    344
                </span>
            </div>
        </div>
    <?php endforeach ?>
</section>
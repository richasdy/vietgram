<div class="edit-profile__container">
    <header class="edit-profile__header">
        <div class="edit-profile__avatar-container">
            <img src="<?= base_url('images/avatar.jpg') ?>" class="edit-profile__avatar" />
        </div>
        <h4 class="edit-profile__username"><?= $profile->username ?></h4>
    </header>
    <form action="" method="POST" class="edit-profile__form">
        <div class="form__row">
            <label for="full-name" class="form__label">Name:</label>
            <input id="full-name" name="name" type="text" class="form__input" value="<?= $profile->name ?>" />
        </div>
        <div class="form__row">
            <label for="user-name" class="form__label">Username:</label>
            <input id="user-name" name="username" type="text" class="form__input" value="<?= $profile->username ?>" />
        </div>
        <div class="form__row">
            <label for="website" class="form__label">Website:</label>
            <input id="website" name="website" type="text" class="form__input" value="<?= $profile->website ?>" />
        </div>
        <div class="form__row">
            <label for="bio" class="form__label">Bio:</label>
            <textarea id="bio" name="bio"><?= $profile->bio ?></textarea>
        </div>
        <div class="form__row">
            <label for="email" class="form__label">Email:</label>
            <input id="email" name="email" type="email" class="form__input" value="<?= $profile->email ?>" />
        </div>
        <div class="form__row">
            <label for="phone" class="form__label">Phone Number:</label>
            <input id="phone" name="phone" type="tel" class="form__input" value="<?= $profile->phone_number ?>" />
        </div>
        <div class="form__row">
            <label for="gender" class="form__label">Gender:</label>
            <?php $gender = $profile->gender; ?>
            <select id="gender" name="gender">
                <option value="male" <?php echo $gender == 'male' ? 'selected' : '' ?>>Male</option>
                <option value="female" <?php echo $gender == 'female' ? 'selected' : '' ?>>Female</option>
                <option value="cant" <?php echo $gender == 'cant' ? 'selected' : '' ?>>Can't remember</option>
            </select>
        </div>
        <input type="submit" name="submit" value="Submit">
    </form>
</div>
<script>
    $(document).ready(function() {
        $('form').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: '<?= base_url('user/updateProfile') ?>',
                data: $('form').serialize(),
                type: 'post',
                dataType: 'json',
                success: function (data) {
                    if (data.status == 'error') {
                        Swal.fire({
                            title: 'Update Profile Error!',
                            text: data.message,
                            icon: 'error',
                        })
                    } else {
                        Swal.fire({
                            title: 'Success!',
                            text: 'Profile Successfully Updated',
                            icon: 'success',
                        })
                        onUpdateSuccess();
                    }
                }
            });
        });

        function onUpdateSuccess() {
            $.ajax({
                url: '<?= base_url('user/getProfile') ?>',
                dataType: 'json',
                success: function (data) {
                    $('.edit-profile__username').html(data.username);
                }
            }); 
        }
    })
</script>
<div class="container">
    <h1>LoginController/editUsername</h1>

    <?php $this->renderFeedbackMessages(); ?>

    <div class="box">
        <h2>Change your username</h2>

        <form action="<?php echo Config::get('URL'); ?>login/editUserName_action" method="post">
            <label>
                New username: <input type="text" name="user_name" required />
            </label>
			<input type="hidden" name="csrf_token" value="<?= Csrf::makeToken(); ?>" />
            <input type="submit" value="Submit" />
        </form>
    </div>
</div>

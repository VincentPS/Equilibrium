<div class="container">
    <h1>Request a password reset</h1>
    <div class="box">

        <?php $this->renderFeedbackMessages(); ?>

        <form method="post" action="<?php echo Config::get('URL'); ?>login/requestPasswordReset_action">
            <label>
                Enter your username or email and you'll get a mail with instructions:
                <input type="text" name="user_name_or_email" required />
            </label>
            <input type="submit" value="Send me a password-reset mail" />
        </form>

    </div>
</div>

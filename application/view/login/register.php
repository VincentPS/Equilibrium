<?php $this->renderFeedbackMessages(); ?>
<div class="register-page-box">
    <div class="register-table-wrapper">
        <div class="register-box">
            <h2>Register a new account</h2>
            <form method="post" action="<?php echo Config::get('URL'); ?>login/register_action">
                <input type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" placeholder="Username (letters/numbers, 2-64 chars)" required />
                <input type="text" name="user_email" placeholder="email address (a real address)" required />
                <input type="password" name="user_password_new" pattern=".{6,}" placeholder="Password (6+ characters)" required autocomplete="off" />
                <input type="password" name="user_password_repeat" pattern=".{6,}" required placeholder="Repeat your password" autocomplete="off" />

                <img id="captcha" src="<?php echo Config::get('URL'); ?>login/showCaptcha" />
                <input type="text" name="captcha" placeholder="Please enter above characters" required />

                <a href="#" style="display: block; font-size: 11px; margin: 5px 0 15px 0; text-align: center"
                   onclick="document.getElementById('captcha').src = '<?php echo Config::get('URL'); ?>login/showCaptcha?' + Math.random(); return false">Reload Captcha</a>

                <input type="submit" value="Register" />
            </form>
        </div>
    </div>
</div>

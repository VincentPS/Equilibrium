<?php

error_reporting(-1);
ini_set("display_errors", 1);

ini_set('session.cookie_httponly', 1);

return array(
	
	'URL' => 'http://' . $_SERVER['HTTP_HOST'] . str_replace('public', '', dirname($_SERVER['SCRIPT_NAME'])),
	
	'PATH_CONTROLLER' => realpath(dirname(__FILE__).'/../../') . '/application/controller/',
	'PATH_VIEW' => realpath(dirname(__FILE__).'/../../') . '/application/view/',
	
	'PATH_AVATARS' => realpath(dirname(__FILE__).'/../../') . '/public/avatars/',
	'PATH_AVATARS_PUBLIC' => 'avatars/',
	
	'DEFAULT_CONTROLLER' => 'login',
	'DEFAULT_ACTION' => 'index',
	
	'DB_TYPE' => 'mysql',
	'DB_HOST' => '127.0.0.1',
	'DB_NAME' => 'equilibrium',
	'DB_USER' => 'root',
	'DB_PASS' => '',
	'DB_PORT' => '3306',
	'DB_CHARSET' => 'utf8',
	
	'CAPTCHA_WIDTH' => 359,
	'CAPTCHA_HEIGHT' => 100,
	
	'COOKIE_RUNTIME' => 1209600,
	'COOKIE_PATH' => '/',
    'COOKIE_DOMAIN' => "",
    'COOKIE_SECURE' => false,
    'COOKIE_HTTP' => true,
    'SESSION_RUNTIME' => 604800,
	
	'USE_GRAVATAR' => false,
	'GRAVATAR_DEFAULT_IMAGESET' => 'mm',
	'GRAVATAR_RATING' => 'pg',
	'AVATAR_SIZE' => 44,
	'AVATAR_JPEG_QUALITY' => 85,
	'AVATAR_DEFAULT_IMAGE' => 'default.jpg',
    
    'ENCRYPTION_KEY' => '6#x0gÊìf^25cL1f$08&',
    'HMAC_SALT' => '8qk9c^4L6d#15tM8z7n0%',
	
	'EMAIL_USED_MAILER' => 'phpmailer',
	'EMAIL_USE_SMTP' => true,
	'EMAIL_SMTP_HOST' => '127.0.0.1',
	'EMAIL_SMTP_AUTH' => false,
	'EMAIL_SMTP_USERNAME' => '',
	'EMAIL_SMTP_PASSWORD' => '',
	'EMAIL_SMTP_PORT' => 25,
	'EMAIL_SMTP_ENCRYPTION' => 'false',
	
	'EMAIL_PASSWORD_RESET_URL' => 'login/verifypasswordreset',
	'EMAIL_PASSWORD_RESET_FROM_EMAIL' => 'no-reply@equilibrium.com',
	'EMAIL_PASSWORD_RESET_FROM_NAME' => 'Equilibrium',
	'EMAIL_PASSWORD_RESET_SUBJECT' => 'Password reset for Equilibrium',
	'EMAIL_PASSWORD_RESET_CONTENT' => 'Please click on this link to reset your password: ',
	'EMAIL_VERIFICATION_URL' => 'login/verify',
	'EMAIL_VERIFICATION_FROM_EMAIL' => 'no-reply@equilibrium.com',
	'EMAIL_VERIFICATION_FROM_NAME' => 'Equilibrium',
	'EMAIL_VERIFICATION_SUBJECT' => 'Account activation for Equilibrium',
	'EMAIL_VERIFICATION_CONTENT' => 'Please click on this link to activate your account: ',
);

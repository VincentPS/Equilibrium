<?php

class LoginController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if (LoginModel::isUserLoggedIn()) {
            Redirect::home();
        } else {
            $data = array('redirect' => Request::get('redirect') ? Request::get('redirect') : NULL);
            $this->View->render('login/index', $data);
        }
    }

    public function login()
    {
        if (!Csrf::isTokenValid()) {
            self::logout();
        }

        $login_successful = LoginModel::login(
            Request::post('user_name'), Request::post('user_password'), Request::post('set_remember_me_cookie')
        );

        if ($login_successful) {
            if (Request::post('redirect')) {
                Redirect::to(ltrim(urldecode(Request::post('redirect')), '/'));
            } else {
                Redirect::to('login/showProfile');
            }
        } else {
            Redirect::to('login/index');
        }
    }

    public function logout()
    {
        LoginModel::logout();
        Redirect::home();
        exit();
    }

    public function loginWithCookie()
    {
         $login_successful = LoginModel::loginWithCookie(Request::cookie('remember_me'));

        if ($login_successful) {
            Redirect::to('dashboard/index');
        } else {
            LoginModel::deleteCookie();
            Redirect::to('login/index');
        }
    }

    public function showProfile()
    {
        Auth::checkAuthentication();
        $this->View->render('login/showProfile', array(
            'user_name' => Session::get('user_name'),
            'user_email' => Session::get('user_email'),
            'user_gravatar_image_url' => Session::get('user_gravatar_image_url'),
            'user_avatar_file' => Session::get('user_avatar_file'),
            'user_account_type' => Session::get('user_account_type')
        ));
    }

    public function editUsername()
    {
        Auth::checkAuthentication();
        $this->View->render('login/editUsername');
    }

    public function editUsername_action()
    {
        Auth::checkAuthentication();

        if (!Csrf::isTokenValid()) {
            self::logout();
        }

        UserModel::editUserName(Request::post('user_name'));
        Redirect::to('login/index');
    }

    public function editUserEmail()
    {
        Auth::checkAuthentication();
        $this->View->render('login/editUserEmail');
    }

    public function editUserEmail_action()
    {
        Auth::checkAuthentication();
        UserModel::editUserEmail(Request::post('user_email'));
        Redirect::to('login/editUserEmail');
    }

    public function editAvatar()
    {
        Auth::checkAuthentication();
        $this->View->render('login/editAvatar', array(
            'avatar_file_path' => AvatarModel::getPublicUserAvatarFilePathByUserId(Session::get('user_id'))
        ));
    }

    public function uploadAvatar_action()
    {
        Auth::checkAuthentication();
        AvatarModel::createAvatar();
        Redirect::to('login/editAvatar');
    }

    public function deleteAvatar_action()
    {
        Auth::checkAuthentication();
        AvatarModel::deleteAvatar(Session::get("user_id"));
        Redirect::to('login/editAvatar');
    }

    public function changeUserRole()
    {
        Auth::checkAuthentication();
        $this->View->render('login/changeUserRole');
    }

    public function changeUserRole_action()
    {
        Auth::checkAuthentication();

        if (Request::post('user_account_upgrade')) {
            UserRoleModel::changeUserRole(2);
        }

        if (Request::post('user_account_downgrade')) {
            UserRoleModel::changeUserRole(1);
        }

        Redirect::to('login/changeUserRole');
    }

    public function register()
    {
        if (LoginModel::isUserLoggedIn()) {
            Redirect::home();
        } else {
            $this->View->render('login/register');
        }
    }

    public function register_action()
    {
        $registration_successful = RegistrationModel::registerNewUser();

        if ($registration_successful) {
            Redirect::to('login/index');
        } else {
            Redirect::to('login/register');
        }
    }

    public function verify($user_id, $user_activation_verification_code)
    {
        if (isset($user_id) && isset($user_activation_verification_code)) {
            RegistrationModel::verifyNewUser($user_id, $user_activation_verification_code);
            $this->View->render('login/verify');
        } else {
            Redirect::to('login/index');
        }
    }

    public function requestPasswordReset()
    {
        $this->View->render('login/requestPasswordReset');
    }

    public function requestPasswordReset_action()
    {
        PasswordResetModel::requestPasswordReset(Request::post('user_name_or_email'));
        Redirect::to('login/index');
    }

    public function verifyPasswordReset($user_name, $verification_code)
    {
        if (PasswordResetModel::verifyPasswordReset($user_name, $verification_code)) {
            $this->View->render('login/resetPassword', array(
                'user_name' => $user_name,
                'user_password_reset_hash' => $verification_code
            ));
        } else {
            Redirect::to('login/index');
        }
    }

    public function setNewPassword()
    {
        PasswordResetModel::setNewPassword(
            Request::post('user_name'), Request::post('user_password_reset_hash'),
            Request::post('user_password_new'), Request::post('user_password_repeat')
        );
        Redirect::to('login/index');
    }

    public function changePassword()
    {
        Auth::checkAuthentication();
        $this->View->render('login/changePassword');
    }

    public function changePassword_action()
    {
        $result = PasswordResetModel::changePassword(
            Session::get('user_name'), Request::post('user_password_current'),
            Request::post('user_password_new'), Request::post('user_password_repeat')
        );

        if($result)
            Redirect::to('login/index');
        else
            Redirect::to('login/changePassword');
    }

    public function showCaptcha()
    {
        CaptchaModel::generateAndShowCaptcha();
    }
}
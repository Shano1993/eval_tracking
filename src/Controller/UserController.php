<?php

namespace App\Controller;

use RedBeanPHP\R;

class UserController extends AbstractController
{
    public function index()
    {
        // TODO: Implement index() method.
    }

    public function register()
    {
        if (self::isFormSubmitted()) {
            $user = R::dispense('user');
            $user->email = filter_var(self::getField('email'), FILTER_SANITIZE_EMAIL);
            $user->username = trim(self::sanitizeString(self::getField('username')));
            $user->password = self::getField('password');

            if ($user->password === self::getField('passwordRepeat')) {
                $user->password = password_hash(self::getField('password'), PASSWORD_DEFAULT);
                $insertId = R::store($user);
                self::location('c=user&a=login');
            }
            else {
                self::location('c=user&a=register');
                exit();
            }
        }
        self::render('user/register');
    }

    public function login()
    {
        if (self::isFormSubmitted()) {
            $mail = self::sanitizeString(self::getField('email'));
            $password = self::getField('password');
            $user = R::findOne('user', 'email=?', [$mail]);
            if ($user) {
                if (password_verify($password, $user->password)) {
                    $_SESSION['user'] = $user;
                    self::location('c=home');
                    exit();
                }
                else {
                    self::render('home/index');
                }
            }
        }
        self::render('user/login');
    }

    public function logout()
    {
        if (isset($_SESSION['user'])) {
            session_destroy();
            self::location('c=home');
        }
    }

    public function profile()
    {
        if (isset($_SESSION['user'])) {
            self::render('user/profile');
        }
        else {
            self::location('c=home');
        }
    }

    public static function userConnected(): bool
    {
        return isset($_SESSION['user']) && null !== $_SESSION['user']->getId();
    }
}

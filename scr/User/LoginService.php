<?php

namespace App\User;

use PDO;

class LoginService {
    public function __construct(UsersRepository $userRepository){
        $this->userRepository = $userRepository;
    }

    public function logout() {
        unset($_SESSION['login']);
        header("Location: login");
    }

    public function check() {
        if (isset($_SESSION['login'])){
            return true;
        } else {
            header("Location: login");
        }
    }

    public function attempt($username, $password) {
        $user = $this->userRepository->findByUsername($username);

        if (empty($user)) {
            return false;
        }

        if (password_verify($password, $user->password)) {
            $_SESSION['login'] = $user->username;
            session_regenerate_id(true);
            return true;
        } else {
            return false;
        }
    }
}
















?>

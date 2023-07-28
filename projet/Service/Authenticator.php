<?php

namespace Service;

use Model\User;

class Authenticator {

    const USER = "user";

    public function __construct()
    {
        session_start();
    }

    public function hasUserAuthenticate(): bool
    {
        return isset($_SESSION[self::USER]) && !empty($_SESSION[self::USER]);
    }

    public function saveUser(User $user): void 
    {
        $user->erasePassword();
        $_SESSION[self::USER] = serialize($user);
    }

    public function getUser(): User
    {
        return unserialize($_SESSION[self::USER]);
    }

    public function logout(): void 
    {
        session_destroy();
    }
}
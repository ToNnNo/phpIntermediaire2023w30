<?php

namespace Service;

class Authenticator {

    const USER = "user";

    public function hasUserAuthenticate(): bool
    {
        return isset($_SESSION[self::USER]) && !empty($_SESSION[self::USER]);
    }

}
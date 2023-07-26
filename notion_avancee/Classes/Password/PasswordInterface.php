<?php

namespace Classes\Password;

interface PasswordInterface {

    const VERSION = "1.0";

    public function hash(string $plainPassword): string;

    public function verify(string $plainPassword, string $hashPassword): bool;

}
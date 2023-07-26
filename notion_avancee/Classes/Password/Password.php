<?php 

namespace Classes\Password;

class Password implements PasswordInterface {

    public function hash(string $plainPassword): string
    {
        // PASSWORD_DEFAULT = bcrypt (BlowFish)
        return password_hash($plainPassword, PASSWORD_DEFAULT);
    }

    public function verify(string $plainPassword, string $hashPassword): bool
    {
        return password_verify($plainPassword, $hashPassword);
    }

}
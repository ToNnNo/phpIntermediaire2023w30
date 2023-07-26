<?php 

namespace Classes\Password;

class PasswordMd5 implements PasswordInterface {

    public function hash(string $plainPassword): string
    {
        return md5($plainPassword);
    }

    public function verify(string $plainPassword, string $hashPassword): bool
    {
        return md5($plainPassword) == $hashPassword;
    }

}
<?php

namespace Service;

class Redirect {

    public function redirect(string $url, int $http_code = 302): void
    {
        header(sprintf("Location: %s", $url));
        http_response_code($http_code);
        exit();
    }

}
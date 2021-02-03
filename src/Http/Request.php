<?php

declare(strict_types=1);

namespace App\Http;

class Request
{

    static function uri()
    {
        return
            preg_replace('/\?.*/', '', trim($_SERVER['REQUEST_URI'], '/'));
    }
}

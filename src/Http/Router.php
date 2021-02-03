<?php

declare(strict_types=1);

namespace App\Http;

use App\Exceptions\NotFoundHttpException;

class Router
{

    public function __construct(
        private array $routes
    ) {
    }

    public function direct(string $uri): string
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }

        throw new NotFoundHttpException();
    }
}

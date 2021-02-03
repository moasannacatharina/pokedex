<?php

declare(strict_types=1);

namespace Tests\Http;

use PHPUnit\Framework\TestCase;
use App\Http\Request;

class RequestTest extends TestCase
{


    public function test_get_uri()
    {
        $_SERVER['REQUEST_URI'] = '/pokemon?id=1';

        $this->assertSame('pokemon', Request::uri());
    }
}

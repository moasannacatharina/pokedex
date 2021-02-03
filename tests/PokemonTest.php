<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Pokemon;

class PokemonTest extends TestCase
{

    public function test_create_pokemon()
    {
        $pokemon = new Pokemon('Charizard', 1);

        $this->assertSame(1, $pokemon->id);

        $this->assertSame('Charizard', $pokemon->name);

        $this->assertSame('https://img.pokemondb.net/sprites/bank/normal/charizard.png', $pokemon->getImageUrl());
    }
}

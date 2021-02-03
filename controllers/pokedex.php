<?php

declare(strict_types=1);

use App\Pokemon;

$title = 'Pokédex';

$pokemons = $database
    ->select()
    ->from('pokemon')
    ->get();

$monsters = array_map(function ($pokemon) {
    return new Pokemon($pokemon->name, (int)$pokemon->id);
}, $pokemons);

require view('pokedex');

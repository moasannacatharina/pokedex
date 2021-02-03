<?php

declare(strict_types=1);

namespace App;

class Pokemon
{

    public function __construct(
        public string $name,
        public int $id
    ) {
    }

    public function getImageUrl()
    {

        if (str_contains($this->name, "♀")) {
            $name = strtolower(str_replace("♀", "-f", $this->name));
        } elseif (str_contains($this->name, "♂")) {
            $name = strtolower(str_replace("♂", "-m", $this->name));
        } else {
            $name = strtolower($this->name);
        }
        return sprintf('https://img.pokemondb.net/sprites/bank/normal/%s.png', $name);
    }
}

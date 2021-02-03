<?php

declare(strict_types=1);

use App\Exceptions\NotFoundHttpException;
use App\Pokemon;

if (isset($_GET['id']) === false) {
    throw new NotFoundHttpException();
}

$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

$pokemon = $database
    ->select()
    ->from('pokemon')
    ->where('id', '=', $id)
    ->first();


$pokemon = new Pokemon($pokemon->name, (int)$pokemon->id);


require view('pokemon');

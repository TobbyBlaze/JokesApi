<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Jokes;

class JokesController extends Controller
{

    public function joke()
    {
        $jokes = new Jokes();

        $joke = $jokes->getRandomJoke();

        return response()->json($joke);
    }

    public function jokes()
    {
        $jokes = new Jokes();

        $joke = $jokes->getRandomJokes(20);

        return response()->json($joke);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReziserFilmController extends Controller
{
    public function index($reziser_id)
    {
        $films = Film::get()->where('reziser_id', $reziser_id);
        if (is_null($films)) {
            return response()->json('Data not found', 404);
        }
        return FilmResource::collection($films);
    }
}

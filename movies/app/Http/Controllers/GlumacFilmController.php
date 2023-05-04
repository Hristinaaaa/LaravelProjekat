<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GlumacFilmController extends Controller
{
    public function index($glumac_id)
    {
        $films = Film::get()->where('glumac_id', $aglumac_id);
        if (is_null($films)) {
            return response()->json('Data not found', 404);
        }
        return FilmResource::collection($films);
    }
}

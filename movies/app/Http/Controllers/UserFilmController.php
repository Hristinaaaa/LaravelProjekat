<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFilmController extends Controller
{
    public function index($user_id)
    {
        $films = Film::get()->where('user_id', $user_id);
        if (is_null($films)) {
            return response()->json('Data not found', 404);
        }
        return FilmResource::collection($films);
    }
}

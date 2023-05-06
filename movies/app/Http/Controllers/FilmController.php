<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use App\Http\Resources\FilmResource;
use App\Http\Resources\ReziserResource;
use App\Http\Resources\GlumacResource;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $films = Film::all();
        return  FilmResource::collection($films);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'ime' => 'required|string|max:255',
            'zanr' => 'required|string|max:255',
            'trajanje'=> 'required|integer|max:11',
            'glumac_id' => 'required',
            'reziser_id' => 'required'
        ]);

        if ($validator->fails())
            return response()->json($validator->errors());

        $film = Film::create([
            'ime' => $request->ime,
            'zanr' => $request->zanr,
            'trajanje' => $request->trajanje,
            'glumac_id' => $request->glumac_id,
            'reziser_id' => $request->reziser_id,
            'user_id' => Auth::user()->id
        ]);

        return response()->json(['Film is created successfully.', new FilmResource($film)]);



    }

    /**
     * Display the specified resource.
     */
    public function show(Film $film)
    {
        return new FilmResource($film);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Film $film)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Film $film)
    {
        $validator = Validator::make($request->all(), [
            'ime' => 'required|string|max:255',
            'zanr' => 'required|string|max:255',
            'trajanje' => 'required|integer|max:11',
            'glumac_id' => 'required',
            'reziser_id' => 'required'
        ]);

        if ($validator->fails())
            return response()->json($validator->errors());

        $film->ime = $request->ime;
        $film->zanr = $request->zanr;
        $film->trajanje = $request->trajanje;
        $film->glumac_id = $request->glumac_id;
        $film->reziser_id = $request->reziser_id;
        

        $film->save();

        return response()->json(['Film is updated successfully.', new FilmResource($film)]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Film $film)
    {
        $film->delete();
        return response()->json('Film is deleted successfully');
    }
}

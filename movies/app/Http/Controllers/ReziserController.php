<?php

namespace App\Http\Controllers;

use App\Models\Reziser;
use Illuminate\Http\Request;
use App\Http\Resources\ReziserResource;

class ReziserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $rezisers = Reziser::all();
        return $rezisers;
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $rezisers = Reziser::find($id);
        if (is_null($rezisers)) {
            return response()->json('Data not found', 404);
        }
        return $rezisers;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reziser $reziser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reziser $reziser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reziser $reziser)
    {
        //
    }
}

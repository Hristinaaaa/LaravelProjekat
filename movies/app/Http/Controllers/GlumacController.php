<?php

namespace App\Http\Controllers;

use App\Models\Glumac;
use Illuminate\Http\Request;
use App\Http\Resources\GlumacResource;

class GlumacController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $glumac = GLumac::all();
        return $glumac;
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
        $glumac = Glumac::find($id);
        if (is_null($glumac)) {
            return response()->json('Data not found', 404);
        }
        return $glumac;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Glumac $glumac)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Glumac $glumac)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Glumac $glumac)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Stadiums;
use Illuminate\Http\Request;

class StadiumsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Stadiums::all();
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
    public function show(Stadiums $stadiums)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stadiums $stadiums)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stadiums $stadiums)
    {
        //
    }
}

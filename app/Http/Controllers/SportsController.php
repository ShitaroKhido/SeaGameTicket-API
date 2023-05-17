<?php

namespace App\Http\Controllers;

use App\Models\Sports;
use Illuminate\Http\Request;

class SportsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Sports::all();
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
    public function show(Sports $sports)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sports $sports)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sports $sports)
    {
        //
    }
}

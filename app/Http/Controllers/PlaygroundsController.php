<?php

namespace App\Http\Controllers;

use App\Models\Playgrounds;
use Illuminate\Http\Request;

class PlaygroundsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Playgrounds::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->all() !== null) {
            Playgrounds::create([
                'zone' => $request->all()['zone'],
                'stadium_id' => $request->all()['stadium_id']
            ]);
            return response(['message' => 'Success', 'data' => $request->all()], 200);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Playgrounds $playgrounds, $id)
    {
        return $playgrounds::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Playgrounds $playgrounds)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Playgrounds $playgrounds, $id)
    {
        $playgrounds::find($id)->delete;
    }
}

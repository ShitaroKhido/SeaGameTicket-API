<?php

namespace App\Http\Controllers;

use App\Models\Schedules;
use Illuminate\Http\Request;

class SchedulesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Schedules::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->all() !== null) {
            Schedules::create([
                'sport_id' => $request->all()['sport_id'],
                'first_country' => $request->all()['first_country'],
                'second_country' => $request->all()['second_country'],
                'event_id' => $request->all()['event_id'],
                'playground_id' => $request->all()['playground_id'],
                'start_time' => $request->all()['start_time'],
                'end_time' => $request->all()['end_time'],
            ]);
            return response(['message' => 'Success', 'data' => $request->all()], 200);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Schedules $schedules, $id)
    {
        return $schedules::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Schedules $schedules, $id)
    {
        $item = $schedules::find($id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Schedules $schedules, $id)
    {
        $schedules::find($id)->delete();
    }
}

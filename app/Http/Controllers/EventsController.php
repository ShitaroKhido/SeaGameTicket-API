<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\Schedules;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Events::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->all() !== null) {
            Events::create(
                [
                    'date' => $request->all()['date'],
                    'available_seats' => $request->all()['available_seats'],
                ]
            );
            return response(['message' => 'Success', 'data' => $request->all()], 200);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Events $events, $id)
    {
        return $events::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Events $events)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Events $events, $id)
    {
        $events::find($id)->delete();
    }
}

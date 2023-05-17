<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\Schedules;
use App\Models\Sports;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function availableSchedulesForDate($id)
    {
        $tickets = Events::find(Schedules::find($id)['event_id']);
        if (isset($tickets->available_seats) && !($tickets->available_seats === 0)) {
            return [
                'schedule' => Schedules::where('event_id', $id)->get(),
                'ticket_info' => $tickets,
            ];
        } else
            return response("There's no Ticket left!");
    }

    public function searchForEvenDate(Request $request)
    {
        return Events::where('date', $request->query('date'))->get();
    }

    public function schedulesForSport(Request $request)
    {
        $sport = Sports::where('name', $request->query('name'))->get();
        if (isset($sport) && !(count($sport) === 0)) {
            $schedules = Schedules::where('sport_id', $sport[0]['id'])->get();
            return isset($schedules) ? ['schedules' => $schedules,] : response('No Schedules Found');
        }
    }

    public function bookingTicket($id)
    {
        $tickets = Events::find(Schedules::find($id)['event_id']);
        $schedule = Schedules::where('event_id', $id)->get();
        if (!(count($schedule) === 0)) {
            if (isset($tickets->available_seats) && !($tickets->available_seats === 0)) {
                $tickets->available_seats -= 1;
                $tickets->save();
                return [
                    'schedule' => $schedule,
                    'ticket_info' => $tickets,
                ];
            } else
                return response("There's no Ticket left!");
        } else
            return response('No schedules available');
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Calendar;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$calendars = Calendar::select('title', 'start_at AS start', 'end_at AS end')->get();
        //return view('calendar');
        //$calendars = Calendar::select('title', 'start_at AS start', 'end_at AS end')->get();
        //json_encode(compact('calendars')['calendars']);
        return view('calendar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$events = Event::select('title', 'start_at AS start', 'end_at AS end')->get();
        return view('create_cal');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //$events = Event::select('title', 'start_at AS start', 'end_at AS end')->get();
        $validated = $request->validate([
            'title' => 'required', 
            'start_at' => 'required', 
            'end_at' => 'required',
        ]);

        $todo = Calendar::create([ 
            'title' => $request->title, 
            'start_at' => $request->date('start_at'),
            'end_at' => $request->date('end_at'), 
       ]);

       
        return view('calendar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
        //$calendar = Calendar::find($id);
        $calendar = Calendar::select('title', 'start_at AS start', 'end_at AS end')->get();
        return view('show_cal', compact('calendar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

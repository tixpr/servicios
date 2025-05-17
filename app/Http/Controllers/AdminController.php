<?php

namespace App\Http\Controllers;

use App\Http\Requests\Web\CreateEventRequest;
use App\Models\Evento;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
        $eventos = Evento::all();
        return view('admin.home', ['eventos' => $eventos]);
    }
    public function getCreateEvent()
    {
        return view('admin.create_event');
    }
    public function postCreateEvent(CreateEventRequest $request)
    {
        $evento = Evento::create([
            'name' => $request->name,
            'init_date' => $request->init_date,
            'end_date' => $request->end_date
        ]);
        return redirect()->route('admin-home');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;

class AgendaController extends Controller
{
    public function index()
    {
        $agenda = Agenda::get();
        return view('agenda.index', compact('agenda'));
    }

    public function create()
    {
        return view('agenda.create');
    }

    public function store()
    {
        $agenda = new Agenda;
        $agenda->date = request()->input('date');
        $agenda->time = request()->input('time');
        $agenda->caption = request()->input('caption');
        $agenda->deskripsi = request()->input('deskripsi');
        $agenda->lokasi = request()->input('lokasi');
        $agenda->save();

        return redirect()->route('agenda.index');
    }

    public function edit($id)
    {
        $agenda = Agenda::find($id);
        return view('agenda.edit', compact('agenda'));
    }

        public function update($id)
    {
        $agenda = Agenda::find($id);
        $agenda->date = request()->input('date');
        $agenda->time = request()->input('time');
        $agenda->caption = request()->input('caption');
        $agenda->deskripsi = request()->input('deskripsi');
        $agenda->lokasi = request()->input('lokasi');
        $agenda->save();

        return redirect()->route('agenda.index');
    }
    
    public function destroy($id)
    {
        $agenda = Agenda::find($id);

        if($agenda){
            $agenda->delete();
            return redirect()->route('agenda.index');
        }
    }
}


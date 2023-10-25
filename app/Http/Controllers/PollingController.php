<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Polling;

class PollingController extends Controller
{
    public function index()
    {
        $polling = Polling::get();
        return view('polling.index', compact('polling'));
    }

    public function create()
    {
        return view('polling.create');
    }

    public function store()
    {
        $polling = new Polling;
        $polling->type = request()->input('type');
        $polling->parent = request()->input('parent');
        $polling->content = request()->input('content');
        $polling->score = request()->input('score');
        $polling->status = request()->input('status');
        $polling->save();
       
        return redirect()->route('polling.index');
    }

    public function edit($id)
    {
        $polling = Polling::find($id);
        return view('polling.edit', compact('polling'));
    }

        public function update($id)
    {
        $polling = Polling::find($id);
        $polling->type = request()->input('type');
        $polling->parent = request()->input('parent');
        $polling->content = request()->input('content');
        $polling->score = request()->input('score');
        $polling->status = request()->input('status');
        $polling->save();

        return redirect()->route('polling.index');
    }
    
    public function destroy($id)
    {
        $polling = Polling::find($id);

        if($polling){
            $polling->delete();
            return redirect()->route('polling.index');
        }
    }
}


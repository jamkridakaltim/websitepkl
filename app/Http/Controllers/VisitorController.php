<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;

class VisitorController extends Controller
{
    public function index()
    {
        $visitor = Visitor::get();
        return view('visitor.index', compact('visitor'));
    }

    public function create()
    {
        return view('visitor.create');
    }

    public function store()
    {
        $visitor = new Visitor;
        $visitor->ip = request()->input('ip');
        $visitor->country = request()->input('country');
        $visitor->total = request()->input('total');
        $visitor->save();

        return redirect()->route('visitor.index');
    }

    public function edit($id)
    {
        $visitor = Visitor::find($id);
        return view('visitor.edit', compact('visitor'));
    }

    public function update($id)
    {
        $visitor = Visitor::find($id);
        $visitor->ip = request()->input('ip');
        $visitor->country = request()->input('country');
        $visitor->total = request()->input('total');
        $visitor->save();

        return redirect()->route('visitor.index');
    }

    public function destroy ($id)
    {
        $visitor = Visitor::find($id);

        if($visitor){
            $visitor->delete();
            return redirect()->route('visitor.index');
        }
    }
}
    

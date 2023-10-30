<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;

class LinkController extends Controller
{
    public function index()
    {
        $link = Link::get();
        return view('link.index', compact('link'));
    }
    
    
    public function create()
    {
        return view('link.create');
    }

    public function store()
    {
        $link = new Link;
        $link->category = request()->input('category');
        $link->name = request()->input('name');
        $link->link = request()->input('link');
        $link->icon = request()->input('icon');
        $link->order = request()->input('order');
        $link->status = request()->input('status');
        $link->lock = request()->input('lock');
        $link->save();

        return redirect()->route('link.index');
    }

    public function update($id)
    {
        $link = Link::find($id);
        $link->category = request()->input('category');
        $link->name = request()->input('name');
        $link->link = request()->input('link');
        $link->icon = request()->input('icon');
        $link->order = request()->input('order');
        $link->status = request()->input('status');
        $link->lock = request()->input('lock');
        $link->save();
       
        return redirect()->route('link.index');
    }

    public function edit($id)
    {
        $link = Link::find($id);
        return view('link.edit', compact('link'));
    }

    public function destroy($id)
    {
        $link = Link::find($id);

        if($link){
            $link->delete();
            return redirect()->route('link.index');
        }

    }
}

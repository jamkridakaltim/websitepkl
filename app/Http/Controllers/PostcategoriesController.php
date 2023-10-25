<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postcategories;

class PostcategoriesController extends Controller
{
    public function index()
    {
        $postcategories = Postcategories::get();
        return view('postcategories.index', compact('postcategories'));
    }

    public function create()
    {
        return view('postcategories.create');
    }

    public function store()
    {
        $postcategories = new Postcategories;
        $postcategories->name = request()->input('name');
        $postcategories->slug = request()->input('slug');
        $postcategories->status = request()->input('status');
        $postcategories->save();

        return redirect()->route('postcategories.index');
    }

    public function edit($id)
    {
        $postcategories = Postcategories::find($id);
        return view('postcategories.edit', compact('postcategories'));
    }

    public function update($id)
    {
        $postcategories = Postcategories::find($id);
        $postcategories->name = request()->input('name');
        $postcategories->slug = request()->input('slug');
        $postcategories->status = request()->input('status');
        $postcategories->save();

        return redirect()->route('postcategories.index');
    }

    public function destroy ($id)
    {
        $postcategories = Postcategories::find($id);

        if($postcategories){
            $postcategories->delete();
            return redirect()->route('postcategories.index');
        }
    }
}
    

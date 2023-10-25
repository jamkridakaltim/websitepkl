<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $menu = Menu::get();
        return view('menu.index', compact('menu'));
    }

    public function create()
    {
        return view('menu.create');
    }

    public function store()
    {
        $menu = new Menu;
        $menu->name = request()->input('name');
        $menu->slug = request()->input('slug');
        $menu->link = request()->input('link');
        $menu->icon = request()->input('icon');
        $menu->parent_id = request()->input('parent_id');
        $menu->position = request()->input('position');
        $menu->order = request()->input('order');
        $menu->status = request()->input('status');
        $menu->lock = request()->input('lock');
        $menu->save();

        return redirect()->route('menu.index');
    }

    public function edit($id)
    {
        $menu = Menu::find($id);

        return view('menu.edit', compact('menu'));
    }


    public function update($id)
    {
        $menu = Menu::find($id);
        $menu->name = request()->input('name');
        $menu->slug = request()->input('slug');
        $menu->link = request()->input('link');
        $menu->icon = request()->input('icon');
        $menu->parent_id = request()->input('parent_id');
        $menu->position = request()->input('position');
        $menu->order = request()->input('order');
        $menu->status = request()->input('status');
        $menu->lock = request()->input('lock');
        $menu->save();
        
        return redirect()->route('menu.index');
    }

    public function destroy($id)
    {
        $menu = Menu::find($id);

        if($menu){
            $menu->delete();
            return redirect()->route('menu.index');
        }
    }
}
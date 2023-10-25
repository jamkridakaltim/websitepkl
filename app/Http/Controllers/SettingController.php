<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
     public function index()
    {
        $setting = Setting::get();
        return view('setting.index', compact('setting'));
    }

    public function create()
    {
        return view('setting.create');
    }

    public function store()
    {
        $setting = new Setting;
        $setting->key = request()->input('key');
        $setting->value = request()->input('value');
        $setting->save();

        return redirect()->route('setting.index');
    }

    public function edit($id)
    {
        $setting = Setting::find($id);
        return view('setting.edit', compact('setting'));
    }


    public function update($id)
    {
        $setting = Setting::find($id);
        $setting->key = request()->input('key');
        $setting->value = request()->input('value');
        $setting->save();
        
        return redirect()->route('setting.index');
    }



    public function destroy($id)
    {
        $setting = Setting::find($id);

        if($setting){
            $setting->delete();
            return redirect()->route('setting.index');
        }
    }
}
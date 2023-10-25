<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\galeri;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri::get();
        return view('galeri.index', compact('galeri'));
    }

    public function create()
    {
        return view('galeri.create');
    }

    public function store()
    {
        $galeri = new Galeri;
        $galeri->type = request()->input('type');
        $galeri->caption = request()->input('caption');
        $galeri->slug = request()->input('slug');
        $galeri->link = request()->input('link');
        $galeri->tags = request()->input('tags');
        $galeri->description = request()->input('description');
        $galeri->read = request()->input('read');
        $galeri->featured = request()->input('featured');
        $galeri->status = request()->input('status');
        $galeri->save();

        return redirect()->route('galeri.index');
    }

    public function edit($id)
    {
        $galeri = Galeri::find($id);
        //SELECT * FROM galeri WHERE 'id' = $id
        return view('galeri.edit', compact('galeri'));
    }

    public function update($id)
    {
        $galeri = galeri::find($id);
        $galeri->type = request()->input('type');
        $galeri->caption = request()->input('caption');
        $galeri->slug = request()->input('slug');
        $galeri->link = request()->input('link');
        $galeri->tags = request()->input('tags');
        $galeri->description = request()->input('description');
        $galeri->read = request()->input('read');
        $galeri->featured = request()->input('featured');
        $galeri->status = request()->input('status');
        $galeri->save();

        return redirect()->route('galeri.index');
    }

    public function destroy ($id)
    {
        $galeri = Galeri::find($id);

        if($galeri){
            $galeri->delete();
            return redirect()->route('galeri.index');
        }
    }
}
    

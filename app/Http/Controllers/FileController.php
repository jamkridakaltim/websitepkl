<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\File;

class FileController extends Controller
{
    public function index() 
    {
        $file =  File::get();
        return view('file.index',  compact('file'));
    }

    public function create()
    {
        return view('file.create');
    }

    public function store()
    {
        $file = new File;
        $file->name = request()->input('name');
        $file->type = request()->input('type');
        $file->path = request()->input('path');
        $file->disk = request()->input('disk');
        $file->fileable_type = request()->input('fileable_type');
        $file->fileable_id = request()->input('fileable_id');
        $file->field = request()->input('field');
        $file->meta = request()->input('meta');
        $file->save();
       
        return redirect()->route('file.index');
    }

    public function edit($id)
    {
        $file = File::find($id);
        return view('file.edit', compact('file'));
    }

        public function update($id)
    {
        $file = File::find($id);
        $file->name = request()->input('name');
        $file->type = request()->input('type');
        $file->path = request()->input('path');
        $file->disk = request()->input('disk');
        $file->fileable_type = request()->input('fileable_type');
        $file->fileable_id = request()->input('fileable_id');
        $file->field = request()->input('field');
        $file->meta = request()->input('meta');
        $file->save();

        return redirect()->route('file.index');
    }
    
    public function destroy($id)
    {
        $file = File::find($id);

        if($file){
            $file->delete();
            return redirect()->route('file.index');
        }
    }
}

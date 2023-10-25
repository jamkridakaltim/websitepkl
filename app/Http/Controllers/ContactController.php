<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::get();
        return view('contact.index', compact('contact'));
    }

    public function create()
    {
        return view('contact.create');
    }

    public function store()
    {
        $contact = new Contact;
        $contact->nama = request()->input('nama');
        $contact->no_hp = request()->input('no_hp');
        $contact->email = request()->input('email');
        $contact->saran = request()->input('saran');
        $contact->save();

        return redirect()->route('contact.index');
    }
    public function edit($id)
    {
        $contact = Contact::find($id);

        return view('contact.edit', compact('contact'));
    }

    public function update($id)
    {
        $contact = Contact::find($id);
        $contact->nama = request()->input('nama');
        $contact->no_hp = request()->input('no_hp');
        $contact->email = request()->input('email');
        $contact->saran = request()->input('saran');
        $contact->save();

        return redirect()->route('contact.index');
    }
    public function destroy($id)
    {
        $contact = Contact::find($id);

        if($contact){
            $contact->delete();
            return redirect()->route('contact.index');
        }
    }
}

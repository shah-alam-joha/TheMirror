<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Image;
use File;

class ContactsController extends Controller
{
      public function index()
    {
        $contacts = Contact::orderBy('id', 'asc')->get();
        return view('backend.pages.contacts.index', compact('contacts'));
    }

    public function create()
    {

        return view ('backend.pages.contacts.create');
    }

    public function edit($id)
    {
        $contact = Contact::find($id);
        return view ('backend.pages.contacts.edit', compact('contact'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'address' => 'required',
            'phone' => 'required',
            
        ],
        [
            'title.required' => 'Please provide a Contact title',
            'address.required' => 'Please provide a Contact address',
            'phone.required' => 'Please provide a contact phone',
           
        ]);

        $contact = new Contact();
        $contact->title = $request->title;
        $contact->description = $request->description;
        $contact->address = $request->address;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->save();

        session()->flash('success', 'A new contact has added successfully !!');
        return redirect()->route('admin.contacts');
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
           'title' => 'required',
            'address' => 'required',
            'phone' => 'required',
           
        ],
        [
             'title.required' => 'Please provide a Contact title',
            'address.required' => 'Please provide a Contact address',
            'phone.required' => 'Please provide a contact phone',
        ]);

        $contact = Contact::find($id);
        $contact->title = $request->title;
        $contact->description = $request->description;
        $contact->address = $request->address;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->save();

        session()->flash('success', 'contact has updated successfully !!');
        return redirect()->route('admin.contacts');

    } 
    public function delete($id)
    {
        $contact = Contact::find($id);
        if(!is_null($contact)){
            if (File::exists('images/contacts/'.$contact->image)) {
                File::delete('images/contacts/'.$contact->image);
            }
            $contact->delete();
        }
        session()->flash('success', 'Contact has deleted successfully !!');
        return back();
    }
}

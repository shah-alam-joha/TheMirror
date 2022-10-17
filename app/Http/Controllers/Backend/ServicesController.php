<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Service;
use Image;
use File;

class ServicesController extends Controller
{
     public function index()
    {
        $services = Service::orderBy('id', 'asc')->get();
        return view('backend.pages.services.index', compact('services'));
    }
     public function create()
    {

        return view ('backend.pages.services.create');
    }

  

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'title' => 'required',
            'phone' => 'required',
            'image' => 'required|image',
            'description' => 'nullable',
            
        ],
        [
            'name.required' => 'Please provide a service Name',
            'title.required' => 'Please provide a service Title',
            'phone.required' => 'Please provide a service phone',
            'image.required' => 'Please provide a service Image',
            'image.image' => 'Please provide a valid service Image',
            
           
        ]);

        $service = new Service();
        $service->name = $request->name;
        $service->title = $request->title;
        $service->phone = $request->phone;
        $service->image = $request->image;
        $service->description = $request->description;
        
        

    if ($request->hasFile('image')) {
        $image = $request->file('image');
            $img = time().'.'.$image->getClientOriginalExtension();
            $location = 'images/services/'.$img;
            Image::make($image)->save($location);
            $service->image = $img;
        }

        $service->save();

        session()->flash('success', 'A new service has added successfully !!');
        return redirect()->route('admin.services');
    }
  public function edit($id)
    {
        $service = Service::find($id);
        return view ('backend.pages.services.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'title' => 'required',
            'phone' => 'required',
            'image' => 'nullable|image',
            'description' => 'nullable',
            
        ],
        [
            'name.required' => 'Please provide a service Name',
            'title.required' => 'Please provide a service Title',
            'phone.required' => 'Please provide a service phone',
            'image.required' => 'Please provide a service Image',
            'image.image' => 'Please provide a valid service Image',
           
        ]);

        $service = Service::find($id);
        $service->name = $request->name;
        $service->title = $request->title;
        $service->phone = $request->phone;
        $service->description = $request->description;
        

         if ($request->hasFile('image')) {
            //delete the old service image
            if (File::exists('images/services/'.$service->image)) {
                File::delete('images/services/'.$service->image);
            }

            $image = $request->file('image');
            $img = time().'.'.$image->getClientOriginalExtension();
            $location = 'images/services/'.$img;
            Image::make($image)->save($location);
            $service->image = $img;
            
        }
        $service->save();

        session()->flash('success', 'sservice has updated successfully !!');
        return redirect()->route('admin.services');

    } 
    public function delete($id)
    {
        $service = Service::find($id);
        if(!is_null($service)){
            if (File::exists('images/services/'.$service->image)) {
                File::delete('images/services/'.$service->image);
            }
            $service->delete();
        }
        session()->flash('success', 'service has deleted successfully !!');
        return back();
    }
}

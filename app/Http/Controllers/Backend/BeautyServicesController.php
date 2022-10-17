<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Beauty;
use Image;
use File;

class BeautyServicesController extends Controller
{
    public function index()
    {
        $beautys = Beauty::orderBy('id', 'asc')->get();
        return view('backend.pages.beautys.index', compact('beautys'));
    }

     public function create()
    {
        return view ('backend.pages.beautys.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
          
            'title' => 'required',
            'image' => 'required|image',
            'description' => 'nullable',
            
        ],
        [
            
            'title.required' => 'Please provide a service Title',
            'image.required' => 'Please provide a service Image',
            'image.image' => 'Please provide a valid service Image',
            
           
        ]);

        $beauty = new Beauty();
        $beauty->title = $request->title;
        $beauty->image = $request->image;
        $beauty->description = $request->description;
        
        

    if ($request->hasFile('image')) {
        $image = $request->file('image');
            $img = time().'.'.$image->getClientOriginalExtension();
            $location = 'images/beautys/'.$img;
            Image::make($image)->save($location);
            $beauty->image = $img;
        }

        $beauty->save();

        session()->flash('success', 'A new beauty has added successfully !!');
        return redirect()->route('admin.beautys');
    }
  public function edit($id)
    {
        $beauty = Beauty::find($id);
        return view ('backend.pages.beautys.edit', compact('beauty'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'nullable|image',
            'description' => 'nullable',
            
        ],
        [
            'title.required' => 'Please provide a beauty service Title',
            'image.required' => 'Please provide a beauty service Image',
            'image.image' => 'Please provide a valid beauty service Image',
           
        ]);

        $beauty = Beauty::find($id);
        $beauty->title = $request->title;
        $beauty->description = $request->description;
        

         if ($request->hasFile('image')) {
            //delete the old beauty image
            if (File::exists('images/beautys/'.$beauty->image)) {
                File::delete('images/beautys/'.$beauty->image);
            }

            $image = $request->file('image');
            $img = time().'.'.$image->getClientOriginalExtension();
            $location = 'images/beautys/'.$img;
            Image::make($image)->save($location);
            $beauty->image = $img;
            
        }
        $beauty->save();

        session()->flash('success', 'Beautys has updated successfully !!');
        return redirect()->route('admin.beautys');

    } 
    public function delete($id)
    {
        $beauty = Beauty::find($id);
        if(!is_null($beauty)){
            if (File::exists('images/beautys/'.$beauty->image)) {
                File::delete('images/beautys/'.$beauty->image);
            }
            $beauty->delete();
        }
        session()->flash('success', 'beauty has deleted successfully !!');
        return back();
    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Image;
use File;

class GalleriesController extends Controller
{
    public function index()
    {
        $galleries = Gallery::orderBy('id', 'asc')->get();
        return view('backend.pages.galleries.index', compact('galleries'));
    }
    public function create()
    {

        return view ('backend.pages.galleries.create');
    }



    public function store(Request $request)
    {
        $this->validate($request, [

            'image_title' => 'required',
            'image' => 'image|required',
            'priority' => 'required',

        ],
        [
    
            'image_title.required' => 'Please provide a Gallery image_title',
            'image.image' => 'Please provide a Gallery valid Image',
            'image.required' => 'Please provide a Gallery Image',
            'priority.required' => 'Please provide a priority',

        ]);

        $gallery = new Gallery();
        $gallery->image_title = $request->image_title;
        $gallery->priority = $request->priority;
        $gallery->image = $request->image;


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $img = time().'.'.$image->getClientOriginalExtension();
            $location = 'images/galleries/'.$img;
            Image::make($image)->save($location);
            $gallery->image = $img;
        }

        $gallery->save();

        session()->flash('success', 'A new Gallery has added successfully !!');
        return redirect()->route('admin.galleries');
    }
    public function edit($id)
    {
        $gallery = Gallery::find($id);
        return view ('backend.pages.galleries.edit', compact('gallery'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'image_title' => 'required',
            'priority' => 'required',
            'image' => 'required|image',
            
        ],
        [
            'image_title.required' => 'Please provide  gallery image title',
            'priority.required' => 'Please provide a priority',
            'image.image' => 'Please provide a valid gallery Image',
            'image.required' => 'Please provide a gallery Image',
           
        ]);

        $gallery = Gallery::find($id);
        $gallery->image_title = $request->image_title;
        $gallery->priority = $request->priority;
        

         if ($request->hasFile('image')) {
            //delete the old gallery image
            if (File::exists('images/galleries/'.$gallery->image)) {
                File::delete('images/galleries/'.$gallery->image);
            }

            $image = $request->file('image');
            $img = time().'.'.$image->getClientOriginalExtension();
            $location = 'images/galleries/'.$img;
            Image::make($image)->save($location);
            $gallery->image = $img;
            
        }

        $gallery->save();

        session()->flash('success', 'gallery has updated successfully !!');
        return redirect()->route('admin.galleries');

    } 
public function delete($id)
{
    $gallery = Gallery::find($id);

    if(!is_null($gallery)){
        if (File::exists('images/galleries/'.$gallery->image)) {
            File::delete('images/galleries/'.$gallery->image);
        }

        $gallery->delete();
    }
    session()->flash('success', 'gallery has deleted successfully !!');
    return back();
}
}

<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Models\AboutUs;
use Image;
use File;

class AboutUsController extends Controller
{ 
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $abouts = AboutUs::orderBy('id', 'asc')->get();
        return view('backend.pages.abouts.index', compact('abouts'));
    }
    public function create()
    {

        return view ('backend.pages.abouts.create');
    }



    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'phone' => 'required|max:12',
            'image' => 'image|nullable',

        ],
        [
            'title.required' => 'Please provide a about title',
            'description.required' => 'Please provide a description',
            'phone.required' => 'Please provide a phone number',
            'image.image' => 'Please provide a valid about Image',

        ]);

        $about = new AboutUs();
        $about->title = $request->title;
        $about->description = $request->description;
        $about->phone = $request->phone;
        $about->image = $request->image;



        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $img = time().'.'.$image->getClientOriginalExtension();
            $location = 'images/abouts/'.$img;
            Image::make($image)->save($location);
            $about->image = $img;
        }



        $about->save();

        session()->flash('success', 'A new about has added successfully !!');
        return redirect()->route('admin.abouts');
    }
    public function edit($id)
    {
        $about = AboutUs::find($id);
        return view ('backend.pages.abouts.edit', compact('about'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'phone' => 'required|max:12',
            'image' => 'image|nullable',
            
        ],
        [
            'title.required' => 'Please provide a about title',
            'description.required' => 'Please provide a description',
            'phone.required' => 'Please provide a phone number',
            'image.image' => 'Please provide a valid about Image',

        ]);

        $about = AboutUs::find($id);
        $about->title = $request->title;
        $about->description = $request->description;
        $about->phone = $request->phone;
        

        if ($request->hasFile('image')) {
            //delete the old about image
            if (File::exists('images/abouts/'.$about->image)) {
                File::delete('images/abouts/'.$about->image);
            }

            $image = $request->file('image');
            $img = time().'.'.$image->getClientOriginalExtension();
            $location = 'images/abouts/'.$img;
            Image::make($image)->save($location);
            $about->image = $img;
            
        }
        $about->save();

        session()->flash('success', 'about has updated successfully !!');
        return redirect()->route('admin.abouts');

    } 
    public function delete($id)
    {
        $about = AboutUs::find($id);

        if(!is_null($about)){
            if (File::exists('images/abouts/'.$about->image)) {
                File::delete('images/abouts/'.$about->image);
            }

            $about->delete();
        }
        session()->flash('success', 'about has deleted successfully !!');
        return back();
    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Brand;
use Image;
use File;

class BrandsController extends Controller
{
       public function index()
    {
        $brands = Brand::orderBy('priority', 'asc')->get();
        return view('backend.pages.brands.index', compact('brands'));
    }

    public function create()
    {

        return view ('backend.pages.brands.create');
    }

    public function edit($id)
    {
        $brand = Brand::find($id);
        return view ('backend.pages.brands.edit', compact('brand'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'image' => 'required|image',
            'priority' => 'required',
            
        ],
        [
            'name.required' => 'Please provide a Brand name',
            'image.required' => 'Please provide a Brand Image',
            'image.image' => 'Please provide a valid Brand Image',
            'priority.required' => 'Please provide a brand priority',
           
        ]);

        $brand = new Brand();
        $brand->name = $request->name;
        $brand->image = $request->image;
        $brand->priority = $request->priority;
      
        

    if ($request->hasFile('image')) {
        $image = $request->file('image');
            $img = time().'.'.$image->getClientOriginalExtension();
            $location = 'images/brands/'.$img;
            Image::make($image)->save($location);
            $brand->image = $img;
        }

        $brand->save();

        session()->flash('success', 'A new brand has added successfully !!');
        return redirect()->route('admin.brands');
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'image' => 'nullable|image',
            'priority' => 'required',
           
        ],
        [
            'name.required' => 'Please provide a brand name',
            'image.image' => 'Please provide a valid image',
            'priority.required' => 'Please provide a brand priority',
           
        ]);

        $brand = Brand::find($id);
        $brand->name = $request->name;
        $brand->priority = $request->priority;
       

         if ($request->hasFile('image')) {
            //delete the old brand image
            if (File::exists('images/brands/'.$brand->image)) {
                File::delete('images/brands/'.$brand->image);
            }

            $image = $request->file('image');
            $img = time().'.'.$image->getClientOriginalExtension();
            $location = 'images/brands/'.$img;
            Image::make($image)->save($location);
            $brand->image = $img;
            
        }
        $brand->save();

        session()->flash('success', 'sbrand has updated successfully !!');
        return redirect()->route('admin.brands');

    } 
    public function delete($id)
    {
        $brand = Brand::find($id);
        if(!is_null($brand)){
            if (File::exists('images/brands/'.$brand->image)) {
                File::delete('images/brands/'.$brand->image);
            }
            $brand->delete();
        }
        session()->flash('success', 'Brand has deleted successfully !!');
        return back();
    }
}

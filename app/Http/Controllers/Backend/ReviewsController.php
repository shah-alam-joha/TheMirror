<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Review;
use Image;
use File;

class ReviewsController extends Controller
{
 public function index()
 {
    $reviews = Review::orderBy('id', 'asc')->get();
    return view('backend.pages.reviews.index', compact('reviews'));
}
public function create()
{

    return view ('backend.pages.reviews.create');
}



public function store(Request $request)
{
    $this->validate($request, [
        'name' => 'required',
        'address' => 'required',
        'image' => 'nullable|image',
        'description' => 'required',

    ],
    [
        'name.required' => 'Please provide a reviewer name',
        'address.required' => 'Please provide a reviewer address',
        'image.image' => 'Please provide a reviewer valid Image',
        'description.required' => 'Please provide a description',

    ]);

    $review = new Review();
    $review->name = $request->name;
    $review->address = $request->address;
    $review->image = $request->image;
    $review->description = $request->description;


    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $img = time().'.'.$image->getClientOriginalExtension();
        $location = 'images/reviews/'.$img;
        Image::make($image)->save($location);
        $review->image = $img;
    }

  

    $review->save();

    session()->flash('success', 'A new review has added successfully !!');
    return redirect()->route('admin.reviews');
}
  public function edit($id)
    {
        $review = Review::find($id);
        return view ('backend.pages.reviews.edit', compact('review'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'image' => 'nullable|image',
            'description' => 'required',
            
        ],
        [
            'name.required' => 'Please provide  reviewer Name',
            'address.required' => 'Please provide a review address',
            'image.required' => 'Please provide reviewer Image',
            'image.image' => 'Please provide a valid review Image',
            'description.required' => 'Please provide review description',
           
        ]);

        $review = Review::find($id);
        $review->name = $request->name;
        $review->address = $request->address;
        $review->description = $request->description;
        

         if ($request->hasFile('image')) {
            //delete the old review image
            if (File::exists('images/reviews/'.$review->image)) {
                File::delete('images/reviews/'.$review->image);
            }

            $image = $request->file('image');
            $img = time().'.'.$image->getClientOriginalExtension();
            $location = 'images/reviews/'.$img;
            Image::make($image)->save($location);
            $review->image = $img;
            
        }
        $review->save();

        session()->flash('success', 'Review has updated successfully !!');
        return redirect()->route('admin.reviews');

    } 
public function delete($id)
{
    $review = Review::find($id);

    if(!is_null($review)){
        if (File::exists('images/reviews/'.$review->image)) {
            File::delete('images/reviews/'.$review->image);
        }

        $review->delete();
    }
    session()->flash('success', 'Review has deleted successfully !!');
    return back();
}
}

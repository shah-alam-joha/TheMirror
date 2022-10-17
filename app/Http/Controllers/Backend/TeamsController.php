<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Team;
use Image;
use File;

class TeamsController extends Controller
{
     public function index()
    {
        $teams = Team::orderBy('id', 'asc')->get();
        return view('backend.pages.teams.index', compact('teams'));
    }
     public function create()
    {

        return view ('backend.pages.teams.create');
    }

  

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'designation' => 'required',
            'phone' => 'required',
            'image' => 'required|image',
            'designation' => 'nullable',
            
        ],
        [
            'name.required' => 'Please provide a team Name',
            'designation.required' => 'Please provide a team designation',
            'phone.required' => 'Please provide a team phone',
            'image.required' => 'Please provide a team Image',
            'image.image' => 'Please provide a valid team Image',
            
           
        ]);

        $team = new Team();
        $team->name = $request->name;
        $team->designation = $request->designation;
        $team->phone = $request->phone;
        $team->description = $request->description;
        $team->image = $request->image;
        
        

    if ($request->hasFile('image')) {
        $image = $request->file('image');
            $img = time().'.'.$image->getClientOriginalExtension();
            $location = 'images/teams/'.$img;
            Image::make($image)->save($location);
            $team->image = $img;
        }

        $team->save();

        session()->flash('success', 'A new team has added successfully !!');
        return redirect()->route('admin.teams');
    }
  public function edit($id)
    {
        $team = Team::find($id);
        return view ('backend.pages.teams.edit', compact('team'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'designation' => 'required',
            'phone' => 'required',
            'image' => 'nullable|image',
            'designation' => 'nullable',
            
        ],
        [
            'name.required' => 'Please provide a team Name',
            'designation.required' => 'Please provide a team designation',
            'phone.required' => 'Please provide a team phone',
            'image.required' => 'Please provide a team Image',
            'image.image' => 'Please provide a valid team Image',
           
        ]);

        $team = Team::find($id);
        $team->name = $request->name;
        $team->designation = $request->designation;
        $team->description = $request->description;
        $team->phone = $request->phone;
        

         if ($request->hasFile('image')) {
            //delete the old team image
            if (File::exists('images/teams/'.$team->image)) {
                File::delete('images/teams/'.$team->image);
            }

            $image = $request->file('image');
            $img = time().'.'.$image->getClientOriginalExtension();
            $location = 'images/teams/'.$img;
            Image::make($image)->save($location);
            $team->image = $img;
            
        }
        $team->save();

        session()->flash('success', 'steam has updated successfully !!');
        return redirect()->route('admin.teams');

    } 
    public function delete($id)
    {
        $team = Team::find($id);
        if(!is_null($team)){
            if (File::exists('images/teams/'.$team->image)) {
                File::delete('images/teams/'.$team->image);
            }
            $team->delete();
        }
        session()->flash('success', 'team has deleted successfully !!');
        return back();
    }
}

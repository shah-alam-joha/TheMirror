<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;
use Image;
use File;

class FaqsController extends Controller
{
    public function index()
    {
        $faqs = Faq::orderBy('id', 'asc')->get();
        return view('backend.pages.faqs.index', compact('faqs'));
    }

    public function create()
    {

        return view ('backend.pages.faqs.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [

            'question' => 'required',
            'answer' => 'required',
            'priority' => 'required',

        ],
        [

            'question.required' => 'Please provide a faq question',      
            'answer.required' => 'Please provide faq question answer',
            'priority.required' => 'Please provide faq question priority',

        ]);

        $faq = new Faq();
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->priority = $request->priority;
        $faq->save();

        session()->flash('success', 'A new Faq has added successfully !!');
        return redirect()->route('admin.faqs');
    }
    public function edit($id)
    {
        $faq = Faq::find($id);
        return view ('backend.pages.faqs.edit', compact('faq'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'question' => 'required',
            'answer' => 'required',
            'priority' => 'required',
            
        ],
        [
           'question.required' => 'Please provide a faq question',      
            'answer.required' => 'Please provide faq question answer',
            'priority.required' => 'Please provide faq question priority',

        ]);

        $faq = Faq::find($id);
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->priority = $request->priority;
        $faq->save();

        session()->flash('success', 'faq has updated successfully !!');
        return redirect()->route('admin.faqs');

    } 
    public function delete($id)
    {
        $faq = Faq::find($id);

        if(!is_null($faq)){
           $faq->delete();
            }
        
        session()->flash('success', 'faq has deleted successfully !!');
        return back();
    }
}

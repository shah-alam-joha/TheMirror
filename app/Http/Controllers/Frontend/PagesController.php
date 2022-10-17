<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Beauty;
use App\Models\AboutUs;
use App\Models\Service;
use App\Models\Team;
use App\Models\Brand;
use App\Models\Review;
use App\Models\Gallery;
use App\Models\Faq;
use App\Models\Contact;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $abouts = AboutUs::orderBy('id', 'asc')->get();
       $sliders = Slider::orderBy('id', 'asc')->get();
       $beautys = Beauty::orderBy('id', 'asc')->get();
       $services = Service::orderBy('id', 'asc')->get();
       $teams = Team::orderBy('id', 'asc')->get();
       $brands = Brand::orderBy('id', 'asc')->get();
       $reviews = Review::orderBy('id', 'asc')->get();
       $reviews = Review::orderBy('id', 'asc')->get();
       $galleries = Gallery::orderBy('priority', 'asc')->get();
       $faqs = Faq::orderBy('priority', 'asc')->get();
       $contacts = Contact::orderBy('id', 'asc')->get();
       return view('frontend.pages.index', compact('sliders', 'beautys', 'abouts', 'services', 'teams', 'brands', 'reviews', 'galleries', 'faqs', 'contacts'));
   } 

   public function about()
   {
    $abouts = AboutUs::orderBy('id', 'asc')->get();
    $services = Service::orderBy('id', 'asc')->get();
    $teams = Team::orderBy('id', 'asc')->get();
    $brands = Brand::orderBy('id', 'asc')->get();
    $reviews = Review::orderBy('id', 'asc')->get();
       $contacts = Contact::orderBy('id', 'asc')->get();
$galleries = Gallery::orderBy('priority', 'asc')->get();
    return view('frontend.pages.about', compact('abouts', 'services', 'teams', 'brands', 'reviews', 'contacts', 'galleries'));
}

public function contact()
{
    $contacts = Contact::orderBy('id', 'asc')->get();
    $galleries = Gallery::orderBy('priority', 'asc')->get();
    return view('frontend.pages.contact', compact('contacts', 'galleries'));  

}

 public function faq()
{
    $faqs = Faq::orderBy('id', 'asc')->get();
    $teams = Team::orderBy('id', 'asc')->get();
    return view('frontend.pages.faq', compact('faqs', 'teams'));  

}  

public function team()
{
   $teams = Team::orderBy('id', 'asc')->get();
$galleries = Gallery::orderBy('priority', 'asc')->get();
   return view('frontend.pages.team', compact('teams', 'galleries'));  

}

public function service()
{
    $beautys = Beauty::orderBy('id', 'asc')->get();
    $services = Service::orderBy('id', 'asc')->get();
    $galleries = Gallery::orderBy('priority', 'asc')->get();
    return view('frontend.pages.service', compact('beautys', 'services', 'galleries'));   

}

public function offer()
{
    return view('frontend.pages.offer');  

}



}

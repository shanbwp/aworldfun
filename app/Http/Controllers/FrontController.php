<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Blog;
use App\Models\Category; 

class FrontController extends Controller
{
    public function Home()
    {  
      $game_cat      = Category::get();
      $blogs         = Blog::paginate(15);

      return view('front.game', compact('game_cat','blogs'));
    }
  
    public function Tournament()
    { 
    
      return view('front.tournament');
    }
    public function About()
    { 
      return view('front.about');
    }
    
    public function categoryGame($id)
    { 
      $cat  = Category::where('slug',$id)->first();
      $blogs = Blog::where('category_id',$cat->id)->paginate(5); 
      return view('front.game', compact('blogs'));
    }
   
    public function privacyPolicy()
    {  
      return view('front.privacypolicy');
    }
    public function termConditions()
    {
      return view('front.termconditions');
    }
   
    public function blogDetail($slug)
    {
      $blogdetail = Blog::where('slug',$slug)->first(); 
      $blogs      = Blog::take(9)->get();
      return view('front.blogdetail',compact('blogdetail','blogs'));
    }
    public function Contact()
    {
      $contact = Contact::get(); 
      return view('front.contact',compact('contact'));
    }
}

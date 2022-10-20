<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Blog;
use App\Models\Category; 
use App\Models\Gamedetail;
class FrontController extends Controller
{
    public function Home()
    {  
      $game_cat     = Category::get();
      $game         = Gamedetail::paginate(5);

      return view('front.game', compact('game_cat','game'));
    }
  
    public function Tournament()
    { 
      $results = Blog::get();
      return view('front.tournament', compact('results'));
    }
    public function About()
    { 
      return view('front.about');
    }
    
    public function gameDetail($id)
    {
      $gamedetail   = Gamedetail::where('slug',$id)->first();
      $game         = Gamedetail::where('category_id',$gamedetail->category_id)->take(12)->get();
    
      return view('front.gamedetail',compact('gamedetail','game'));
    }

    public function categoryGame($id)
    { 
      $cat  = Category::where('slug',$id)->first();
      $game = Gamedetail::where('category_id',$cat->id)->paginate(5); 
      return view('front.game', compact('game'));
    }
   
    public function Blog()
    {   
      $blogs = Blog::get();
      return view('front.blog',compact('blogs'));
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

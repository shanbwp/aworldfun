<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use App\Models\Contact;
use App\Models\Blog;
use App\Models\News;
use App\Models\Portfolio;
use App\Models\Subscriber;
use Illuminate\Http\Request;
 
class AdminController extends Controller
{
    
    public function index()
    {
        $beneficiery = User::get();
        $users = User::get();
        $contact = Contact::get();
        $blogs = Blog::get(); 
        return view('admin.dashboard',compact('beneficiery','users','contact','blogs'));
    }

    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

   
    
   
    public function edit(Admin $admin) 
    {
        //
    }

    
    public function update(Request $request, Admin $admin)
    {
        //
    }

    
    public function destroy(Admin $admin)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Auth;

class BlogController extends Controller
{
    
    public function index()
    {
        $results = Blog::get();
        return view('admin.blog.index',compact('results'));
    }

    public function create()
    { 
        $categories = Category::all();
        return view('admin.blog.create',compact('categories'));
    }

    
    public function store(Request $request)
    {
        $data = new Blog();
        $input = $request->all();
        $input['slug'] = str_replace(' ','-',$request->slug);
        if ($file = $request->file('image'))
         {
            $name = time().str_replace(' ', '', $file->getClientOriginalName());
            $file->move('assets/images/blog/',$name);
            $input['image'] = $name;
        }
        $data->fill($input)->save();
        return redirect()->route('blog-list');     
    }

    
    public function show( )
    {
        //
    }

    
    public function edit($id)
    {
        $data = Blog::findOrFail($id);
        $categories = Category::all();
        return view('admin.blog.edit',compact('data','categories'));

    }

    
    public function update(Request $request, $id)
    {
        $data = Blog::findOrFail($id);
        $input = $request->all();
        $input['slug'] = str_replace(" ","-", $input['slug']);  
       if ($file = $request->file('image'))
            { 
                $name = time().str_replace(' ', '', $file->getClientOriginalName());
                $file->move('assets/images/blog/',$name);
                if($data->image != null)
                {
                    if (file_exists(public_path().'/assets/images/blog/'.$data->image)) {
                        unlink(public_path().'/assets/images/blog/'.$data->image);
                    }
                }
            $input['image'] = $name;
            }
 
            $data->update($input);
            return redirect()->route('blog-list'); 
    }

    
    
        public function destroy($id)
        {
            $data = Blog::findOrFail($id);
           
            //If Photo Doesn't Exist
            if($data->image == null){
                $data->delete();
                //--- Redirect Section     
                $msg = 'Data Deleted Successfully.';
                
                //--- Redirect Section Ends     
            }else
            {
                if (file_exists(public_path().'/assets/images/blog/'.$data->image)) {
                    unlink(public_path().'/assets/images/blog/'.$data->image);
                }
                $data->delete();
                $msg = 'Data Deleted Successfully.';
            } 

         return redirect()->route('blog-list');       
        }
        public function userBlog()
        {
            $userBlog = Blog::get();
            return view('front.blog',compact('userBlog'));
        }
       
    
}

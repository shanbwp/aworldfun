<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Category;
use App\Models\Gamedetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GamedetailController extends Controller
{
    
    public function index()
    {
        $results = Gamedetail::get();
      return view('admin.gamedetail.index',compact('results'));
    }

   
    public function create()
    {
        $categories = Category::all();
        return view('admin.gamedetail.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Gamedetail();
        $input = $request->all();
        $input['slug'] = str_replace(' ', '-', $input['slug']);
        if ($file = $request->file('image'))
         {
            $name = time().str_replace(' ', '', $file->getClientOriginalName());
            $file->move('assets/images/gamedetail/',$name);
            $input['image'] = $name;
        }
        $data->fill($input)->save();
        return redirect()->route('game-list');     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $farming
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $farming
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Gamedetail::findOrFail($id);
        $categories = Category::get();
        return view('admin.gamedetail.edit',compact('data','categories'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Gamedetail::findOrFail($id);
        $input = $request->all();
        $input['slug'] = str_replace(' ', '-', $input['slug']);
       // print_r($input); exit;
       if ($file = $request->file('image'))
            { 
                $name = time().str_replace(' ', '', $file->getClientOriginalName());
                $file->move('assets/images/gamedetail/',$name);
                if($data->image != null)
                {
                    if (file_exists(public_path().'/assets/images/gamedetail/'.$data->image)) {
                        unlink(public_path().'/assets/images/gamedetail/'.$data->image);
                    }
                }
            $input['image'] = $name;
            }
 
            $data->update($input);
            return redirect()->route('game-list'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $farming
     * @return \Illuminate\Http\Response
     */
    
        public function destroy($id)
        {
            $data = Gamedetail::findOrFail($id);
           
            //If Photo Doesn't Exist
            if($data->image == null){
                $data->delete();
                //--- Redirect Section     
                $msg = 'Data Deleted Successfully.';
                
                //--- Redirect Section Ends     
            }else
            {
                if (file_exists(public_path().'/assets/images/gamedetail/'.$data->image)) {
                    unlink(public_path().'/assets/images/gamedetail/'.$data->image);
                }
                $data->delete();
                $msg = 'Data Deleted Successfully.';
            } 

         return redirect()->route('game-list');       
        }
        public function Portfolio()
        {
            $gamedetail = Gamedetail::get();
            return view('front.gamedetail',compact('gamedetail'));
        }

       

       
    
}

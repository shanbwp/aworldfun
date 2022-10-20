<?php

namespace App\Http\Controllers;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Slider::get();
      return view('admin.slider.index',compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Slider::get();
        return view('admin.slider.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Slider();
        $input = $request->all();
        if ($file = $request->file('image'))
         {
            $name = time().str_replace(' ', '', $file->getClientOriginalName());
            $file->move('assets/images/slider',$name);
            $input['image'] = $name;
        }
        

        if ($file = $request->file('bg_image'))
        {
           $name = time().str_replace(' ', '', $file->getClientOriginalName());
           $file->move('assets/images/slider',$name);
           $input['bg_image'] = $name;
       }
       $data->fill($input)->save();
       return redirect()->route('slider-list');    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CateSubCategorygory  $childcategory
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
        $data = Slider::findOrFail($id);
        return view('admin.slider.edit',compact('data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubCategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Slider::findOrFail($id);
        $input = $request->all();
       if ($file = $request->file('image'))
            {
                $name = time().str_replace(' ', '', $file->getClientOriginalName());
                $file->move('assets/images/slider',$name);
                if($data->image != null)
                {
                    if (file_exists(public_path().'/assets/images/slider/'.$data->image)) {
                        unlink(public_path().'/assets/images/slider/'.$data->image);
                    }
                }
            $input['image'] = $name;
            }
            if ($file = $request->file('bg_image'))
            {
                $name = time().str_replace(' ', '', $file->getClientOriginalName());
                $file->move('assets/images/slider',$name);
                if($data->image != null)
                {
                    if (file_exists(public_path().'/assets/images/slider/'.$data->image)) {
                        unlink(public_path().'/assets/images/slider/'.$data->image);
                    }
                }
            $input['bg_image'] = $name;
            }
            $data->update($input);
            return redirect()->route('slider-list'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $farming
     * @return \Illuminate\Http\Response
     */
    
        public function destroy($id)
        {
            $data = Slider::findOrFail($id);
           
            //If Photo Doesn't Exist
            if($data->image == null){
                $data->delete();
                //--- Redirect Section     
                $msg = 'Data Deleted Successfully.';
                
                //--- Redirect Section Ends     
            }else
            {
                if (file_exists(public_path().'/assets/images/slider/'.$data->image)) {
                    unlink(public_path().'/assets/images/slider/'.$data->image);
                }
                $data->delete();
                $msg = 'Data Deleted Successfully.';
            } 

         return redirect()->route('slider-list');       
        }

        public function frontslide()
    {
      $sliders = Slider::get();
      return view('layouts.home1',compact('sliders'));
    }
    
}

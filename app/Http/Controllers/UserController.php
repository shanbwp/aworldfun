<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


use Carbon\Carbon;

class UserController extends Controller
{
    
    public function accountUser()
    {
        $results = User::get();
        Auth('user')->user('name');
        return view('user.account', compact('results'));
    }

    public function index()
    {
        $results = User::get();
        return view('admin.user.index', compact('results'));
    }

   
    public function create()
    {
        return view('admin.user.create');
    }

    
    public function store(Request $request)
    {
        $input = $request->all();
        if ($file = $request->file('image')) {
            $name = time() . str_replace(' ', '', $file->getClientOriginalName());
            $file->move('assets/images/user', $name);
            $input['image'] = $name;
        }

        $input['password'] = Hash::make($input['password']);
        $result = User::create($input);

        return redirect()->back();
    }



    
    public function show($category)
    {
        //
    }

    
    public function edit($id)
    {
        $data = User::findOrFail($id);
        return view('admin.user.edit', compact('data'));
    }
    public function Detail($id)
    {
        $data = User::findOrFail($id);
        return view('admin.user.detail', compact('data'));
    }

    
    public function update(Request $request, $id)
    {
        $data = User::findOrFail($id);
        $input = $request->all();
        if ($file = $request->file('image')) {
            $name = time() . str_replace(' ', '', $file->getClientOriginalName());
            $file->move('assets/images/user', $name);
            if ($data->image != null) {
                if (file_exists(public_path() . '/assets/images/user/' . $data->image)) {
                    unlink(public_path() . '/assets/images/user/' . $data->image);
                }
            }
            $input['image'] = $name;
        }

        $data->update($input);
        return redirect()->route('user-list');
    }

   

    public function destroy($id)
    {
        $data = User::findOrFail($id);

        //If Photo Doesn't Exist
        if ($data->image == null) {
            $data->delete();
            $msg = 'Data Deleted Successfully.';
        } else {
            if (file_exists(public_path() . '/assets/images/user/' . $data->image)) {
                unlink(public_path() . '/assets/images/user/' . $data->image);
            }
            $data->delete();
            $msg = 'Data Deleted Successfully.';
        }

        return redirect()->route('user-list');
    }
    public function accountUpdate(Request $request, $id)
    {
        $data = User::findOrFail($id);
        $request->validate([
            'password' => ['required'],
            'confirm_password' => ['same:new_password'],
        ]);

        $input = $request->all();
        $input['password'] =  Hash::make($request->password);
        $data->update($input);
        return redirect()->back();
    }


    
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $data['title']="List of Shareholders";
        $data['users']=User::all();
        return view('user.index',$data);
    }

    public function create(){
        $data['title'] = "Create Shareholder";

        return view('user.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|unique:users|string',
            'email'=>'required',
            'password'=>'required',
            'share'=>'required|regex:/^\d+(\.\d{1,2})?$/',
            
        ]);
        $user= new User();
        $user->name=$request->name;
        $user->share=$request->share;
        $user->total_share=$request->total_share;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->save();
        return redirect()->route('user.index');
    }

    public function edit($id)
    {

        $data['title'] = "Edit Shareholder";
        $data['data']=User::find($id);
        return view('user.edit', $data);
    }

    public function update(Request $request,$id)
    {
        return "got yaaa";
    }
}

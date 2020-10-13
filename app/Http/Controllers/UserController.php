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

        $users = New User();
        $users = $users->orderBy('id', 'DESC')->paginate(10);
        $data['users']=$users;
        $data['serial']    = 1;
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
        $request->validate([
            'name'=>'required|string|unique:users,name,'.$id,
            'email'=>'required',
            //'password'=>'required',
            'share'=>'required|regex:/^\d+(\.\d{1,2})?$/',
            
        ]);
        $user=  User::find($id);
        $user->name=$request->name;
        $user->share=$request->share;
        $user->total_share=$request->total_share;
        $user->email=$request->email;
        if(isset($request->password)){
            $user->password=Hash::make($request->password);
        }
       // 
        $user->save();
        return redirect()->route('user.edit',$id);
    }

    public function show($id)
    {
        $user=User::find($id);
        
        //return $user;
        return view('user.show',compact('user'));
    }
}

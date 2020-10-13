<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Disburshment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DisburshmentController extends Controller
{
    public function index()
    {
         $data['title']="List of Disburshment";
         $data['disburshments']=Disburshment::all();
        
         return view('disburshment.index',$data);
        // return "hello";
    }
    public function create()
    {
        // $user=isset(Auth::user()->id);
        // return $user;
        $data['shareholders']=User::all();
        return view('disburshment.create',$data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'amount'=>'required|regex:/^\d+(\.\d{1,2})?$/',
            
        ]);
        $disburshment= new Disburshment();
        $disburshment->shareholder_id=$request->shareholder_id;
        $disburshment->amount=$request->amount;
        $disburshment->date=$request->date;
        $disburshment->save();
        return redirect()->route('disburshment.create');
        
    }


    public function edit($id)
    {

        $data['title'] = "Edit Disburshment";
        $data['data']=Disburshment::find($id);
        $data['shareholders']=User::all();
        return view('disburshment.edit', $data);
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'amount'=>'required|regex:/^\d+(\.\d{1,2})?$/',
            
        ]);
        $disburshment=  Disburshment::find($id);
        $disburshment->amount=$request->amount;
        $disburshment->date=$request->date;
        $disburshment->shareholder_id=$request->shareholder_id;
   
       // 
        $disburshment->save();
        return redirect()->route('disburshment.edit',$id);
    }

    // public function show($id)
    // {
    //     $user=User::find($id);
        
    //     //return $user;
    //     return view('user.show',compact('user'));
    // }
}

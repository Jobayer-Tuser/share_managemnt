<?php

namespace App\Http\Controllers;

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
    }
    public function create()
    {
        // $user=isset(Auth::user()->id);
        // return $user;
        return view('disburshment.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'amount'=>'required|regex:/^\d+(\.\d{1,2})?$/',
            
        ]);
        $disburshment= new Disburshment();
        $disburshment->shareholder_id=isset(Auth::user()->id);
        $disburshment->amount=$request->amount;
        $disburshment->date=$request->date;
        $disburshment->save();
        return redirect()->route('disburshment.create');
        
        // $user=isset(Auth::user()->id);
        // return $user;
        
        return view('disburshment.create');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinancialController extends Controller
{
    public function index(){
        $data['title']="Financial List";
        $data['financials']=Financial::all();
        return view('financial.index',$data);
    }
}

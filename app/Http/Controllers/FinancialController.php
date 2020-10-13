<?php

namespace App\Http\Controllers;

use App\Models\Financial;
use Illuminate\Http\Request;

class FinancialController extends Controller
{
    public function index(){
        $data['title']="Financial List";
        $data['financials']=Financial::all();
        //return $data['financials'];
        return view('financial.index',$data);
    }
}

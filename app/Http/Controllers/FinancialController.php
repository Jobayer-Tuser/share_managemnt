<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinancialController extends Controller
{
    public function index(){
        $data['title']="Financial List";
        return view('financial.index',$data);
    }
}

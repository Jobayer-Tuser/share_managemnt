<?php

namespace App\Http\Controllers;

use App\Models\Financial;
use Illuminate\Http\Request;

class FinancialController extends Controller
{
    public function index(){
        $data['title']="Financial List";

        $financials = New Financial();
        $financials = $financials->orderBy('id', 'DESC')->simplePaginate(5);
        $data['financials']=$financials;
        $data['serial']    = 1;
        return view('financial.index',$data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisburshmentController extends Controller
{
    public function index()
    {
        $data['title']="List of Disburshment";
        return view('disburshment.index',$data);
    }
}

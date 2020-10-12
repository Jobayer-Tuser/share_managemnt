<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data['title']="List of Shareholders";
        return view('user.index',$data);
    }

    public function create(){
        $data['title'] = "Create Shareholder";

        return view('user.create', $data);
    }
}

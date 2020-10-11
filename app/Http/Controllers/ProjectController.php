<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $data['title']="List of projects";
        return view('project.index',$data);
    }
    public function create()
    {
        return view();
    }
}

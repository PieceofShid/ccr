<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CamController extends Controller
{
    public function add()
    {
        return view('cam.create');
    }

    public function create(Request $request)
    {
        return $request->all();
    }
}

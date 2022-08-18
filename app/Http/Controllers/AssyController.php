<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssyController extends Controller
{
    public function add()
    {
        return view('assy.create');
    }

    public function create(Request $request)
    {
        return $request->all();
    }
}

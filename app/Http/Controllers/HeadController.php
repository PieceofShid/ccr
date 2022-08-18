<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeadController extends Controller
{
    public function add()
    {
        return view('head.create');
    }

    public function create(Request $request)
    {
        return $request->all();
    }
}

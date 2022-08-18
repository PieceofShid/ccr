<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrankController extends Controller
{
    public function add()
    {
        return view('crank.create');
    }

    public function create(Request $request)
    {
        return $request->all();
    }
}

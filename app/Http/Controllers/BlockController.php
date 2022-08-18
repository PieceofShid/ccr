<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlockController extends Controller
{
    public function add()
    {
        return view('block.create');
    }

    public function create(Request $request)
    {
        return $request->all();
    }
}

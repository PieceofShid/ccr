<?php

namespace App\Http\Controllers;

use App\Models\Block;
use Exception;
use Illuminate\Http\Request;

class BlockController extends Controller
{
    public function add()
    {
        return view('block.create');
    }

    public function check($date)
    {
        $block = Block::where('tanggal', $date)->get();

        return $block;
    }

    public function create(Request $request)
    {
        try{
            Block::updateOrCreate($request->only('tanggal'), $request->all());

            return redirect()->back()->with('success', 'Data berhasil diproses');
        }catch(Exception $x){
            return redirect()->back()->with('error', $x->getMessage());
        }
    }
}

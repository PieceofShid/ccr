<?php

namespace App\Http\Controllers;

use App\Models\Head;
use Exception;
use Illuminate\Http\Request;

class HeadController extends Controller
{
    public function add()
    {
        return view('head.create');
    }

    public function check($date, $tipe)
    {
        $head = Head::where('tanggal', $date)->where('tipe', $tipe)->get();

        return $head;
    }

    public function create(Request $request)
    {
        try{
            Head::updateOrCreate($request->only(['tanggal', 'tipe']), $request->all());

            return redirect()->back()->with('success', 'Data berhasil diproses');
        }catch(Exception $x){
            return redirect()->back()->with('error', $x->getMessage());
        }
    }
}

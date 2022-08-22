<?php

namespace App\Http\Controllers;

use App\Models\Crank;
use Exception;
use Illuminate\Http\Request;

class CrankController extends Controller
{
    public function add()
    {
        return view('crank.create');
    }

    public function check($date, $tipe)
    {
        $crank = Crank::where('tanggal', $date)->where('tipe', $tipe)->get();

        return $crank;
    }

    public function create(Request $request)
    {
        try{
            Crank::updateOrCreate($request->only(['tanggal', 'tipe']), $request->all());

            return redirect()->back()->with('success', 'Data berhasil diproses');
        }catch(Exception $x){
            return redirect()->back()->with('error', $x->getMessage());
        }
    }
}

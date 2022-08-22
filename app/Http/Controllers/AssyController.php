<?php

namespace App\Http\Controllers;

use App\Models\Assy;
use Exception;
use Illuminate\Http\Request;

class AssyController extends Controller
{
    public function add()
    {
        return view('assy.create');
    }

    public function check($date, $tipe)
    {
        $assy = Assy::where('tanggal', $date)->where('tipe', $tipe)->get();

        return $assy;
    }

    public function create(Request $request)
    {
        try{
            Assy::updateOrCreate($request->only(['tanggal', 'tipe']), $request->all());

            return redirect()->back()->with('success', 'Data berhasil diproses');
        }catch(Exception $x){
            return redirect()->back()->with('error', $x->getMessage());
        }
    }
}

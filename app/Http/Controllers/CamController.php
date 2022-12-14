<?php

namespace App\Http\Controllers;

use App\Models\Cam;
use Exception;
use Illuminate\Http\Request;

class CamController extends Controller
{
    public function add()
    {
        return view('cam.create');
    }

    public function check($date, $tipe)
    {
        $cam = Cam::where('tanggal', $date)->where('tipe', $tipe)->get();

        return $cam;
    }

    public function create(Request $request)
    {
        try{
            Cam::updateOrCreate($request->only(['tanggal', 'tipe']), $request->all());

            return redirect()->back()->with('success', 'Data berhasil diproses');
        }catch(Exception $x){
            return redirect()->back()->with('error', $x->getMessage());
        }
    }
}

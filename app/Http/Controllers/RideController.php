<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class RideController extends Controller
{
    public function index()
    {
        $rides = \App\Ride::all();
        return view('admin.mitra.ride',['rides'=>$rides]);
    }

    public function create(Request $request)
    {
        \App\Ride::create($request->all());
        return redirect('ride')->with('message','Data berhasil ditambah');
    }

    public function edit($id)
    {
        $rides = \App\Ride::find($id);
        return view('admin.mitra.rideEdit',['rides'=>$rides]);
    }

    public function update(Request $request, $id)
    {
        $rides=\App\Ride::find($id);
        $rides->update($request->all());
        return redirect('ride')->with('message','Data berhasil diupdate');
    }
    public function delete($id)
    {
        $rides=\App\Ride::find($id);
        $rides->delete($rides);
        return redirect('ride')->with('message','Data berhasil dihapus');
    }

    public function profil($id)
    {
        $rides=\App\Ride::find($id);
        return view('admin.mitra.rideProfil',['rides'=>$rides]);
    }
}

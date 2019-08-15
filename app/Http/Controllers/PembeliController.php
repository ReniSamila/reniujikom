<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pembeli;
use Session;
use Auth;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembeli = pembeli::orderBy('created_at', 'desc')->get();
        return view('backend.Pembeli.index', compact('pembeli'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pembeli = Pembeli::all();
        return view('backend.Pembeli.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pembeli = new Pembeli;
        $pembeli->nama = $request->get('nama');
        $pembeli->slug = str_slug($request->nama);
        $pembeli->save();
        Session::flash("flash_notofication", [
            "level" => "success",
            "message" => "Berhasil menyimpan <b>$motor->nama</b>"
        ]);
        return redirect()->route('pembeli.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pembeli = pembeli::findOrFail($id)->edit();
        $pembeli->no_ktp = $request->get('no_ktp');
        $pembeli->nama_pembeli = $request->get('nama_pembeli');
        $pembeli->alamat_pembeli = $request->get('alamat_pembeli');
        $pembeli->telpon_pembeli = $request->get('telpon_pembeli');
        $pembeli->pembeli_hp = $request->get('pembeli_hp');
        $pembeli->save();
        $response = [
            'success' => true,
            'data' => $pembeli,
            'message' => 'Berhasil disimpan'
        ];
        return response()->json($response, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pembeli = new pembeli;
        $pembeli->no_ktp = $request->get('no_ktp');
        $pembeli->nama_pembeli = $request->get('nama_pembeli');
        $pembeli->alamat_pembeli = $request->get('alamat_pembeli');
        $pembeli->telpon_pembeli = $request->get('telpon_pembeli');
        $pembeli->pembeli_hp = $request->get('pembeli_hp');
        $pembeli->save();
        $response = [
            'success' => true,
            'data' => $pembeli,
            'message' => 'Berhasil disimpan'
        ];
        return response()->json($response, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembeli = Pembeli::findOrFail($id)->delete();
        $response = [
            'success' => true,
            'data' => $pembeli,
            'message' => 'Berhasil disimpan'
        ];
        return response()->json($response, 200);
    }
}

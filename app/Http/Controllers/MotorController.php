<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Motor;
use Session;

class MotorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motor = Motor::all();
        return view('backend.motor.index', compact('motor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.motor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kategori = new Kategori;
        $kategori->nama = $request->get('nama');
        $kategori->slug = str_slug($request->nama);
        $kategori->save();
        Session::flash("flash_notofication", [
            "level" => "success",
            "message" => "Berhasil menyimpan <b>$motor->nama</b>"
        ]);
        return redirect()->route('kategori.index');
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
        $motor = Motor::findOrFail($id)->edit();
        $motor->motor_merk = $request->get('motor_merk');
        $motor->motor_type = $request->get('motor_type');
        $motor->motor_warna_pilihan = $request->get('motor_warna_pilihan');
        $motor->motor_harga = $request->get('motor_harga');
        $motor->motor_gambar = $request->get('motor_gambar');
        $motor->save();
        $response = [
            'success' => true,
            'data' => $motor,
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
        $motor = new Motor;
        $motor->motor_merk = $request->get('motor_merk');
        $motor->motor_type = $request->get('motor_type');
        $motor->motor_warna_pilihan = $request->get('motor_warna_pilihan');
        $motor->motor_harga = $request->get('motor_harga');
        $motor->motor_gambar = $request->get('motor_gambar');
        $motor->save();
        $response = [
            'success' => true,
            'data' => $motor,
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
        $motor = Motor::findOrFail($id)->delete();
        $response = [
            'success' => true,
            'data' => $motor,
            'message' => 'Berhasil disimpan'
        ];
        return response()->json($response, 200);
    }
}

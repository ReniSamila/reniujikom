<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\motor;
use File;

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
        return view('backend.Motor.index', compact('motor'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $motor = Motor::all();
        return view('backend.Motor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $motor = new Motor();
        $motor->motor_kode = $request->motor_kode;
        $motor->motor_merk = $request->motor_merk;
        $motor->motor_type = $request->motor_type;
        $motor->motor_warna = $request->motor_warna;
        $motor->motor_harga = $request->motor_harga;
        if ($request->hasFile('motor_gambar')) {
            $file = $request->file('motor_gambar');
            $path = public_path() .
                '/assets/img/motor/';
            $filename = str_random(6) . '_'
                . $file->getClientOriginalName();
            $upload = $file->move(
                $path,
                $filename
            );
            $motor->motor_gambar = $filename;
        }
        $motor->save();
        return redirect()->route('motor.index');
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
        $motor->motor_warna_pilihan = $request->get('motor_warna');
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
        $motor->motor_kode = $request->get('motor_kode');
        $motor->motor_merk = $request->get('motor_merk');
        $motor->motor_type = $request->get('motor_type');
        $motor->motor_warna = $request->get('motor_warna');
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

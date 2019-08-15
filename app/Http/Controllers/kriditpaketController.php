<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kriditpaket;
use Session;
use Auth;

class kriditpaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kriditpaket = kriditpaket::orderBy('created_at', 'desc')->get();
        return view('backend.kriditpaket.index', compact('kriditpaket'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kriditpaket = kriditpaket::all();
        return view('backend.kriditpaket.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kriditpaket = new kriditpaket;
        $kriditpaket->nama = $request->get('nama');
        $kriditpaket->slug = str_slug($request->nama);
        $kriditpaket->save();
        Session::flash("flash_notofication", [
            "level" => "success",
            "message" => "Berhasil menyimpan <b>$kriditpaket->nama</b>"
        ]);
        return redirect()->route('kriditpaket.index');
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
        $kriditpaket = kriditpaket::findOrFail($id)->edit();
        $kriditpaket->kode = $request->get('kode');
        $kriditpaket->harga_cash = $request->get('harga_cash');
        $kriditpaket->uang_muka = $request->get('uang_muka');
        $kriditpaket->jumlah_cicilan = $request->get('jumlah_cicilan');
        $kriditpaket->paket_bunga = $request->get('paket_bunga');
        $kriditpaket->nilai_cicilan = $request->get('nilai_cicilan');
        $kriditpaket->save();
        $response = [
            'success' => true,
            'data' => $kriditpaket,
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
        $kriditpaket = new kriditpaket;
        $kriditpaket->kode = $request->get('kode');
        $kriditpaket->harga_cash = $request->get('harga_cash');
        $kriditpaket->uang_muka = $request->get('uang_muka');
        $kriditpaket->jumlah_cicilan = $request->get('jumlah_cicilan');
        $kriditpaket->paket_bunga = $request->get('paket_bunga');
        $kriditpaket->nilai_cicilan = $request->get('nilai_cicilan');
        $kriditpaket->save();
        $response = [
            'success' => true,
            'data' => $kriditpaket,
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
        $kriditpaket = kriditpaket::findOrFail($id)->delete();
        $response = [
            'success' => true,
            'data' => $kriditpaket,
            'message' => 'Berhasil disimpan'
        ];
        return response()->json($response, 200);
    }
}

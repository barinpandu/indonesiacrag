<?php

namespace App\Http\Controllers;

use App\Models\Crag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CragsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    // pake quiry builder
        // $tebing = DB::table('tebings')->get();
    // pake Eloquent
        $data['tebings'] = Crag::all();

        return view('tebing.index', $data);
        // return view('tebing/index', ['tebings' => $tebings]);
        // return view('tebing/index', compact('tebings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tebing.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //cara save()
        // $tebing = new Tebing;
        // $tebing->nama = $request->nama;
        // $tebing->lokasi = $request->lokasi;
        // $tebing->provinsi = $request->provinsi;
        // $tebing->jenis = $request->jenis;
        // $tebing->retribusi = $request->retribusi;
        // $tebing->jumlah_jalur = $request->jumlah_jalur;
        // $tebing->cara = $request->cara;

        // $tebing->save();

    //cara create(), tapi harus tambahkan variabel fillable/guarded di model
        // Tebing::create([
        //     'nama' = $request->nama;
        //     'lokasi' = $request->lokasi;
        //     'provinsi' = $request->provinsi;
        //     'jenis' = $request->jenis;
        //     'retribusi' = $request->retribusi;
        //     'jumlah_jalur'= $request->jumlah_jalur;
        //     'cara' = $request->cara;
        // ])

        $request->validate([
            'nama' => 'required|integer',
            'lokasi' => 'required',
            'provinsi' => 'required',
            'jenis_batuan' => 'required',
            'retribusi' => 'required|integer',
            'jumlah_jalur' => 'required',
            'jenis_pemanjatan' => 'required',
        ], [
            'nama.required' => 'nama tidak boleh kosong',
            'nama.integer' => 'nama harus dalam bentuk angka'
        ]);

        Tebing::create($request->all());
        return redirect('/crags')->with('status', 'Data Berhasil Ditambahkan!');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tebing $tebing)
    {
        return view('tebing.show', compact('tebing'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    
}

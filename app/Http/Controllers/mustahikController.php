<?php

namespace App\Http\Controllers;

use App\Models\mustahikModels;
use Illuminate\Http\Request;

class mustahikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = mustahikModels::all()->sortBy('mustahik');
        return view('admin.mustahik', ['no' => 1])->with('data', $data);
    }
    public function mustahiknonaktif()
    {
        $data = mustahikModels::all()->sortBy('mustahik');
        return view('admin.mustahiknonaktif', ['no' => 1])->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.mustahiktambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'notel' => 'required',
        ]);

        $data = [
            'namamustahik' => $request->nama,
            'alamatmustahik' => $request->alamat,
            'notelmustahik' => $request->notel,
            'kategorimustahik' => $request->kategori,
            'statusmustahik' => "Aktif"
        ];

        mustahikModels::create($data);
        return redirect('/mustahik')->with('pesan', 'Data Mustahik berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(mustahikModels $mustahikModels)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = mustahikModels::where('idmustahik', $id)->first();
        return view('admin.mustahikedit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'notel' => 'required',
        ]);

        $data = [
            'namamustahik' => $request->nama,
            'alamatmustahik' => $request->alamat,
            'notelmustahik' => $request->notel,
            'kategorimustahik' => $request->kategori,
            'statusmustahik' => $request->status
        ];

        mustahikModels::where('idmustahik', $id)->update($data);
        return redirect('/mustahik')->with('pesan', 'Data Mustahik berhasil diEdit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mustahikModels $mustahikModels)
    {
        //
    }
}

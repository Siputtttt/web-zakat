<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\zakatModels;
use Illuminate\Http\Request;

class zakat extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('zakat_masuk')
            ->join('jenis_zakat', 'jenis_zakat.idzakat', '=', 'zakat_masuk.idzakat')
            ->get();
        // $data = zakatModels::all()->sortBy('namadonatur');
        return view('admin.zakatMal', ['no' => 1])->with('data', $data);
    }

    public function zakatpendapatan()
    {
        $data = DB::table('zakat_masuk')
            ->join('jenis_zakat', 'jenis_zakat.idzakat', '=', 'zakat_masuk.idzakat')
            ->get();
        // $data = zakatModels::all()->sortBy('namadonatur');
        return view('admin.zakatPenghasilan', ['no' => 1])->with('data', $data);
    }
    public function zakatfitrah()
    {
        $data = DB::table('zakat_masuk')
            ->join('jenis_zakat', 'jenis_zakat.idzakat', '=', 'zakat_masuk.idzakat')
            ->get();
        // $data = zakatModels::all()->sortBy('namadonatur');
        return view('admin.zakatFitrah', ['no' => 1])->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = zakatModels::where('idzakatms', $id)->first();
        return view('admin.zakatEdit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'status' => $request->status
        ];

        zakatModels::where('idzakatms', $id)->update($data);

        $jenis = $request->jenis;
        $pesan = "";

        switch ($jenis) {
            case "1":
                $pesan = "Data Zakat Penghasilan Telah diperbarui";
                return redirect('/zakatpenghasilan')->with('pesan', $pesan);
            case "2":
                $pesan = "Data Zakat Mal Telah diperbarui";
                return redirect('/zakat')->with('pesan', $pesan);
            case "3":
                $pesan = "Data Zakat Fitrah Telah diperbarui";
                return redirect('/zakatfitrah')->with('pesan', $pesan);
            default:
                return redirect('/')->with('pesan', "Jenis Zakat tidak valid");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

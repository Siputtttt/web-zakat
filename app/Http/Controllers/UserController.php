<?php

namespace App\Http\Controllers;

use App\Models\kontakModels;
use App\Models\zakatModels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function hitungzakat()
    {
        return view('hitungzakat');
    }
    public function bayarzakat()
    {
        $jenis = DB::table('jenis_zakat')->get();
        $data = ['jenis' => $jenis, 'n' => 0];
        return view('zakatbayar', $data);
    }
    public function simpanbayarzakat(Request $request)
    {
        $request->validate([
            'idzakat' => 'required',
            // 'nominal' => 'requried|numeric',
            // 'image' => 'required|mimes: jpg,png,gif|max:1024'
        ]);

        $data = [
            'idzakat' => $request->idzakat,
            'nominal' => $request->nominal,
            'namadonatur' => $request->nama,
            'noteldonatur' => $request->notel,
            'emaildonatur' => $request->email,
            'kelamin' => $request->kelamin,
            'status' => "Belum validasi"
        ];

        if ($request->hasFile('foto')) {
            $foto_file = $request->file('foto');
            $foto_nama = $foto_file->hashName();
            $foto_file->move(public_path('storage'), $foto_nama);

            $data['foto'] = $foto_nama;
        }

        var_dump($data);
        die();
        zakatModels::create($data);
        return redirect('/bayarzakat')->with('pesan', "Sudah Tersimpan");
    }
    public function kontak()
    {
        return view('kontak');
    }
    public function simpansaran(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'subjek' => 'required',
            'saran' => 'required',
        ]);

        $data = [
            'nama' => $request->nama,
            'subjek' => $request->subjek,
            'saran' => $request->saran,
        ];
        kontakModels::create($data);
        return redirect('kontak')->with('pesan', 'Terimakasih atas saran dan masukan nya');
    }
}

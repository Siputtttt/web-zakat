<?php

namespace App\Http\Controllers;

use App\Models\mustahikModels;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = mustahikModels::all()->sortBy('mustahik');
        $fk = 0;
        $mk = 0;
        $gf = 0;
        $mf = 0;
        foreach ($data as $item) {
            if ($item->kategorimustahik == "Fakir") {
                $fk++;
            } elseif ($item->kategorimustahik == "Miskin") {
                $mk++;
            } elseif ($item->kategorimustahik == "Gharim") {
                $gf++;
            } elseif ($item->kategorimustahik == "Mualaf") {
                $mf++;
            }
        }
        return view('admin.home', ['fk' => $fk, 'mk' => $mk, 'gf' => $gf, 'mf' => $mf])->with('data', $data);
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
    public function show(mustahikModels $mustahikModels)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(mustahikModels $mustahikModels)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, mustahikModels $mustahikModels)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mustahikModels $mustahikModels)
    {
        //
    }
}

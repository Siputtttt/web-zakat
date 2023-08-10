<?php

namespace App\Http\Controllers;

use App\Models\saranModels;
use Illuminate\Http\Request;

class saranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = saranModels::all()->sortBy('saran');
        return view('admin.saranmasuk', ['no' => 1])->with('data', $data);
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
    public function show(saranModels $saranModels)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(saranModels $saranModels)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, saranModels $saranModels)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        saranModels::where('idsaran', $id)->delete();
        return redirect('/saran')->with('pesan', 'Product deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\JenisBarang;
use Illuminate\Http\Request;

class JenisBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenis = JenisBarang::paginate(10);

        return response()->json([
            'data' => $jenis
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JenisBarang  $jenisBarang
     * @return \Illuminate\Http\Response
     */
    public function show(JenisBarang $jenisBarang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JenisBarang  $jenisBarang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JenisBarang $jenisBarang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JenisBarang  $jenisBarang
     * @return \Illuminate\Http\Response
     */
    public function destroy(JenisBarang $jenisBarang)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AnggotaRumahTangga;
use Illuminate\Http\Request;

class AnggotaRumahTanggaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        // $r  = $reque
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $r)
    {
        $r = $r->all();
        $data = AnggotaRumahTangga::where('kepala_id', $r['id'])->get();
        dd($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AnggotaRumahTangga $anggotaRumahTangga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AnggotaRumahTangga $anggotaRumahTangga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AnggotaRumahTangga $anggotaRumahTangga)
    {
        //
    }
}

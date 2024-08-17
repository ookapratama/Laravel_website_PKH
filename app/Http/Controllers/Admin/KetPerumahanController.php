<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KepalaRumah;
use App\Models\KetPerumahan as ModelsKetPerumahan;
use Illuminate\Http\Request;

class KetPerumahanController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // dd($id);
        $getkrt = KepalaRumah::find($id);
        // dump($getkrt->id);
        $datas = ModelsKetPerumahan::where('kepala_id',$getkrt->id)->get();
        dd($datas);
        return view('pages.admin.penerimaPKH.modal.modal_rumah', compact('datas'));

        // return response()->json($datas);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

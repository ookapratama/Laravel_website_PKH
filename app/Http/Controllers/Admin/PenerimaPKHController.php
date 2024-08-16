<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PenerimaPKH;
use Illuminate\Http\Request;

class PenerimaPKHController extends Controller
{

    private $menu;
    public function __construct($menu = 'penerima')
    {
        $this->menu = $menu;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menu = $this->menu;
        $datas = PenerimaPKH::orderByDesc('id')->get();
        return view('pages.admin.penerimaPKH.index', compact('menu', 'datas'));
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
    public function show(PenerimaPKH $penerimaPKH)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PenerimaPKH $penerimaPKH)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PenerimaPKH $penerimaPKH)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PenerimaPKH $penerimaPKH)
    {
        //
    }
}

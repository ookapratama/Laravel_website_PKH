<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PenerimaPKH;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    private $menu;
    public function __construct($menu = 'dashboard')
    {
        $this->menu = $menu;
    }

    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $menu = $this->menu;
        $sudahDiverifikasi = PenerimaPKH::where('status', 'S')->count();
        $belumDiproses = PenerimaPKH::where('status', 'B')->count();

        // Menyiapkan data untuk chart
        $chartData = [
            'labels' => ['Sudah diverifikasi', 'Belum diproses'],
            'data' => [$sudahDiverifikasi, $belumDiproses]
        ];
        return view('pages.admin.index', compact('menu', 'chartData'));
    }

    public function statistik()
    {
        // Menghitung jumlah penerima PKH berdasarkan status
        $menu = 'dashboard';
        $sudahDiverifikasi = PenerimaPKH::where('status', 'S')->count();
        $belumDiproses = PenerimaPKH::where('status', 'B')->count();

        // Menyiapkan data untuk chart
        $chartData = [
            'labels' => ['Sudah diverifikasi', 'Belum diproses'],
            'data' => [$sudahDiverifikasi, $belumDiproses]
        ];

        $menu = 'dashboard';

        return view('pages.user.statistik', compact('menu', 'chartData'));
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

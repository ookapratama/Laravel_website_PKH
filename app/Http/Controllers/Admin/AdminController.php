<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AnggotaRumahTangga;
use App\Models\KepalaRumah;
use App\Models\PenerimaPKH;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $getKrt = KepalaRumah::get()->count();
        $getArt = AnggotaRumahTangga::get()->count();

        $getMale = KepalaRumah::where('jkl', 'Laki-laki')->get()->count() + AnggotaRumahTangga::where('jkl', 'Laki-laki')->get()->count();
        $getFemale = KepalaRumah::where('jkl', 'Perempuan')->get()->count() + AnggotaRumahTangga::where('jkl', 'Perempuan')->get()->count();
        $genderData = [
            'labels' => ['Laki-laki', 'Perempuan'],
            'data' => [$getMale, $getFemale]
        ];

        $getTidakSekolah = AnggotaRumahTangga::where('partisipasi_sekolah', 'Tidak/belum pernah sekolah')->get()->count();
        $getMasihSekolah = AnggotaRumahTangga::where('partisipasi_sekolah', 'Masih sekolah')->get()->count();
        $getNeverSekolah = AnggotaRumahTangga::where('partisipasi_sekolah', 'Tidak bersekolah lagi')->get()->count();

        $sekolahCounts = [
            'labels' => ['Tidak/belum pernah sekolah' ,'Masih sekolah', 'Tidak bersekolah lagi'],
            'data' => [$getTidakSekolah, $getMasihSekolah, $getNeverSekolah]
        ];

        $penduduk = $getKrt + $getArt;
        // dd($penduduk);

        // Pie chart data for "Pekerjaan"
        $pekerjaanLabels = [
            'Petani',
            'Pekebun',
            'Peternak',
            'Kuli bangunan',
            'Pedagang',
            'Jasa pendidikan',
            'Jasa kesehatan',
            'Lainnya'
        ];

        $jenisCacatLabels = [
            'Tidak cacat',
            'Tidak daksana/cacat tubuh',
            'Tuna netra/buta',
            'Tuna rungu',
            'Tuna wicara',
            'Tuna rungu dan wicara',
            'Tuna netra dan cacat tubuh',
            'Tuna netra, rungu dan wicara',
            'Tuna rungu, wicara, dan cacat tubuh',
            'Cacat mental retardasi',
            'Mantan penderita gangguan jiwa',
            'Cacat fisik dan mental'
        ];

        $penyakitLabels = [
            'Tidak ada',
            'Hipertensi',
            'Rematik',
            'Asma',
            'Masalah jantung',
            'Diabetes',
            'Tuberculosis',
            'Stroke',
            'Kanker atau tumor ganas',
            'Lainnya'
        ];

        // Get data from the database
        $pekerjaanData = AnggotaRumahTangga::select('pekerjaan', DB::raw('count(*) as total'))
            ->groupBy('pekerjaan')
            ->pluck('total', 'pekerjaan')
            ->toArray();

        $jenisCacatData = AnggotaRumahTangga::select('jenis_cacat', DB::raw('count(*) as total'))
            ->groupBy('jenis_cacat')
            ->pluck('total', 'jenis_cacat')
            ->toArray();

        $penyakitData = AnggotaRumahTangga::select('riwayat_penyakit', DB::raw('count(*) as total'))
            ->groupBy('riwayat_penyakit')
            ->pluck('total', 'riwayat_penyakit')
            ->toArray();

        // Ensure all labels are present, with default count 0 if missing
        $pekerjaanCounts = array_merge(array_fill_keys($pekerjaanLabels, 0), $pekerjaanData);
        $jenisCacatCounts = array_merge(array_fill_keys($jenisCacatLabels, 0), $jenisCacatData);
        $penyakitCounts = array_merge(array_fill_keys($penyakitLabels, 0), $penyakitData);
        // dd($jenisCacatCounts);
        // Menyiapkan data untuk chart
        $chartData = [
            'labels' => ['Sudah diverifikasi', 'Belum diproses'],
            'data' => [$sudahDiverifikasi, $belumDiproses]
        ];
        return view('pages.admin.index', compact('menu', 'chartData', 'genderData', 'getKrt', 'penduduk', 'pekerjaanCounts', 'jenisCacatCounts', 'penyakitCounts', 'sekolahCounts'));
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

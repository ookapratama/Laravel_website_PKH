<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\AnggotaRumahTangga;
use App\Models\KepalaRumah;
use App\Models\KetAset;
use App\Models\KetPerumahan;
use App\Models\PenerimaPKH;
use Illuminate\Http\Request;

class Penerima extends Controller
{
    private $menu;
    public function __construct($menu = 'permintaan')
    {
        $this->menu = $menu;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menu = $this->menu;
        // $datas = PenerimaPKH::latest()->first();
        $datas = PenerimaPKH::get();
        $dataArt = AnggotaRumahTangga::get();
        // $datas = PenerimaPKH::orderByDesc('id')->get();
        return view('pages.user.permintaan', compact('menu', 'datas', 'dataArt'));
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
        $r = $request->all();
        // dd($r);

        // 
        KepalaRumah::create($r);
        $getkrt = KepalaRumah::latest()->first();
        $r['kepala_id'] = $getkrt->id;

        // 
        $aset = KetAset::create($r);
        $getAset = KetAset::latest()->first();
        $r['aset_id'] = $getAset->id;

        // 
        $file = $request->file('foto');

        $ext = $file->getClientOriginalExtension();

        $nameFoto = date('Y-m-d_H-i-s_') . "." . $ext;
        $destinationPath = public_path('upload/rumah');
        $file->move($destinationPath, $nameFoto);
        $fileUrl = asset('upload/rumah/' . $nameFoto);
        $r['foto'] = $nameFoto;
        // dd($r['foto']);
        $rumah = KetPerumahan::create($r);
        $getRumah = KetPerumahan::latest()->first();
        $r['perumahan_id'] = $getRumah->id;

        // dd(KetPerumahan::latest()->first());
        // dd(KetAset::latest()->first());


        if ((int) $r['jumlah_art'] > 0) {
            // dd('ada anak');
            $jumlahART = $request->input('jumlah_art');
            for ($i = 1; $i <= $jumlahART; $i++) {
                $anggota = new AnggotaRumahTangga([
                    'tempat_lahir' => $request->input("tempat_lahir_art_$i") ?? '',
                    'tgl_lahir' => $request->input("tgl_lahir_art_$i") ?? '',
                    'jenis_cacat' => $request->input("jenis_cacat_art_$i") ?? '',
                    'penghasilan_perbulan' => $request->input("penghasilan_perbulan_art_$i") ?? '',
                    'nama' => $request->input("nama_art_$i") ?? '',
                    'nik' => $request->input("nik_art_$i") ?? '',
                    'hubungan' => $request->input("hubungan_art_$i") ?? '',
                    'jkl' => $request->input("jkl_art_$i") ?? '',
                    'umur' => $request->input("umur_art_$i") ?? '',
                    'status_kawin' => $request->input("status_kawin_art_$i") ?? '',
                    'kepemilikan_akta' => $request->input("kepemilikan_akta_art_$i") ?? '',
                    'kartu_identitas' => $request->input("kartu_identitas_art_$i") ?? '',
                    'status_kehamilan' => $request->input("status_kehamilan_art_$i") ?? '',
                    'riwayat_penyakit' => $request->input("riwayat_penyakit_art_$i") ?? '',
                    'partisipasi_sekolah' => $request->input("partisipasi_sekolah_art_$i") ?? '',
                    'jenjang_pendidikan' => $request->input("jenjang_pendidikan_art_$i") ?? '',
                    'ijazah' => $request->input("ijazah_art_$i") ?? '',
                    'pekerjaan' => $request->input("pekerjaan_art_$i") ?? '',
                    'kedudukan_pekerjaan' => $request->input("kedudukan_pekerjaan_art_$i") ?? '',
                    'kepala_id' => $r['kepala_id'], // Asosiasi ke Penerima
                ]);

                $anggota->save();
            }
        }

        PenerimaPKH::create($r);
        // dd($r);
        return redirect()->route('permintaan.index')->with('message', 'store permintaan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $r)
    {
        $r = $r->all();
        $r['nik'] = $r['nik']  ?? '';
        $getkrt = KepalaRumah::where('nik', $r['nik'])->first();
        
        
        if ($getkrt) {
            $getPenerima = PenerimaPKH::where('kepala_id', $getkrt->id)->first();
            $getAset = KetAset::where('kepala_id', $getkrt->id)->first();
            $getRumah = KetPerumahan::where('kepala_id', $getkrt->id)->first();
            $art = AnggotaRumahTangga::where('kepala_id', $getkrt->id)->get();

            $datas = collect([
                (object) [
                    'krt' => $getkrt,
                    'penerima' => $getPenerima,
                    'status' => $getAset ? 'S' : 'P'
                ]
            ]);
            // dd($datas);
            return response()->json([
                'html' => view('pages.user.table_cek', ['datas' => $datas])->render()
            ]);
        } else {
            return response()->json([
                'html' => '<p>Data tidak ditemukan</p>'
            ]);
        }
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

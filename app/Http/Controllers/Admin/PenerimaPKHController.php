<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AnggotaRumahTangga;
use App\Models\KepalaRumah;
use App\Models\KetAset;
use App\Models\KetPerumahan;
use App\Models\PenerimaPKH;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

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
        $menu = $this->menu;
        return view('pages.admin.penerimaPKH.create', compact('menu'));
    }

    public function getArtData(Request $request)
    {
        $krtId = $request->krt_id;
        $artData = AnggotaRumahTangga::where('kepala_id', $krtId)->get();

        return view('pages.admin.penerimaPKH.art-table', compact('artData'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }


    public function detailAll(Request $request)
    {
        $r = $request->all();
        // dd($r);
        $krtId = $request->krt_id;

        $artData = AnggotaRumahTangga::where('kepala_id', $krtId)->get();
        $asetData = KetAset::where('kepala_id', $krtId)->first();
        $rumahData = KetPerumahan::where('kepala_id', $krtId)->first();
        // dd($rumahData);
        return view('pages.admin.penerimaPKH.modal.modal', compact('artData', 'asetData', 'rumahData'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $r)
    {
        // dump($r->all());
        $getkrt = KepalaRumah::find($r->krt_id);
        $datas = KetPerumahan::where('kepala_id', $getkrt->id)->first();
        // dd($datas);
        return view('pages.admin.penerimaPKH.modal.modal_rumah', compact('datas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $menu = $this->menu;
        $datas = PenerimaPKH::find($id);
        $dataArt =  AnggotaRumahTangga::where('kepala_id', $datas->kepala_id)->get();
        return view('pages.admin.penerimaPKH.edit', compact('menu', 'datas', 'dataArt'));
    }

    public function verifikasi(Request $r)
    {
        $r = $r->all();

        $getPKH = PenerimaPKH::find($r['id']);
        // dd($getPKH);
        $r['status'] = 'S';

        $getPKH->update($r);
        return response()->json($getPKH);
    }

    public function cetak(Request $r, $id)
    {
        $r = $r->all();
        $data = PenerimaPKH::findOrFail($id);
        // dd($data);


        $getKepala = KepalaRumah::where('id', $data->kepala_id)->first();


        $getArt = AnggotaRumahTangga::where('kepala_id', $getKepala->id)->get();
        // dd($getArt);


        $getAset = KetAset::where('id', $data->aset_id)->first();


        $getRumah = KetPerumahan::where('id', $data->perumahan_id)->first();




        // Load the view with the data
        $pdf = Pdf::loadView('pages.admin.penerimaPKH.cetak', compact('data', 'getArt', 'getAset', 'getRumah', 'getKepala'))
            ->setPaper('a3', 'landscape');;

        // Download the PDF
        return $pdf->download('data-permintaan-PKH.pdf');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $r = $request->all();
        // dd($r);
        // Find the existing KepalaRumah record by ID and update it
        $kepalaRumah = KepalaRumah::find($r['id']);
        $kepalaRumah->update($r);

        // Update KetAset record associated with KepalaRumah
        $aset = KetAset::where('kepala_id', $kepalaRumah->id)->first();
        if ($aset) {
            $aset->update($r);
        }

        // Update KetPerumahan record associated with KepalaRumah
        $rumah = KetPerumahan::where('kepala_id', $kepalaRumah->id)->first();
        if ($rumah) {
            // Check if a new file has been uploaded
            if ($request->hasFile('foto')) {
                $file = $request->file('foto');
                $ext = $file->getClientOriginalExtension();
                $nameFoto = date('Y-m-d_H-i-s_') . "." . $ext;
                $destinationPath = public_path('upload/rumah');
                $file->move($destinationPath, $nameFoto);
                $fileUrl = asset('upload/rumah/' . $nameFoto);
                $r['foto'] = $nameFoto;
            }

            $rumah->update($r);
        }

        // Update AnggotaRumahTangga records associated with KepalaRumah
        if ((int) $r['jumlah_art'] > 0) {
            $jumlahART = $request->input('jumlah_art');

            // Delete old ART records
            AnggotaRumahTangga::where('kepala_id', $kepalaRumah->id)->delete();

            // Add updated ART records
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
                    'kepala_id' => $kepalaRumah->id,
                ]);

                $anggota->save();
            }
        }

        // Update PenerimaPKH record
        $penerimaPKH = PenerimaPKH::where('kepala_id', $kepalaRumah->id)->first();
        if ($penerimaPKH) {
            $penerimaPKH->update($r);
        }
        // dd($aset);


        return redirect()->route('penerima.index')->with('message', 'update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PenerimaPKH $penerimaPKH, Request $request)
    {
        $r = $request->all();
        $getPKH = PenerimaPKH::find($r['id']);

        $getKrt = KepalaRumah::find($getPKH->kepala_id);
        $getRumah = KetPerumahan::find($getPKH->perumahan_id);
        $getAset = KetAset::find($getPKH->aset_id);
        $getArt = AnggotaRumahTangga::where('kepala_id', $getKrt->id)->get();


        // dump($getKrt);
        // dump($getRumah);
        // dump($getAset);
        // dd($getArt);

        // Mulai transaksi database
        DB::beginTransaction();
        try {
            // Hapus semua data ART terkait
            foreach ($getArt as $art) {
                $art->delete();
            }

            // Hapus data Kepala Rumah, KetPerumahan, dan KetAset
            if ($getKrt) {
                $getKrt->delete();
            }

            if ($getRumah) {
                $getRumah->delete();
            }

            if ($getAset) {
                $getAset->delete();
            }

            // Hapus data penerima PKH
            $getPKH->delete();

            // Commit transaksi
            DB::commit();

            return response()->json(['message' => 'Data berhasil dihapus'], 200);
        } catch (\Exception $e) {
            // Rollback jika terjadi kesalahan
            DB::rollBack();
            return response()->json(['message' => 'Gagal menghapus data', 'error' => $e->getMessage()], 500);
        }
    }
}

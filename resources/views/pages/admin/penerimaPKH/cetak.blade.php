<!DOCTYPE html>
<html>

<head>
    <title>Surat Permintaan PKH</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 26px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .section {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <h1>Surat Permintaan PKH</h1>

    <div class="section">
        <h2>Identitas Kepala Rumah</h2>
        <h3>Nomor KK: {{ $getKepala->kk }}</h3>
        <ul>
            <li>Nama Kepala Rumah Tangga: {{ $getKepala->nama }}</li>
            <li>NIK: {{ $getKepala->nik }}</li>
            <li>Jenis kelamin: {{ $getKepala->jkl }}</li>
            <li>Alamat: {{ $getKepala->alamat }} - RT{{ $getKepala->rt }}/RW{{ $getKepala->rw }}</li>
            <li>Pendidikan terakhir: {{ $getKepala->pendidikan_terakhir }}</li>
            <li>Pekerjaan: {{ $getKepala->pekerjaan }}</li>
            <li>Tempat, tanggal lahir: {{ $getKepala->tempat_lahir }}, {{ $getKepala->tgl_lahir }} </li>
            <li>Riwayat penyakit: {{ $getKepala->riwayat_penyakit }}</li>
            <li>Jenis cacat: {{ $getKepala->jenis_cacat }}</li>
            <li>Jumlah ART: 0{{ $getKepala->jumlah_art }}</li>
        </ul>
    </div>

    <div class="section">
        <h2>Anggota Rumah Tangga (ART)</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Hubungan</th>
                    <th>Status Kehamilan</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat, tanggal lahir</th>

                    <th>Riwayat penyakit</th>
                    <th>Jenis cacat</th>
                    <th>Partisipasi sekolah</th>
                    <th>Jenjang pendidikan</th>
                    <th>Ijazah terakhir</th>
                    <th>Pekerjaan utama</th>
                    <th>Penghasilan perbulan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($getArt as $index => $art)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $art->nik }}</td>
                        <td>{{ $art->nama }}</td>
                        <td>{{ $art->hubungan }}</td>
                        @if ($art->hubungan == 'Istri/Suami')
                            <td>{{ $art->status_kehamilan }}</td>
                        @endif
                        <td>{{ $art->jkl }}</td>
                        <td>{{ $art->tempat_lahir }}, {{ $art->tgl_lahir }} </td>
                        <td>{{ $art->riwayat_penyakit }}</td>
                        <td>{{ $art->jenis_cacat }}</td>
                        <td>{{ $art->partisipasi_sekolah }}</td>
                        <td>{{ $art->jenjang_pendidikan }}</td>
                        <td>{{ $art->ijazah }}</td>
                        <td>{{ $art->pekerjaan }}</td>
                        <td>{{ $art->penghasilan_perbulan }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <div class="section">
        <h2>Detail Perumahan</h2>
        <ul>
            <li>Status Penugasan bangunan tempat tinggal: {{ $getRumah->status_penugasan }}</li>
            <li>Status Lahan tempat tinggal: {{ $getRumah->status_lahan }}</li>
            <li>Luas Lantai : {{ $getRumah->luas_lantai }}(m2)</li>
            <li>Jenis Lantai : {{ $getRumah->jenis_lantai }}</li>
            <li>Jenis Atap : {{ $getRumah->jenis_atap }}</li>
            <li>Kondisi atap : {{ $getRumah->kondisi_atap }}</li>
            <li>Jumlah kamar : {{ $getRumah->jumlah_kamar }}</li>
            <li>Cara memperoleh air minum : {{ $getRumah->peroleh_air }}</li>
            <li>Sumber Penerangan utama : {{ $getRumah->sumber_penerangan }}</li>
            @if ($getRumah->sumber_penerangan == 'Listrik')
                <li>Jumlah watt : {{ $getRumah->watt_listrik }}</li>
            @endif
            <li>Bahan bakar/energi untuk memasak : {{ $getRumah->bahan_energi }}</li>
            <li>Penggunaan fasilitas tempat BAB : {{ $getRumah->guna_wc }}</li>
            <li>Jenis kloset : {{ $getRumah->jenis_wc }}</li>
            <li>Tempat pembuangan akhir tinja : {{ $getRumah->akhir_wc }}</li>
            <li>Foto :
                <img src="{{ public_path('upload/rumah/' . $getRumah->foto) }}" width="600" alt="">
            </li>
            <!-- Add more fields as needed -->
        </ul>
    </div>

    <div class="section">
        <h2>Detail Kepemilikan aset</h2>
        <h3>Rumah tangga memiliki sendiri aset bergerak sebagai berikut :</h3>
        <ul>
            <li>Lemari es/kulkas: {{ $getAset->have_lemari_es }}</li>
            <li>Televisi: {{ $getAset->have_tv }}</li>
            <li>Sepeda: {{ $getAset->have_sepeda }}</li>
            <li>Sepeda motor: {{ $getAset->have_motor }}</li>
            <li>Luas lahan: {{ $getAset->luas_lahan }}(m2)</li>
            <li>kepemilikan_akta ternak: {{ $getAset->have_ternak }} Sebanyak {{ $getAset->jumlah_ternak }}</li>
            <!-- Add more fields as needed -->
        </ul>
    </div>

</body>

</html>

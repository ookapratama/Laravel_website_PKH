
<h3>Detail Kepala Rumah Tangga</h3>
<p>NIK: {{ $krtData->nik }}</p>
<p>Nama: {{ $krtData->nama }}</p>
<p>Tempat, tanggal lahir: {{ $krtData->tempat_lahir }}, {{ $krtData->tgl_lahir }} </p>
<p>Jenis Kelamin: {{ $krtData->jkl }}</p>
<p>Alamat lengkap: {{ $krtData->alamat }}</p>
<p>Pendidikan terakhir: {{ $krtData->pendidikan_terakhir }}</p>
<p>Pekerjaan : {{ $krtData->pekerjaan }}</p>
<p>Penghasilan perbulan : {{ $krtData->penghasilan_perbulan }}</p>
<p>Riwayat penyakit : {{ $krtData->riwayat_penyakit }}</p>
<p>Jenis cacat : {{ $krtData->jenis_cacat }}</p>
<p>Jumlah anggota rumah tangga : {{ $krtData->jumlah_art }}</p>

<h3>Data Anggota Rumah Tangga</h3>
<div class="table-responsive">
    {{-- <a data-toggle="modal" data-target="#createArtModal" id="createArtButton" class="btn btn-primary text-white my-3">+
        Tambah ART</a> --}}
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>Hubungan</th>
                <th>Jenis Kelamin</th>
                <th>Tempat, tanggal lahir</th>
                <th>Hubungan</th>
                <th>Pekerjaan</th>
                <th>Penghasilan perbulan</th>
                <th>Jenis cacat</th>
                <th>Pendidikan</th>
                {{-- <th>Aksi</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($artData as $index => $v)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $v->nama }}</td>
                    <td>{{ $v->nik }}</td>
                    <td>{{ $v->hubungan }}</td>
                    <td>{{ $v->jkl }}</td>
                    <td class="text-nowrap">{{ $v->tempat_lahir }}, {{ $v->tgl_lahir }}</td>
                    <td>{{ $v->hubungan }}</td>
                    <td>{{ $v->pekerjaan == '' ? "Tidak kerja" : $v->pekerjaan }}</td>
                    <td>{{ $v->penghasilan_perbulan == '' ? 'Tidak ada' : $v->penghasilan_perbulan }}</td>
                    <td>{{ $v->jenis_cacat }}</td>
                    <td>{{ $v->jenjang_pendidikan }}</td>
                    {{-- <td>
                        <!-- Actions like Edit/Delete for each ART -->
                        <a href="#" class="btn btn-warning btn-sm">Edit</a>
                        <form action="#" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>

</div>


<hr>
<h3>Detail Perumahan</h3>
<p>Status Penugasan: {{ $rumahData->status_penugasan }}</p>
<p>Status Lahan: {{ $rumahData->status_lahan }}</p>
<p>Luas Lantai: {{ $rumahData->luas_lantai }}</p>
<p>Jenis Lantai: {{ $rumahData->jenis_lantai }}</p>
<p>Jenis Dinding: {{ $rumahData->jenis_dinding }}</p>
<p>Jenis Atap: {{ $rumahData->jenis_atap }}</p>
<p>Jumlah Kamar: {{ $rumahData->jumlah_kamar }}</p>
<p>Perolehan Air: {{ $rumahData->peroleh_air }}</p>
<p>Sumber Penerangan: {{ $rumahData->sumber_penerangan }}</p>
@if ($rumahData->sumber_penerangan == 'Listrik')
    <p>Jumlah watt : {{ $rumahData->watt_listrik }}</p>
@endif
<p>Bahan Energi: {{ $rumahData->bahan_energi }}</p>
<p>Guna WC: {{ $rumahData->guna_wc }}</p>
<p>Jenis WC: {{ $rumahData->jenis_wc }}</p>
<p>Akhir WC: {{ $rumahData->akhir_wc }}</p>

<hr>

<h3>Detail Aset</h3>
<p>Punya Lemari Es: {{$asetData->have_lemari_es}} </p>
<p>Punya TV: {{$asetData->have_tv}} </p>
<p>Punya Sepeda: {{$asetData->have_sepeda}} </p>
<p>Punya Motor: {{$asetData->have_motor}} </p>
<p>Luas Lahan: {{$asetData->luas_lahan}} </p>
<p>Punya Ternak: {{$asetData->have_ternak}} </p>
<p>Jumlah Ternak: {{$asetData->jumlah_ternak}} </p>

<hr>

<p class="mt-2">Foto Rumah:
    <img src="{{ asset('upload/rumah/' . $rumahData->foto) }}" alt="Foto Rumah" width="250">
</p>







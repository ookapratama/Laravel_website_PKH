<p>Status Penugasan: {{ $datas->status_penugasan }}</p>
<p>Status Lahan: {{ $datas->status_lahan }}</p>
<p>Luas Lantai: {{ $datas->luas_lantai }}</p>
<p>Jenis Lantai: {{ $datas->jenis_lantai }}</p>
<p>Jenis Dinding: {{ $datas->jenis_dinding }}</p>
<p>Jenis Atap: {{ $datas->jenis_atap }}</p>
<p>Jumlah Kamar: {{ $datas->jumlah_kamar }}</p>
<p>Perolehan Air: {{ $datas->peroleh_air }}</p>
<p>Sumber Penerangan: {{ $datas->sumber_penerangan }}</p>
<p>Bahan Energi: {{ $datas->bahan_energi }}</p>
<p>Guna WC: {{ $datas->guna_wc }}</p>
<p>Jenis WC: {{ $datas->jenis_wc }}</p>
<p>Akhir WC: {{ $datas->akhir_wc }}</p>
<p>Foto:
    <img src="{{ asset('upload/rumah/'. $datas->foto) }}" alt="Foto Rumah"
        width="250">
</p>

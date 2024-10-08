<div class="card-header">
    <h4>Form Permintaan PKH</h4>
</div>


<div class="col-md-12 col-lg-12">
    <form action="{{ route('permintaan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input required name="nama" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>NIK</label>
                            <input required name="nik" type="number" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    {{-- <div class="col-md-6">
                        <div class="form-group">
                            <label>No KK</label>
                            <input required name="kk" type="text" class="form-control">
                        </div>
                    </div> --}}
                </div>




                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select required name="jkl" class="form-control ">
                                <option value="">-- Pilih Jenis Kelamin --</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Alamat </label>
                            <input required type="text" name="alamat" class="form-control"
                                placeholder="isi dengan lengkap ">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Tempat Lahir </label>
                            <input required type="text" name="tempat_lahir" class="form-control"
                                placeholder="isi dengan lengkap ">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input required type="date" name="tgl_lahir" class="form-control"
                                placeholder="isi dengan lengkap ">
                        </div>
                    </div>




                </div>

                <div class="row">
                    {{-- <div class="col-md-3">
                        <div class="form-group">
                            <label>RT </label>
                            <input required type="string" max="3" placeholder="00X" name="rt"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>RW </label>
                            <input required type="string" max="3" placeholder="00X" name="rw"
                                class="form-control">
                        </div>
                    </div> --}}
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Pendidikan terakhir </label>

                            <select name="pendidikan_terakhir" class="form-control">
                                <option value="">-- Pilih --</option>
                                <option value="Tidak punya ijazah">Tidak punya ijazah</option>
                                <option value="SD/Sederajat">SD/Sederajat</option>
                                <option value="SMP/Sederajat">SMP/Sederajat</option>
                                <option value="SMA/Sederajat">SMA/Sederajat</option>
                                <option value="D1/D2/D3">D1/D2/D3</option>
                                <option value="D4/S1">D4/S1</option>
                                <option value="S2/S3">S2/S3</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Penghasilan Bulanan</label>
                            <input required type="text" name="penghasilan_perbulan" class="form-control currency">
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Pekerjaan </label>
                            <select required name="pekerjaan" class="form-control">
                                <option value="">-- Pilih --</option>
                                <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                                <option value="Wiraswasta">Wiraswasta</option>
                                <option value="Petani">Petani</option>
                                <option value="Pekebun">Pekebun</option>
                                <option value="Peternak">Peternak</option>
                                <option value="Kuli bangunan">Kuli bangunan</option>
                                <option value="Pedagang">Pedagang</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Penyakit kronis/menahun</label>
                            {{-- <input required type="text" name="riwayat_penyakit" class="form-control "> --}}
                            <select required name="riwayat_penyakit" class="form-control">
                                <option value="">-- Pilih Penyakit kronis/menahun --</option>
                                <option value="Tidak ada">Tidak ada</option>
                                <option value="Hipertensi">Hipertensi</option>
                                <option value="Rematik">Rematik</option>
                                <option value="Asma">Asma</option>
                                <option value="Masalah jantung">Masalah jantung</option>
                                <option value="Diabetes">Diabetes</option>
                                <option value="Tuberculosis">Tuberculosis</option>
                                <option value="Stroke">Stroke</option>
                                <option value="Kanker atau tumor ganas">Kanker atau tumor ganas</option>
                                <option value="Lainnya (gagal ginjal, paru-paru flek, dan sejenisnya)">Lainnya (gagal
                                    ginjal, paru-paru flek, dan sejenisnya)</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Jenis cacat</label>
                            <select required name="jenis_cacat" class="form-control ">
                                <option value="">-- Pilih --</option>
                                <option value="Tidak cacat">Tidak cacat</option>
                                <option value="Tidak daksa/cacat tubuh">Tidak daksa/cacat tubuh</option>
                                <option value="Tuna netra/buta">Tuna netra/buta</option>
                                <option value="Tuna rungu">Tuna rungu</option>
                                <option value="Tuna wicara">Tuna wicara</option>
                                <option value="Tuna rungu dan wicara">Tuna rungu dan wicara</option>
                                <option value="Tuna netra dan cacat tubuh">Tuna netra dan cacat tubuh</option>
                                <option value="Tuna netra, rungu dan wicara">Tuna netra, rungu dan wicara</option>
                                <option value="Tuna rungu, wicara, dan cacat tubuh">Tuna rungu, wicara, dan cacat tubuh</option>
                                <option value="Cacat mental retardasi">Cacat mental retardasi</option>
                                <option value="Mantan penderita gangguan jiwa">Mantan penderita gangguan jiwa</option>
                                <option value="Cacat fisik dan mental">Cacat fisik dan mental</option>
                            </select>
                        </div>
                    </div>


                </div>

                <hr>

                <h4>Keterangan Perumahan</h4>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Status Penugasan bangunan tempat tinggal</label>
                            <select required name="status_penugasan" class="form-control">
                                <option value="">-- Pilih --</option>
                                <option value="Milik sendiri">Milik sendiri</option>
                                <option value="Kontrak/Sewa">Kontrak/Sewa</option>
                                <option value="Bebas sewa">Bebas sewa</option>
                                <option value="Dinas">Dinas</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Status lahan tempat tinggal</label>
                            <select required name="status_lahan" class="form-control">
                                <option value="">-- Pilih --</option>
                                <option value="Milik sendiri">Milik sendiri</option>
                                <option value="Milik orang lain">Milik orang lain</option>
                                <option value="Tanah negara">Tanah negara</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Luas lantai (m2)</label>
                            <input required type="text" required name="luas_lantai" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Jenis lantai</label>
                            <select required name="jenis_lantai" class="form-control">
                                <option value="">-- Pilih --</option>
                                <option value="Marmer/granit">Marmer/granit</option>
                                <option value="Keramik">Keramik</option>
                                <option value="Tanah">Tanah</option>
                                <option value="Kayu/papan kualitas tinggi">Kayu/papan kualitas tinggi</option>
                                <option value="Semen/bata merah">Semen/bata merah</option>
                                <option value="Kayu/papan kualitas rendah">Kayu/papan kualitas rendah</option>
                                <option value="Ubin/tegel/teraso">Ubin/tegel/teraso</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Jenis dinding</label>
                            <select required name="jenis_dinding" class="form-control">
                                <option value="">-- Pilih --</option>
                                <option value="Tembok">Tembok</option>
                                <option value="Bambu">Bambu</option>
                                <option value="Kayu">Kayu</option>
                                <option value="Anyaman bambu">Anyaman bambu</option>
                                <option value="Bambu">Bambu</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Jenis atap</label>
                            <select required name="jenis_atap" class="form-control">
                                <option value="">-- Pilih --</option>
                                <option value="Beton/genteng beton">Beton/genteng beton</option>
                                <option value="Bambu">Bambu</option>
                                <option value="Asbes">Asbes</option>
                                <option value="Seng">Seng</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Jumlah kamar</label>
                            <input required type="text" required name="jumlah_kamar" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Sumber air minum</label>
                            <input required type="text" required name="peroleh_air" class="form-control">

                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Sumber penerangan utama</label>
                            <select required name="sumber_penerangan" id="sumber_penerangan" class="form-control">
                                <option value="">-- Pilih --</option>
                                <option value="Listrik">Listrik</option>
                                <option value="Listrik non PLN">Listrik non PLN</option>
                                <option value="Bukan listrik">Bukan listrik</option>
                            </select>

                        </div>
                    </div>

                    <div class="col-md-3" id="watt_listrik" style="display: none">
                        <div class="form-group">
                            <label>Jumlah watt</label>
                            <select required name="watt_listrik"  class="form-control">
                                <option value="">-- Pilih --</option>
                                <option value="450 watt">450 watt</option>
                                <option value="900 watt">900 watt</option>
                                <option value="1300 watt">1300 watt</option>
                                <option value="2200 watt">2200 watt</option>
                                <option value="> 2200 watt">> 2200 watt</option>
                                <option value="Tanpa meteran">Tanpa meteran</option>
                            </select>

                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Bahan bakar/energi utama untuk memasak</label>
                            <input required type="text" required name="bahan_energi" class="form-control">

                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Penggunanaan fasilitas tempat BAB</label>
                            <select required name="guna_wc" class="form-control">
                                <option value="">-- Pilih --</option>
                                <option value="Sendiri">Sendiri</option>
                                <option value="Bersama">Bersama</option>
                                <option value="Umum">Umum</option>
                                <option value="Tidak ada">Tidak ada</option>
                            </select>

                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Jenis Kloset</label>
                            <select required name="jenis_wc" class="form-control">
                                <option value="">-- Pilih --</option>
                                <option value="Leher angsa">Leher angsa</option>
                                <option value="Plengesengan">Plengesengan</option>
                                <option value="Cemplung/cubluk">Cemplung/cubluk</option>
                                <option value="Tidak paka">Tidak paka</option>
                            </select>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Tempat pembuangan akhir tinja</label>
                            <select required name="akhir_wc" id="akhir_wc" class="form-control">
                                <option value="">-- Pilih --</option>
                                <option value="Tangki">Tangki</option>
                                <option value="SPAL">SPAL</option>
                                <option value="Lubang tanah">Lubang tanah</option>
                                <option value="Kolam/sungai/sawah/danau/laut">Kolam/sungai/sawah/danau/laut</option>
                                <option value="Tanah lapang/kebun">Tanah lapang/kebun</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Upload foto rumah</label>
                            <input required type="file" required name="foto" class="form-control">

                        </div>
                    </div>

                </div>




                <hr>

                <h4>Kepemilikan Aset dan Keikutsertaan Program</h4>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Lemari es/kulkas</label>
                            <select required name="have_lemari_es" class="form-control">
                                <option value="">-- Pilih --</option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Televisi</label>
                            <select required name="have_tv" class="form-control">
                                <option value="">-- Pilih --</option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Sepeda</label>
                            <select required name="have_sepeda" class="form-control">
                                <option value="">-- Pilih --</option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Sepeda motor</label>
                            <select required name="have_motor" class="form-control">
                                <option value="">-- Pilih --</option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Luas lahan (m2)</label>
                            <input type="text" required name="luas_lahan" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Jenis ternak </label>
                            <select required name="have_ternak" class="form-control">
                                <option value="">-- Pilih --</option>
                                <option value="Sapi">Sapi</option>
                                <option value="Kerbau">Kerbau</option>
                                <option value="Ayam">Ayam</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Jumlah Ternak</label>
                            <input type="text" required name="jumlah_ternak" class="form-control">
                        </div>
                    </div>

                    {{-- <div class="col-md-3">
                        <div class="form-group">
                            <label>ART Memiliki usaha sendiri/bersama</label>
                            <select  name="have_usaha" class="form-control">
                                <option value="">-- Pilih --</option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>
                    </div> --}}

                </div>

                {{-- <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Penghasilan Bulanan</label>
                            <input type="text" name="penghasilan_bulanan" class="form-control currency">
                        </div>
                    </div>
                </div> --}}




                <hr>

                <h4>Data Anggota Rumah Tangga</h4>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Jumlah Anggota Rumah Tangga</label>
                            <input id="jumlah_art" required name="jumlah_art" type="number"
                                oninput="generateARTForms()" class="form-control">
                        </div>
                    </div>

                </div>

                <div id="artFormsContainer"></div>

            </div>



            <div class="card-footer text-right">
                <button class="btn btn-primary " type="submit">Submit</button>
                <button class="btn btn-secondary mx-1" type="reset">Reset</button>
            </div>
    </form>
</div>

<script>
    const penerangan = document.getElementById('sumber_penerangan');
    const watt = document.getElementById('watt_listrik');

    penerangan.addEventListener('change', function() {
        if (penerangan.value === 'Listrik') {
            watt.style.display = 'block';
        } else {
            watt.style.display = 'none';
        }
    });

    function generateARTForms() {
        const container = document.getElementById('artFormsContainer');
        const jumlahART = document.getElementById('jumlah_art').value;
        container.innerHTML = ''; // Clear existing forms

        for (let i = 1; i <= jumlahART; i++) {
            const artForm = `
            <div class="card mt-4">
                <div class="card-body">
                    <h5>Anggota Rumah Tangga ${i}</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama</label>
                                <input required name="nama_art_${i}" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>NIK</label>
                                <input required name="nik_art_${i}" type="number" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hubungan dengan Kepala Keluarga</label>
                                 <select required name="hubungan_art_${i}" id="hubungan_art_${i}" class="form-control">
                                    <option value="">-- Pilih Hubungan dengan Kepala Keluarga --</option>
                                    <option value="Kepala rumah tangga">Kepala rumah tangga</option>
                                    <option value="Istri/Suami">Istri/Suami</option>
                                    <option value="Anak">Anak</option>
                                    <option value="Menantu">Menantu</option>
                                    <option value="Cucu">Cucu</option>
                                    <option value="Orang tua/Mertua">Orang tua/Mertua</option>
                                    <option value="Pembantu ruta">Pembantu ruta</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select required name="jkl_art_${i}" class="form-control">
                                    <option value="">-- Pilih Jenis Kelamin --</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Tempat Lahir </label>
                                <input required type="text" name="tempat_lahir_art_${i}" class="form-control"
                                    placeholder="isi dengan lengkap ">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input required type="date" name="tgl_lahir_art_${i}" class="form-control"
                                    placeholder="isi dengan lengkap ">
                            </div>
                        </div>
                    
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Status Kehamilan (opsional)</label>
                                <select  name="status_kehamilan_art_${i}" id="status_kehamilan_art_${i}" class="form-control">
                                    <option value="">-- Pilih Status Kehamilan --</option>
                                    <option value="Ya">Ya</option>
                                    <option value="Tidak">Tidak</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Penyakit kronis/menahun</label>
                                 <select required name="riwayat_penyakit_art_${i}" class="form-control">
                                    <option value="">-- Pilih Penyakit kronis/menahun --</option>
                                    <option value="Tidak ada">Tidak ada</option>
                                    <option value="Hipertensi">Hipertensi</option>
                                    <option value="Rematik">Rematik</option>
                                    <option value="Asma">Asma</option>
                                    <option value="Masalah jantung">Masalah jantung</option>
                                    <option value="Diabetes">Diabetes</option>
                                    <option value="Tuberculosis">Tuberculosis</option>
                                    <option value="Stroke">Stroke</option>
                                    <option value="Kanker atau tumor ganas">Kanker atau tumor ganas</option>
                                    <option value="Lainnya (gagal ginjal, paru-paru flek, dan sejenisnya)">Lainnya (gagal ginjal, paru-paru flek, dan sejenisnya)</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Jenis cacat</label>
                                <select required name="jenis_cacat_art_${i}" class="form-control ">
                                    <option value="">-- Pilih --</option>
                                    <option value="Tidak cacat">Tidak cacat</option>
                                    <option value="Tidak daksa/cacat tubuh">Tidak daksa/cacat tubuh</option>
                                    <option value="Tuna netra/buta">Tuna netra/buta</option>
                                    <option value="Tuna rungu">Tuna rungu</option>
                                    <option value="Tuna wicara">Tuna wicara</option>
                                    <option value="Tuna rungu dan wicara">Tuna rungu dan wicara</option>
                                    <option value="Tuna netra dan cacat tubuh">Tuna netra dan cacat tubuh</option>
                                    <option value="Tuna netra, rungu dan wicara">Tuna netra, rungu dan wicara</option>
                                    <option value="Tuna rungu, wicara, dan cacat tubuh">Tuna rungu, wicara, dan cacat tubuh</option>
                                    <option value="Cacat mental retardasi">Cacat mental retardasi</option>
                                    <option value="Mantan penderita gangguan jiwa">Mantan penderita gangguan jiwa</option>
                                    <option value="Cacat fisik dan mental">Cacat fisik dan mental</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Partisipasi Sekolah </label>
                                <select required name="partisipasi_sekolah_art_${i}" class="form-control">
                                    <option value="">-- Pilih Partisipasi Sekolah --</option>
                                    <option value="Tidak/belum pernah sekolah">Tidak/belum pernah sekolah</option>
                                    <option value="Masih sekolah">Masih sekolah</option>
                                    <option value="Tidak bersekolah lagi">Tidak bersekolah lagi</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Jenjang Pendidikan saat ini(opsional) </label>
                                
                                 <select  name="jenjang_pendidikan_art_${i}" class="form-control">
                                    <option value="">-- Pilih ijazah --</option>
                                    <option value="SD/SLB">SD/SLB</option>
                                    <option value="Paket A">Paket A</option>
                                    <option value="M. Ibtidaiyah">M. Ibtidaiyah</option>
                                    <option value="SMP/SMPLB">SMP/SMPLB</option>
                                    <option value="Paket B">Paket B</option>
                                    <option value="M. Tsanawiyah">M. Tsanawiyah</option>
                                    <option value="SMA/SMK/SMALB">SMA/SMK/SMALB</option>
                                    <option value="Paket C">Paket C</option>
                                    <option value="M. Aliyah">M. Aliyah</option>
                                    <option value="Perguruan Tinggi">Perguruan Tinggi</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Ijazah terakhir(opsional)</label>
                                <select  name="ijazah_art_${i}" class="form-control">
                                    <option value="">-- Pilih ijazah --</option>
                                    <option value="Tidak punya ijazah">Tidak punya ijazah</option>
                                    <option value="SD/Sederajat">SD/Sederajat</option>
                                    <option value="SMP/Sederajat">SMP/Sederajat</option>
                                    <option value="SMA/Sederajat">SMA/Sederajat</option>
                                    <option value="D1/D2/D3">D1/D2/D3</option>
                                    <option value="D4/S1">D4/S1</option>
                                    <option value="S2/S3">S2/S3</option>
                                   

                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Pekerjaan Utama (opsional)</label>
                                <select  name="pekerjaan_art_${i}" id="pekerjaan_art_${i}" class="form-control">
                                    <option value="">-- Pilih --</option>
                                    <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                                    <option value="Wiraswasta">Wiraswasta</option>
                                    <option value="Petani">Petani</option>
                                    <option value="Pekebun">Pekebun</option>
                                    <option value="Peternak">Peternak</option>
                                    <option value="Kuli bangunan">Kuli bangunan</option>
                                    <option value="Pedagang">Pedagang</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                                
                            </div>
                        </div>
                        <div class="col-md-6" id="penghasilan_${i}" style="display:none;">
                            <div class="form-group">
                                <label>Penghasilan Perbulan</label>
                                <input type="text" name="penghasilan_perbulan_art_${i}" class="form-control " id="penghasilan_perbulan_${i}" placeholder="Isi dengan nominal">
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            `;

            container.insertAdjacentHTML('beforeend', artForm);

            // Event listener untuk menampilkan atau menyembunyikan status kehamilan
            const hubunganElement = document.getElementById(`hubungan_art_${i}`);
            const statusHamilElement = document.getElementById(`status_kehamilan_art_${i}`);
            statusHamilElement.parentElement.style.display = 'none'
            hubunganElement.addEventListener('change', function() {
                if (hubunganElement.value === 'Istri/Suami') {
                    statusHamilElement.parentElement.style.display = 'block';
                } else {
                    statusHamilElement.parentElement.style.display = 'none';
                }
            });

            // Event listener untuk menampilkan input penghasilan perbulan jika pekerjaan dipilih
            const pekerjaanElement = document.getElementById(`pekerjaan_art_${i}`);
            const penghasilanElement = document.getElementById(`penghasilan_${i}`);
            const penghasilanInput = document.getElementById(`penghasilan_perbulan_${i}`);

            pekerjaanElement.addEventListener('change', function() {
                if (pekerjaanElement.value !== '') {
                    penghasilanElement.style.display = 'block';
                } else {
                    penghasilanInput.value = ''
                    penghasilanElement.style.display = 'none';
                }
            });

            // Event listener untuk memformat penghasilan sebagai Rupiah
            penghasilanInput.addEventListener('keyup', function(e) {
                penghasilanInput.value = formatRupiah(this.value);
            });
        }

        function formatRupiah(angka, prefix = 'Rp. ') {
            const numberString = angka.replace(/[^,\d]/g, '').toString();
            const split = numberString.split(',');
            const sisa = split[0].length % 3;
            let rupiah = split[0].substr(0, sisa);
            const ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                const separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix + rupiah;
        }
    }
</script>

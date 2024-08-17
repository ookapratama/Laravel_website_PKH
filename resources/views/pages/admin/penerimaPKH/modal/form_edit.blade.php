<div class="col-md-12 col-lg-12">
    <form action="{{ route('penerima.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $datas->kepala_id }}">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-9">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input value="{{ $datas->krt->nama }}" required name="nama" type="text"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Status Verifikasi</label>
                            <select required name="status" class="form-control ">

                                <option {{ $datas->status == 'B' ? 'selected' : '' }} value="B">Belum diproses
                                </option>
                                <option {{ $datas->status == 'S' ? 'selected' : '' }} value="S">Telah diverifikasi
                                </option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>No KK</label>
                            <input value="{{ $datas->krt->kk }}" required name="kk" type="text"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>NIK</label>
                            <input value="{{ $datas->krt->nik }}" required name="nik" type="number"
                                class="form-control">
                        </div>
                    </div>
                </div>




                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select required name="jkl" class="form-control ">
                                <option value="">-- Pilih Jenis Kelamin --</option>
                                <option {{ $datas->krt->jkl == 'Laki-laki' ? 'selected' : '' }} value="Laki-laki">
                                    Laki-laki</option>
                                <option {{ $datas->krt->jkl == 'Perempuan' ? 'selected' : '' }} value="Perempuan">
                                    Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <label>Alamat </label>
                            <input required value="{{ $datas->krt->alamat }}" type="text" name="alamat"
                                class="form-control" placeholder="isi dengan lengkap ">
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>RT </label>
                            <input value="{{ $datas->krt->rt }}" required type="string" max="3"
                                placeholder="00X" name="rt" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>RW </label>
                            <input value="{{ $datas->krt->rw }}" required type="string" max="3"
                                placeholder="00X" name="rw" class="form-control">
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
                                <option {{ $datas->rumah->status_penugasan == 'Milik sendiri' ? 'selected' : '' }}
                                    value="Milik sendiri">Milik sendiri</option>
                                <option {{ $datas->rumah->status_penugasan == 'Kontrak/Sewa' ? 'selected' : '' }}
                                    value="Kontrak/Sewa">Kontrak/Sewa</option>
                                <option {{ $datas->rumah->status_penugasan == 'Bebas sewa' ? 'selected' : '' }}
                                    value="Bebas sewa">Bebas sewa</option>
                                <option {{ $datas->rumah->status_penugasan == 'Dinas' ? 'selected' : '' }}
                                    value="Dinas">Dinas</option>
                                <option {{ $datas->rumah->status_penugasan == 'Lainnya' ? 'selected' : '' }}
                                    value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Status lahan tempat tinggal</label>
                            <select required name="status_lahan" class="form-control">
                                <option value="">-- Pilih --</option>
                                <option {{ $datas->rumah->status_lahan == 'Milik sendiri' ? 'selected' : '' }}
                                    value="Milik sendiri">Milik sendiri</option>
                                <option {{ $datas->rumah->status_lahan == 'Milik orang lain' ? 'selected' : '' }}
                                    value="Milik orang lain">Milik orang lain</option>
                                <option {{ $datas->rumah->status_lahan == 'Tanah negara' ? 'selected' : '' }}
                                    value="Tanah negara">Tanah negara</option>
                                <option {{ $datas->rumah->status_lahan == 'Lainnya' ? 'selected' : '' }}
                                    value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Luas lantai (m2)</label>
                            <input value="{{ $datas->rumah->luas_lantai }}" required type="text" required
                                name="luas_lantai" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Jenis lantai</label>
                            <select required name="jenis_lantai" class="form-control">
                                <option value="">-- Pilih --</option>
                                <option {{ $datas->rumah->jenis_lantai == 'Marmer/granir' ? 'selected' : '' }}
                                    value="Marmer/granit">Marmer/granit</option>
                                <option {{ $datas->rumah->jenis_lantai == 'Keramik' ? 'selected' : '' }}
                                    value="Keramik">Keramik</option>
                                <option {{ $datas->rumah->jenis_lantai == 'Tanah' ? 'selected' : '' }} value="Tanah">
                                    Tanah</option>
                                <option
                                    {{ $datas->rumah->jenis_lantai == 'Kayu/papan kualitas tinggi' ? 'selected' : '' }}
                                    value="Kayu/papan kualitas tinggi">Kayu/papan kualitas tinggi</option>
                                <option {{ $datas->rumah->jenis_lantai == 'Semen/bata merah' ? 'selected' : '' }}
                                    value="Semen/bata merah">Semen/bata merah</option>
                                <option
                                    {{ $datas->rumah->jenis_lantai == 'Kayu/papan kualitas rendah' ? 'selected' : '' }}
                                    value="Kayu/papan kualitas rendah">Kayu/papan kualitas rendah</option>
                                <option {{ $datas->rumah->jenis_lantai == 'Ubin/tegel/teraso' ? 'selected' : '' }}
                                    value="Ubin/tegel/teraso">Ubin/tegel/teraso</option>
                                <option {{ $datas->rumah->jenis_lantai == 'Lainnya' ? 'selected' : '' }}
                                    value="Lainnya">Lainnya</option>
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
                                <option {{ $datas->rumah->jenis_dinding == 'Tembok' ? 'selected' : '' }}
                                    value="Tembok">Tembok</option>
                                <option {{ $datas->rumah->jenis_dinding == 'Bambu' ? 'selected' : '' }}
                                    value="Bambu">Bambu</option>
                                <option {{ $datas->rumah->jenis_dinding == 'Kayu' ? 'selected' : '' }} value="Kayu">
                                    Kayu</option>
                                <option {{ $datas->rumah->jenis_dinding == 'Anyaman' ? 'selected' : '' }}
                                    value="Anyaman bambu">Anyaman bambu</option>
                                <option {{ $datas->rumah->jenis_dinding == 'Lainnya' ? 'selected' : '' }}
                                    value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Jenis atap</label>
                            <select required name="jenis_atap" class="form-control">
                                <option value="">-- Pilih --</option>
                                <option {{ $datas->rumah->jenis_atap == 'Beton/genteng beton' ? 'selected' : '' }}
                                    value="Beton/genteng beton">Beton/genteng beton</option>
                                <option {{ $datas->rumah->jenis_atap == 'Bambu' ? 'selected' : '' }} value="Bambu">
                                    Bambu</option>
                                <option {{ $datas->rumah->jenis_atap == 'Asbes' ? 'selected' : '' }} value="Asbes">
                                    Asbes</option>
                                <option {{ $datas->rumah->jenis_atap == 'Seng' ? 'selected' : '' }} value="Seng">
                                    Seng</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Jumlah kamar</label>
                            <input value="{{ $datas->rumah->jumlah_kamar }}" required type="text" required
                                name="jumlah_kamar" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Sumber air minum</label>
                            <input value="{{ $datas->rumah->peroleh_air }}" required type="text" required
                                name="peroleh_air" class="form-control">

                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Sumber penerangan utama</label>
                            <input value="{{ $datas->rumah->sumber_penerangan }}" required type="text" required
                                name="sumber_penerangan" class="form-control">

                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Bahan bakar/energi utama untuk memasak</label>
                            <input value="{{ $datas->rumah->bahan_energi }}" required type="text" required
                                name="bahan_energi" class="form-control">

                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Penggunanaan fasilitas tempat BAB</label>
                            <select required name="guna_wc" class="form-control">
                                <option value="">-- Pilih --</option>
                                <option {{ $datas->rumah->guna_wc == 'Sendiri' ? 'selected' : '' }} value="Sendiri">
                                    Sendiri</option>
                                <option {{ $datas->rumah->guna_wc == 'Bersama' ? 'selected' : '' }} value="Bersama">
                                    Bersama</option>
                                <option {{ $datas->rumah->guna_wc == 'Umum' ? 'selected' : '' }} value="Umum">Umum
                                </option>
                                <option {{ $datas->rumah->guna_wc == 'Tidak ada' ? 'selected' : '' }}
                                    value="Tidak ada">Tidak ada</option>
                            </select>

                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Jenis Kloset</label>
                            <select required name="jenis_wc" class="form-control">
                                <option value="">-- Pilih --</option>
                                <option {{ $datas->rumah->jenis_wc == 'Leher angsa' ? 'selected' : '' }}
                                    value="Leher angsa">Leher angsa</option>
                                <option {{ $datas->rumah->jenis_wc == 'Plengesengan' ? 'selected' : '' }}
                                    value="Plengesengan">Plengesengan</option>
                                <option {{ $datas->rumah->jenis_wc == 'Cemplung/cubluk' ? 'selected' : '' }}
                                    value="Cemplung/cubluk">Cemplung/cubluk</option>
                                <option {{ $datas->rumah->jenis_wc == 'Tidak paka' ? 'selected' : '' }}
                                    value="Tidak paka">Tidak pakai</option>
                            </select>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Tempat pembuangan akhir tinja</label>
                            <input value="{{ $datas->rumah->akhir_wc }}" required type="text" required
                                name="akhir_wc" class="form-control">

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Upload foto rumah (opsional)</label>
                            <input type="file" name="foto" class="form-control">
                        </div>
                    </div>
                    <div class="col-md">
                        <input type="hidden" name="oldFoto" value="{{ $datas->rumah->foto }}">
                        <img src="{{ asset('upload/rumah/' . $datas->rumah->foto) }}" width="200" alt="">
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
                                <option {{ $datas->aset->have_lemari_es == 'Ya' ? 'selected' : '' }} value="Ya">Ya
                                </option>
                                <option {{ $datas->aset->have_lemari_es == 'Tidak' ? 'selected' : '' }}
                                    value="Tidak">Tidak</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Televisi</label>
                            <select required name="have_tv" class="form-control">
                                <option value="">-- Pilih --</option>
                                <option {{ $datas->aset->have_tv == 'Ya' ? 'selected' : '' }} value="Ya">Ya
                                </option>
                                <option {{ $datas->aset->have_tv == 'Tidak' ? 'selected' : '' }} value="Tidak">Tidak
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Sepeda</label>
                            <select required name="have_sepeda" class="form-control">
                                <option value="">-- Pilih --</option>
                                <option {{ $datas->aset->have_sepeda == 'Ya' ? 'selected' : '' }} value="Ya">Ya
                                </option>
                                <option {{ $datas->aset->have_sepeda == 'Tidak' ? 'selected' : '' }} value="Tidak">
                                    Tidak</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Sepeda motor</label>
                            <select required name="have_motor" class="form-control">
                                <option value="">-- Pilih --</option>
                                <option {{ $datas->aset->have_motor == 'Ya' ? 'selected' : '' }} value="Ya">Ya
                                </option>
                                <option {{ $datas->aset->have_motor == 'Tidak' ? 'selected' : '' }} value="Tidak">
                                    Tidak</option>
                            </select>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Luas lahan (m2)</label>
                            <input type="text" value="{{ $datas->aset->luas_lahan }}" required name="luas_lahan"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Jenis ternak </label>
                            <select required name="have_ternak" class="form-control">
                                <option value="">-- Pilih --</option>
                                <option {{ $datas->aset->have_ternak == 'Sapi' ? 'selected' : '' }} value="Sapi">
                                    Sapi</option>
                                <option {{ $datas->aset->have_ternak == 'Kerbau' ? 'selected' : '' }} value="Kerbau">
                                    Kerbau</option>
                                <option {{ $datas->aset->have_ternak == 'Ayam' ? 'selected' : '' }} value="Ayam">
                                    Ayam</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Jumlah Ternak</label>
                            <input type="text" value="{{ $datas->aset->jumlah_ternak }}" required
                                name="jumlah_ternak" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>ART Memiliki usaha sendiri/bersama</label>
                            <select required name="have_usaha" class="form-control">
                                <option value="">-- Pilih --</option>
                                <option {{ $datas->aset->have_usaha == 'Ya' ? 'selected' : '' }} value="Ya">Ya
                                </option>
                                <option {{ $datas->aset->have_usaha == 'Tidak' ? 'selected' : '' }} value="Tidak">
                                    Tidak</option>
                            </select>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Penghasilan Bulanan</label>
                            <input value="{{ $datas->aset->penghasilan_bulanan }}" type="text"
                                name="penghasilan_bulanan" class="form-control currency">
                        </div>
                    </div>
                </div>




                <hr>

                <h4>Data Anggota Rumah Tangga</h4>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Jumlah Anggota Rumah Tangga</label>
                            <input readonly value="{{ $datas->krt->jumlah_art }}" id="jumlah_art" required
                                name="jumlah_art" type="number" oninput="generateARTForms()" class="form-control">
                        </div>
                    </div>

                </div>

                <div id="artFormsContainer"></div>

            </div>



            <div class="card-footer text-right">
                <button class="btn btn-primary " type="submit">Update</button>
                <button class="btn btn-secondary mx-1" type="reset">Reset</button>
            </div>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        generateARTForms(); // Jalankan fungsi segera setelah halaman dimuat
    });

    function generateARTForms() {
        const container = document.getElementById('artFormsContainer');
        const jumlahART = document.getElementById('jumlah_art').value;
        const dataArt = @json($dataArt);
        console.log(dataArt);
        container.innerHTML = ''; // Clear existing forms

        for (let i = 0; i < jumlahART; i++) {
            const art = dataArt[i];
            const artForm = `
        <div class="card mt-4">
            <div class="card-body">
                <h5>Anggota Rumah Tangga ${i + 1}</h5>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nama</label>
                            <input required name="nama_art_${i + 1}" type="text" class="form-control" value="${art.nama}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>NIK</label>
                            <input required name="nik_art_${i + 1}" type="number" class="form-control" value="${art.nik}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Hubungan dengan Kepala Keluarga</label>
                             <select required name="hubungan_art_${i + 1}" class="form-control">
                                <option value="">-- Pilih Hubungan dengan Kepala Keluarga --</option>
                                <option value="Kepala rumah tangga" ${art.hubungan === 'Kepala rumah tangga' ? 'selected' : ''}>Kepala rumah tangga</option>
                                <option value="Istri/Suami" ${art.hubungan === 'Istri/Suami' ? 'selected' : ''}>Istri/Suami</option>
                                <option value="Anak" ${art.hubungan === 'Anak' ? 'selected' : ''}>Anak</option>
                                <option value="Menantu" ${art.hubungan === 'Menantu' ? 'selected' : ''}>Menantu</option>
                                <option value="Cucu" ${art.hubungan === 'Cucu' ? 'selected' : ''}>Cucu</option>
                                <option value="Orang tua/Mertua" ${art.hubungan === 'Orang tua/Mertua' ? 'selected' : ''}>Orang tua/Mertua</option>
                                <option value="Pembantu ruta" ${art.hubungan === 'Pembantu ruta' ? 'selected' : ''}>Pembantu ruta</option>
                                <option value="Lainnya" ${art.hubungan === 'Lainnya' ? 'selected' : ''}>Lainnya</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select required name="jkl_art_${i + 1}" class="form-control">
                                <option value="">-- Pilih Jenis Kelamin --</option>
                                <option value="Laki-laki" ${art.jkl === 'Laki-laki' ? 'selected' : ''}>Laki-laki</option>
                                <option value="Perempuan" ${art.jkl === 'Perempuan' ? 'selected' : ''}>Perempuan</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Umur</label>
                            <input required name="umur_art_${i + 1}" type="string" class="form-control" value="${art.umur}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Status Perkawinan</label>
                            <select required name="status_kawin_art_${i + 1}" class="form-control">
                                <option value="">-- Pilih Status Kawin --</option>
                                <option value="Belum Kawin" ${art.status_kawin === 'Belum Kawin' ? 'selected' : ''}>Belum Kawin</option>
                                <option value="Kawin/nikah" ${art.status_kawin === 'Kawin/nikah' ? 'selected' : ''}>Kawin/nikah</option>
                                <option value="Cerai hidup" ${art.status_kawin === 'Cerai hidup' ? 'selected' : ''}>Cerai hidup</option>
                                <option value="Cerai mati" ${art.status_kawin === 'Cerai mati' ? 'selected' : ''}>Cerai mati</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Kepemilikan Akta</label>
                            <select required name="kepemilikan_akta_art_${i + 1}" class="form-control">
                                <option value="">-- Pilih Kepemilikan Akta --</option>
                                <option value="Tidak" ${art.kepemilikan_akta === 'Tidak' ? 'selected' : ''}>Tidak</option>
                                <option value="Ya, dapat ditunjukkan" ${art.kepemilikan_akta === 'Ya, dapat ditunjukkan' ? 'selected' : ''}>Ya, dapat ditunjukkan</option>
                                <option value="Ya, tidak dapat ditunjukkan" ${art.kepemilikan_akta === 'Ya, tidak dapat ditunjukkan' ? 'selected' : ''}>Ya, tidak dapat ditunjukkan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Kartu Identitas</label>
                            <select required name="kartu_identitas_art_${i + 1}" class="form-control">
                                <option value="">-- Pilih Kartu Identitas --</option>
                                <option value="Tidak memiliki" ${art.kartu_identitas === 'Tidak memiliki' ? 'selected' : ''}>Tidak memiliki</option>
                                <option value="Akta kelahiran" ${art.kartu_identitas === 'Akta kelahiran' ? 'selected' : ''}>Akta kelahiran</option>
                                <option value="Kartu pelajar" ${art.kartu_identitas === 'Kartu pelajar' ? 'selected' : ''}>Kartu pelajar</option>
                                <option value="KTP" ${art.kartu_identitas === 'KTP' ? 'selected' : ''}>KTP</option>
                                <option value="SIM" ${art.kartu_identitas === 'SIM' ? 'selected' : ''}>SIM</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Status Kehamilan (opsional)</label>
                                <select  name="status_kehamilan_art_${i + 1}" class="form-control">
                                    <option value="">-- Pilih Status Kehamilan --</option>
                                      <option value="Ya" ${art.status_kehamilan === 'Ya' ? 'selected' : ''}>Ya</option>
                                <option value="Tidak" ${art.status_kehamilan === 'Tidak' ? 'selected' : ''}>Tidak</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Penyakit kronis/menahun</label>
                                 <select required name="riwayat_penyakit_art_${i + 1}" class="form-control">
                                    <option value="">-- Pilih Penyakit kronis/menahun --</option>
                                    <option ${art.riwayat_penyakit === 'Tidak ada' ? 'selected' : ''} value="Tidak ada">Tidak ada</option>
                                    <option ${art.riwayat_penyakit === 'Hipertensi' ? 'selected' : ''} value="Hipertensi">Hipertensi</option>
                                    <option ${art.riwayat_penyakit === 'Rematik' ? 'selected' : ''} value="Rematik">Rematik</option>
                                    <option ${art.riwayat_penyakit === 'Asma' ? 'selected' : ''} value="Asma">Asma</option>
                                    <option ${art.riwayat_penyakit === 'Masalah jantung' ? 'selected' : ''} value="Masalah jantung">Masalah jantung</option>
                                    <option ${art.riwayat_penyakit === 'Diabetes' ? 'selected' : ''} value="Diabetes">Diabetes</option>
                                    <option ${art.riwayat_penyakit === 'Tuberculosis' ? 'selected' : ''} value="Tuberculosis">Tuberculosis</option>
                                    <option ${art.riwayat_penyakit === 'Stroke' ? 'selected' : ''} value="Stroke">Stroke</option>
                                    <option ${art.riwayat_penyakit === 'Kanker atau tumor ganas' ? 'selected' : ''} value="Kanker atau tumor ganas">Kanker atau tumor ganas</option>
                                    <option ${art.riwayat_penyakit === 'Lainnya (gagal ginjal, paru-paru flek, dan sejenisnya)' ? 'selected' : ''} value="Lainnya (gagal ginjal, paru-paru flek, dan sejenisnya)">Lainnya (gagal ginjal, paru-paru flek, dan sejenisnya)</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Partisipasi Sekolah </label>
                                <select required name="partisipasi_sekolah_art_${i + 1}" class="form-control">
                                    <option value="">-- Pilih Partisipasi Sekolah --</option>
                                    <option ${art.partisipasi_sekolah === 'Tidak/belum pernah sekolah' ? 'selected' : ''} value="Tidak/belum pernah sekolah">Tidak/belum pernah sekolah</option>
                                    <option ${art.partisipasi_sekolah === 'Masih sekolah' ? 'selected' : ''} value="Masih sekolah">Masih sekolah</option>
                                    <option ${art.partisipasi_sekolah === 'Tidak bersekolah lagi' ? 'selected' : ''} value="Tidak bersekolah lagi">Tidak bersekolah lagi</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Jenjang Pendidikan(opsional) </label>
                                
                                 <select  name="jenjang_pendidikan_art_${i + 1}" class="form-control">
                                    <option value="">-- Pilih ijazah --</option>
                                    <option ${art.jenjang_pendidikan === 'SD/SLB' ? 'selected' : ''} value="SD/SLB">SD/SLB</option>
                                    <option ${art.jenjang_pendidikan === 'Paket A' ? 'selected' : ''} value="Paket A">Paket A</option>
                                    <option ${art.jenjang_pendidikan === 'M. Ibtidaiyah' ? 'selected' : ''} value="M. Ibtidaiyah">M. Ibtidaiyah</option>
                                    <option ${art.jenjang_pendidikan === 'SMP/SMPLB' ? 'selected' : ''} value="SMP/SMPLB">SMP/SMPLB</option>
                                    <option ${art.jenjang_pendidikan === 'Paket B' ? 'selected' : ''} value="Paket B">Paket B</option>
                                    <option ${art.jenjang_pendidikan === 'M. Tsanawiyah' ? 'selected' : ''} value="M. Tsanawiyah">M. Tsanawiyah</option>
                                    <option ${art.jenjang_pendidikan === 'SMA/SMK/SMALB' ? 'selected' : ''} value="SMA/SMK/SMALB">SMA/SMK/SMALB</option>
                                    <option ${art.jenjang_pendidikan === 'Paket C' ? 'selected' : ''} value="Paket C">Paket C</option>
                                    <option ${art.jenjang_pendidikan === 'M. Aliyahi' ? 'selected' : ''} value="M. Aliyah">M. Aliyah</option>
                                    <option ${art.jenjang_pendidikan === 'Perguruan Tinggi' ? 'selected' : ''} value="Perguruan Tinggi">Perguruan Tinggi</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Ijazah terakhir(opsional)</label>
                                <select  name="ijazah_art_${i + 1}" class="form-control">
                                    <option value="">-- Pilih ijazah --</option>
                                    <option ${art.ijazah === 'Tidak punya ijazah' ? 'selected' : ''} value="Tidak punya ijazah">Tidak punya ijazah</option>
                                    <option ${art.ijazah === 'SD/Sederajat' ? 'selected' : ''} value="SD/Sederajat">SD/Sederajat</option>
                                    <option ${art.ijazah === 'SMP/Sederajat' ? 'selected' : ''} value="SMP/Sederajat">SMP/Sederajat</option>
                                    <option ${art.ijazah === 'SMA/Sederajat' ? 'selected' : ''} value="SMA/Sederajat">SMA/Sederajat</option>
                                    <option ${art.ijazah === 'D1/D2/D3' ? 'selected' : ''} value="D1/D2/D3">D1/D2/D3</option>
                                    <option ${art.ijazah === 'D4/S1' ? 'selected' : ''} value="D4/S1">D4/S1</option>
                                    <option ${art.ijazah === 'S2/S3' ? 'selected' : ''} value="S2/S3">S2/S3</option>
                                   

                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Pekerjaan Utama</label>
                                <input value="${art.pekerjaan}" required name="pekerjaan_art_${i + 1}" type="text" class="form-control">
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Kedudukan Pekerjaan</label>
                                <input value="${art.kedudukan_pekerjaan}" required name="kedudukan_pekerjaan_art_${i + 1}" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                <!-- Lanjutkan dengan field lainnya -->
            </div>
        </div>
    `;
            container.insertAdjacentHTML('beforeend', artForm);
        }
    }
</script>

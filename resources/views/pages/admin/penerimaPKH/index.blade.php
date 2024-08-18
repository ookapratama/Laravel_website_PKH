@extends('layouts.app', ['title' => 'Data Permintaan PKH'])

@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('library/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('library/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}">
        <style>
            .table-internal {
                display: none;
            }
        </style>
    @endpush

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Permintaan PKH</h1>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- Navigation Buttons -->

                                {{-- <a href="#" class="btn btn-primary text-white my-3">Cetak Data</a> --}}



                                <!-- Tables Section -->
                                <div class="table-responsive ">
                                    <table class="table table-striped " id="table-penerima">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-nowrap">Nomor KK</th>
                                                <th class="text-nowrap">Nama KRT</th>
                                                <th class="text-nowrap">NIK</th>
                                                <th class="text-nowrap">Alamat</th>
                                                <th class="text-nowrap">Tempat, Tanggal Lahir</th>
                                                <th class="text-nowrap">Pendidikan terakhir</th>
                                                <th class="text-nowrap">Pekerjaan</th>
                                                <th class="text-nowrap">Penghasilan perbulan</th>
                                                <th class="text-nowrap">Penyakit kronis</th>
                                                <th class="text-nowrap">Jenis cacat</th>
                                                <th class="text-nowrap">Status</th>
                                                {{-- <th class="text-nowrap">Detail ART</th>
                                                <th class="text-nowrap">Detail Perumahan</th>
                                                <th class="text-nowrap">Detail Aset</th> --}}
                                                <th class="text-nowrap">Detail Data</th>
                                                <th class="text-nowrap">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($datas as $i => $data)
                                                <?php
                                                // setlocale(LC_ALL, 'IND');
                                                
                                                // $tgl_kegiatan = strftime('%d %B', strtotime($data->tgl_kegiatan));
                                                // $tgl_selesai = strftime('%d %B %Y', strtotime($data->tgl_selesai));
                                                ?>
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td class="text-nowrap">{{ $data->krt->kk ?? '' }}</td>
                                                    <td class="text-nowrap">{{ $data->krt->nama }} </td>
                                                    <td class="text-nowrap">{{ $data->krt->nik }}</td>
                                                    <td class="text-nowrap">{{ $data->krt->alamat }}</td>
                                                    <td class="text-nowrap">{{ $data->krt->tempat_lahir }},
                                                        {{ $data->krt->tgl_lahir }}</td>
                                                    <td class="text-nowrap">{{ $data->krt->pendidikan_terakhir }}</td>
                                                    <td class="text-nowrap">{{ $data->krt->pekerjaan }}</td>
                                                    <td class="text-nowrap">{{ $data->krt->penghasilan_perbulan }}</td>
                                                    <td class="text-nowrap">{{ $data->krt->riwayat_penyakit }}</td>
                                                    <td class="text-nowrap">{{ $data->krt->jenis_cacat }}</td>
                                                    <td>
                                                        @if ($data->status == 'S')
                                                            <span class="badge badge-success">Telah diverifikasi</span>
                                                        @else
                                                            <span class="badge badge-warning">Belum diproses</span>
                                                        @endif

                                                    </td>

                                                    {{-- <td class="text-center">
                                                        <button type="button" class="btn btn-info my-2" data-toggle="modal"
                                                            data-target="#artModal" data-krt-id="{{ $data->krt->id }}">
                                                            <i class="fas fa-users"></i>
                                                        </button>
                                                    </td>

                                                    <td class="text-center">
                                                        <!-- Tombol untuk Rumah -->
                                                        <button type="button" class="btn btn-info my-2" data-toggle="modal"
                                                            data-target="#modalRumah" data-krt-id="{{ $data->krt->id }}">
                                                            <i class="fas fa-home"></i>
                                                        </button>
                                                    </td>

                                                    <td class="text-center">
                                                        <!-- Tombol untuk Aset -->
                                                        <button type="button" class="btn btn-info my-2" data-toggle="modal"
                                                            data-target="#modalAset" data-krt-id="{{ $data->krt->id }}">
                                                            <i class="fas fa-landmark"></i>
                                                        </button>
                                                    </td> --}}

                                                    <td class="text-center">
                                                        <!-- Tombol untuk Aset -->
                                                        <button type="button" class="btn btn-info my-2" data-toggle="modal"
                                                            data-target="#modalAll" data-krt-id="{{ $data->krt->id }}">
                                                            <i class="fas fa-info"></i>
                                                        </button>
                                                    </td>


                                                    <td>
                                                        @if ($data->status == 'B')
                                                            <button onclick="verifikasi({{ $data->id }}, 'penerima')"
                                                                class="btn btn-primary my-2">Verifikasi</button>
                                                        @endif

                                                        <a target="_blank" href="{{ route('cetak', $data->id) }}"
                                                            class="btn btn-info "> <i class="fas fa-print"></i>
                                                        </a>


                                                        <a href="{{ route('penerima.edit', $data->id) }}"
                                                            class="btn btn-warning my-2"><i class="fas fa-edit"></i></a>

                                                        <button onclick="deleteData({{ $data->id }}, 'penerima')"
                                                            class="btn btn-danger">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- {{ dd($datas->isEmpty()) }} --}}

    <!-- Modal -->
    <div class="modal fade" id="modalAll" tabindex="-1" role="dialog" aria-labelledby="artModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="artModalLabel">Detail Kepala Rumah Tangga</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Table to display ART details will be dynamically loaded here -->
                    <div id="tableAll">
                        <p>Loading...</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="artModal" tabindex="-1" role="dialog" aria-labelledby="artModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="artModalLabel">Detail Anggota Rumah Tangga (ART)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Table to display ART details will be dynamically loaded here -->
                    <div id="artTable">
                        <p>Loading...</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal untuk Aset -->
    <div class="modal fade" id="modalAset" tabindex="-1" role="dialog" aria-labelledby="modalAsetLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalAsetLabel">Detail Aset</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modalAsetContent">
                    <!-- Detail Aset akan dimuat di sini -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal untuk Perumahan -->
    <div class="modal fade" id="modalRumah" tabindex="-1" role="dialog" aria-labelledby="modalRumahLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalRumahLabel">Detail Perumahan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modalRumahContent">
                    <!-- Detail Perumahan akan dimuat di sini -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal for Creating Data -->
    <div class="modal fade" id="createArtModal" tabindex="-1" role="dialog" aria-labelledby="createArtModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createArtModalLabel">Tambah Anggota Rumah Tangga (ART)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="createArtForm" action="{{ route('art.store') }}" method="POST">
                    @csrf
                    <div class="modal-body" id="formArt">

                        <div class="card">
                            <div class="card-body">
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
                                            <select required name="hubungan_art_${i}" class="form-control">
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
                                            <label>Umur</label>
                                            <input required name="umur_art_${i}" type="string" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Status Perkawinan</label>
                                            <select required name="status_kawin_art_${i}" class="form-control">
                                                <option value="">-- Pilih Status Kawin --</option>
                                                <option value="Belum Kawin">Belum Kawin</option>
                                                <option value="Kawin/nikah">Kawin/nikah</option>
                                                <option value="Cerai hidup">Cerai hidup</option>
                                                <option value="Cerai mati">Cerai mati</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Kepemilikan Akta</label>
                                            <select required name="kepemilikan_akta_art_${i}" class="form-control">
                                                <option value="">-- Pilih Kepemilikan Akta --</option>
                                                <option value="Tidak">Tidak</option>
                                                <option value="Ya, dapat ditunjukkan">Ya, dapat ditunjukkan</option>
                                                <option value="Ya, tidak dapat ditunjukkan">Ya, tidak dapat ditunjukkan
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Kartu Identitas</label>
                                            <select required name="kartu_identitas_art_${i}" class="form-control">
                                                <option value="">-- Pilih Kartu Identitas --</option>
                                                <option value="Tidak memiliki">Tidak memiliki</option>
                                                <option value="Akta kelahiran">Akta kelahiran</option>
                                                <option value="Kartu pelajar">Kartu pelajar</option>
                                                <option value="KTP">KTP</option>
                                                <option value="SIM">SIM</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Status Kehamilan (opsional)</label>
                                            <select name="status_kehamilan_art_${i}" class="form-control">
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
                                                <option value="Lainnya (gagal ginjal, paru-paru flek, dan sejenisnya)">
                                                    Lainnya
                                                    (gagal ginjal, paru-paru flek, dan sejenisnya)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Partisipasi Sekolah </label>
                                            <select required name="partisipasi_sekolah_art_${i}" class="form-control">
                                                <option value="">-- Pilih Partisipasi Sekolah --</option>
                                                <option value="Tidak/belum pernah sekolah">Tidak/belum pernah sekolah
                                                </option>
                                                <option value="Masih sekolah">Masih sekolah</option>
                                                <option value="Tidak bersekolah lagi">Tidak bersekolah lagi</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Jenjang Pendidikan(opsional) </label>

                                            <select name="jenjang_pendidikan_art_${i}" class="form-control">
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
                                            <select name="ijazah_art_${i}" class="form-control">
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
                                            <label>Pekerjaan Utama</label>
                                            <input required name="pekerjaan_art_${i}" type="text"
                                                class="form-control">

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Kedudukan Pekerjaan</label>
                                            <input required name="kedudukan_pekerjaan_art_${i}" type="text"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal for Editing Data -->
    <div class="modal fade" id="editArtModal" tabindex="-1" role="dialog" aria-labelledby="editArtModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editArtModalLabel">Edit Anggota Rumah Tangga (ART)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editArtForm" action="{{ route('penerima.update', ['penerima' => ':id']) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <input type="hidden" id="editId" name="id">
                        <div class="form-group">
                            <label for="editName">Nama:</label>
                            <input type="text" class="form-control" id="editName" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="editRelationship">Hubungan:</label>
                            <input type="text" class="form-control" id="editRelationship" name="relationship"
                                required>
                        </div>
                        <!-- Add more fields as needed -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>

        <script src="{{ asset('library/datatables/media/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('library/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('library/datatables.net-select-bs4/js/select.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('js/page/modules-datatables.js') }}"></script>

        <script type="text/javascript">
            $(document).ready(function() {

                $('.currency').inputmask({
                    alias: 'numeric',
                    groupSeparator: ',',
                    autoGroup: true,
                    digits: 0,
                    digitsOptional: false,
                    prefix: 'Rp ',
                    placeholder: '0',
                    rightAlign: false,
                    removeMaskOnSubmit: true
                });
                // Existing DataTable initialization
                var language = {
                    "sSearch": "Pencarian Data Kegiatan BBGP : ",
                };
                var tableKegiatan = $('#table-penerima').DataTable({
                    paging: true,
                    searching: true,
                    language: {
                        url: 'https://cdn.datatables.net/plug-ins/2.1.0/i18n/id.json',
                    },
                });





            });

            const verifikasi = (id, tabel) => {
                console.log(id, tabel, status);
                let token = $("meta[name='csrf-token']").attr("content");
                swal({
                    title: "Verifikasi data ini ?",
                    text: "",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            headers: {
                                "X-CSRF-TOKEN": token,
                            },
                            type: "GET",
                            url: `{{ route('verifikasi') }}`,
                            data: {
                                id: id
                            },
                            success: function(response) {
                                console.log(response);
                                if (response.status) {

                                    swal(
                                        "Berhasil",
                                        "Data telah diverifikasi, Pengajuan PKH di terima",
                                        "success"
                                    ).then(() => {
                                        location.reload();
                                    });
                                } else {
                                    swal("Error", "Data telah gagal diverifikasi", "error");
                                }
                            },
                            error: function(error) {
                                console.error("AJAX Error:", error);
                                swal("Error", "Ajax Error.", "error");
                            },
                        });
                    }
                });
            };



            // swal btn hps data
            const deleteData = (id, tabel) => {
                console.log(id, tabel);
                let token = $("meta[name='csrf-token']").attr("content");

                swal({
                    title: "Apakah anda yakin?",
                    text: "",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            headers: {
                                "X-CSRF-TOKEN": token,
                            },
                            type: "DELETE",
                            data: {
                                id: id
                            },
                            url: `${tabel}/destroy`,
                            success: function(response) {
                                console.log(response);
                                if (response) {
                                    swal("Terhapus", "Data telah dihapus", "success").then(
                                        () => {
                                            location.reload();
                                        }
                                    );
                                } else {
                                    swal("Error", "Failed to delete data.", "error");
                                }
                            },
                            error: function(error) {
                                console.error("AJAX Error:", error);
                                swal("Error", "Ajax Error.", "error");
                            },
                        });
                    }
                });
            };
        </script>


        @if (isset($data->krt->id))
            {{-- show all --}}
            <script>
                $('#modalAll').on('show.bs.modal', function(event) {
                    var button = $(event.relatedTarget) // Button that triggered the modal
                    var krtId = button.data('krt-id') // Extract info from data-* attributes
                    var modal = $(this)

                    // AJAX request to fetch ART data
                    $.ajax({
                        url: "{{ route('detailAll') }}", // Route to fetch data
                        method: 'GET',
                        data: {
                            krt_id: krtId
                        },
                        success: function(response) {
                            // Load the response (HTML table) into the modal's body
                            modal.find('#tableAll').html(response);
                        },
                        error: function() {
                            modal.find('#tableAll').html('<p>Error loading data</p>');
                        }
                    });




                });
            </script>


            <script>
                $('#artModal').on('show.bs.modal', function(event) {
                    var button = $(event.relatedTarget) // Button that triggered the modal
                    var krtId = button.data('krt-id') // Extract info from data-* attributes
                    var modal = $(this)

                    // AJAX request to fetch ART data
                    $.ajax({
                        url: "{{ route('get.art.data') }}", // Route to fetch data
                        method: 'GET',
                        data: {
                            krt_id: krtId
                        },
                        success: function(response) {
                            // Load the response (HTML table) into the modal's body
                            modal.find('#artTable').html(response);
                        },
                        error: function() {
                            modal.find('#artTable').html('<p>Error loading data</p>');
                        }
                    });




                });
            </script>

            <script>
                $('#modalRumah').on('show.bs.modal', function(event) {
                    var button = $(event.relatedTarget); // Button that triggered the modal
                    var krtId = button.data('krt-id'); // Extract the krt-id from data-* attributes
                    console.log(krtId);
                    var modal = $(this)
                    // Fetch data based on krt-id
                    $.ajax({
                        url: '{{ route('rumah.show') }}', // Adjust the URL to your API endpoint
                        data: {
                            krt_id: krtId
                        },
                        method: 'GET',
                        success: function(response) {
                            console.log(response);
                            // Load the response (HTML table) into the modal's body
                            modal.find('#modalRumahContent').html(response);
                        },
                        error: function() {
                            modal.find('#modalRumahContent').html('<p>Error loading data</p>');
                        }

                    });
                });
            </script>

            <script>
                $('#modalAset').on('show.bs.modal', function(event) {
                    var button = $(event.relatedTarget); // Button that triggered the modal
                    var krtId = button.data('krt-id'); // Extract the krt-id from data-* attributes
                    console.log(krtId);
                    var modal = $(this)
                    // Fetch data based on krt-id
                    $.ajax({
                        url: '{{ route('aset.show') }}', // Adjust the URL to your API endpoint
                        data: {
                            krt_id: krtId
                        },
                        method: 'GET',
                        success: function(response) {
                            console.log(response);
                            // Load the response (HTML table) into the modal's body
                            modal.find('#modalAsetContent').html(response);
                        },
                        error: function() {
                            modal.find('#modalAsetContent').html('<p>Error loading data</p>');
                        }

                    });
                });

                $('#createArtButton').on('click', function() {
                    $('#createArtModal').modal('show');
                });

                // Show the edit modal with data
                $('.editArtButton').on('click', function() {
                    var id = $(this).data('id');
                    var name = $(this).data('name');
                    var relationship = $(this).data('relationship');

                    $('#editId').val(id);
                    $('#editName').val(name);
                    $('#editRelationship').val(relationship);

                    var action = $('#editArtForm').attr('action').replace(':id', id);
                    $('#editArtForm').attr('action', action);

                    $('#editArtModal').modal('show');
                });

                $('#createArtButton').on('click', function() {
                    $('#createArtModal').modal('show');
                });

                // Show the edit modal with data
                $('.editArtButton').on('click', function() {
                    var id = $(this).data('id');
                    var name = $(this).data('name');
                    var relationship = $(this).data('relationship');

                    $('#editId').val(id);
                    $('#editName').val(name);
                    $('#editRelationship').val(relationship);

                    var action = $('#editArtForm').attr('action').replace(':id', id);
                    $('#editArtForm').attr('action', action);

                    $('#editArtModal').modal('show');
                });
            </script>
        @endif
    @endpush
@endsection

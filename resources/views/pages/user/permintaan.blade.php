@extends('layouts.user.app', ['title' => 'Website PKH Kelurahan Mangkoso'])

@section('content')
    @push('styles')
    @endpush

    <div class="main-content ">
        <section class="section">
            <div class="section-header">
                <div class="d-flex">
                    <button id="buat-permintaan" class="btn btn-primary mr-3">Buat Permintaan</button>
                    <button id="cek-permintaan" class="btn btn-info">Cek Status Permintaan</button>
                </div>

            </div>

            <div class="section-body">
                <div id="card-form" class="card">
                    @include('pages.user.form_permintaan')
                </div>

            </div>
            <div id="card-status" class="card">
                <div class="card-header">
                    <h4>Cek Status Permintaan PKH</h4>
                </div>
                <div class="card-body ">

                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="">Masukkan NIK anda</label>
                            <input required class="form-control" type="text" name="nik" id="nik">
                        </div>
                        <button id="btn-cari" class="btn btn-primary">
                            Cek Pengajuan
                        </button>
                    </div>

                    <div id="data_pengajuan">
                        <div class="table-responsive mt-4">
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
                                        <th class="text-nowrap">Detail ART</th>
                                        <th class="text-nowrap">Detail Perumahan</th>
                                        <th class="text-nowrap">Detail Aset</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datas as $i => $data)
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
                                            <td class="text-center">
                                                <button type="button" class="btn btn-info my-2" data-toggle="modal"
                                                    data-target="#artModal" data-krt-id="{{ $data->krt->id }}">
                                                    <i class="fas fa-users"></i>
                                                </button>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-info my-2" data-toggle="modal"
                                                    data-target="#modalRumah" data-krt-id="{{ $data->krt->id }}">
                                                    <i class="fas fa-home"></i>
                                                </button>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-info my-2" data-toggle="modal"
                                                    data-target="#modalAset" data-krt-id="{{ $data->krt->id }}">
                                                    <i class="fas fa-landmark"></i>
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

    </section>
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


    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>

        <script>
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
                $('#card-form').hide();
                $('#card-status').hide();

                $('#buat-permintaan').on('click', function() {
                    $('#card-form').show();
                    $('#card-status').hide();
                });

                $('#cek-permintaan').on('click', function() {
                    $('#card-form').hide();
                    $('#card-status').show();
                });

                $('#data_pengajuan').hide(); // Show the table if data is available
                $('#btn-cari').on('click', function() {
                    let nik = $('#nik').val();

                    $.ajax({
                        url: "{{ route('permintaan.cek') }}", // Route to fetch data
                        method: 'GET',
                        data: {
                            nik: nik
                        },
                        success: function(response) {
                            console.log(response);

                            if (response.html) {
                                $('#data_pengajuan').show(); // Show the table if data is available
                                $('#data_pengajuan').html(response.html);
                            } else {
                                $('#data_pengajuan').hide(); // Hide the table if no data
                                $('#data_pengajuan').html('<p>No data found</p>');
                            }
                        },
                        error: function() {
                            $('#data_pengajuan').hide(); // Hide the table if error
                            $('#data_pengajuan').html('<p>Error loading data</p>');
                        }
                    });
                });

            });
        </script>
        @if (isset($data->krt->id))
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

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

                                <a href="{{ route('penerima.create') }}" class="btn btn-primary text-white my-3">+ Tambah
                                    Permintaan</a>

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
                                                <th class="text-nowrap">Status</th>
                                                <th class="text-nowrap">Detail ART</th>
                                                <th class="text-nowrap">Detail Perumahan</th>
                                                <th class="text-nowrap">Detail Aset</th>
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
                                                    <td class="text-nowrap">{{ $data->kk ?? '' }}</td>
                                                    <td class="text-nowrap">{{ $data->nama }} </td>
                                                    <td class="text-nowrap">{{ $data->nik }}</td>
                                                    <td class="text-nowrap">{{ $data->alamat }}</td>
                                                    <td>
                                                        @if ($data->status == 'S')
                                                            <span class="badge badge-success">Diterima</span>
                                                        @else
                                                            <span class="badge badge-warning">Belum diproses</span>
                                                        @endif

                                                    </td>
                                                    <td class="text-center">
                                                        <a href="{{ route('penerima.edit', $data->id) }}"
                                                            class="btn btn-info my-2"><i class="fas fa-users"></i></a>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="{{ route('penerima.edit', $data->id) }}"
                                                            class="btn btn-info my-2"><i class="fas fa-home"></i></a>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="{{ route('penerima.edit', $data->id) }}"
                                                            class="btn btn-info my-2"><i class="fas fa-landmark"></i></a>
                                                    </td>
                                                   
                                                    <td>
                                                        <a href="{{ route('penerima.edit', $data->id) }}"
                                                            class="btn btn-primary my-2">Verifikasi</a>
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


    @push('scripts')
        <script src="{{ asset('library/datatables/media/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('library/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('library/datatables.net-select-bs4/js/select.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('js/page/modules-datatables.js') }}"></script>

        <script type="text/javascript">
            $(document).ready(function() {
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
        </script>
    @endpush
@endsection
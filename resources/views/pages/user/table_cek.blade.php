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
                        @if ($data->penerima->status == 'S')
                            <span class="badge badge-success">Telah diverifikasi</span>
                        @else
                            <span class="badge badge-warning">Belum diproses</span>
                        @endif
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-info my-2" data-toggle="modal" data-target="#artModal"
                            data-krt-id="{{ $data->krt->id }}">
                            <i class="fas fa-users"></i>
                        </button>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-info my-2" data-toggle="modal" data-target="#modalRumah"
                            data-krt-id="{{ $data->krt->id }}">
                            <i class="fas fa-home"></i>
                        </button>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-info my-2" data-toggle="modal" data-target="#modalAset"
                            data-krt-id="{{ $data->krt->id }}">
                            <i class="fas fa-landmark"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

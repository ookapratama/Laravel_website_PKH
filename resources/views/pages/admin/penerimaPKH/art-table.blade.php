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
                    <td>{{ $v->tempat_lahir }}, {{ $v->tgl_lahir }}</td>
                    <td>{{ $v->hubungan }}</td>
                    <td>{{ $v->pekerjaan }}</td>
                    <td>{{ $v->penghasilan_perbulan }}</td>
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







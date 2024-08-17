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
                <th>Umur</th>
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
                    <td>{{ $v->umur }}</td>
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







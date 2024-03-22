<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <style>
        img {
            max-width: 100px;
            height: auto;
        }
    </style>
</head>

<body>

    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
    @include('admin.navbar')
    <!-- partial -->

    <div class="container-fluid page-body-wrapper">
        <div class="container">
            <h1 class="mt-4 mb-4">CRUD</h1>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Lembaga</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Delete</th>
                            <th scope="col">Update</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $beasiswa)
                            <tr>
                                <td>{{ $beasiswa->name }}</td>
                                <td>{{ $beasiswa->lembaga }}</td>
                                <td>{{ $beasiswa->kategori }}</td>
                                <td>{{ $beasiswa->deskripsi }}</td>
                                <td><img src="gambarbeasiswa/{{ $beasiswa->gambar }}" alt=""></td>
                                <td>
                                    <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Beasiswa Ini?')"
                                        class="btn btn-danger"
                                        href="{{ url('hapusbeasiswa', $beasiswa->id) }}">Delete</a>
                                </td>
                                <td><a class="btn btn-primary" href="{{url('updatebeasiswa',$beasiswa->id)}}">Update</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- plugins:js -->
    @include('admin.script')
</body>

</html>

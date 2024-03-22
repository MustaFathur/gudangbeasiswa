<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('admin.css')
    <style>
        /* CSS untuk mengubah warna latar belakang dan warna teks pada input */
        input[type="text"],
        input[type="file"],
        textarea {
            background-color: #ffffff !important;
            /* Putih */
            color: #000000 !important;
            /* Hitam */
            border: 1px solid #ced4da;
            /* Warna border default Bootstrap */
            border-radius: .25rem;
            /* Sudut bulat default Bootstrap */
        }

        /* CSS untuk memastikan bahwa background deskripsi beasiswa tetap putih */
        #deskripsi_beasiswa {
            background-color: #ffffff !important;
            /* Putih */
            color: #000000 !important;
            /* Hitam */
            border: 1px solid #ced4da;
            /* Warna border default Bootstrap */
            border-radius: .25rem;
            /* Sudut bulat default Bootstrap */
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
        <div class="container" align="center" style="padding: 100px">

            <di class="container" align="center" style="padding-top:100px;">
                @if (session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        {{ session()->get('message') }}
                    </div>
                @endif
                <form action="{{ url('editbeasiswa', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_beasiswa" class="form-label">Nama Beasiswa</label>
                        <input type="text" class="form-control" id="nama_beasiswa" name="name"
                            value="{{ $data->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="lembaga_beasiswa" class="form-label">Lembaga Beasiswa</label>
                        <input type="text" class="form-control" id="lembaga_beasiswa" name="lembaga"
                            value="{{ $data->lembaga }}">
                    </div>
                    <div class="mb-3">
                        <label for="kategori_beasiswa" class="form-label">Kategori Beasiswa</label>
                        <input type="text" class="form-control" id="kategori_beasiswa" name="kategori"
                            value="{{ $data->kategori }}">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi_beasiswa" class="form-label">Deskripsi Beasiswa</label>
                        <textarea class="form-control" id="deskripsi_beasiswa" name="deskripsi">{{ $data->deskripsi }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="gambar_beasiswa_lama" class="form-label">Gambar Beasiswa Lama</label>
                        <img src="gambarbeasiswa/{{ $data->gambar }}" class="img-fluid" alt="">
                    </div>
                    <div class="mb-3">
                        <label for="ganti_gambar" class="form-label">Ganti Gambar</label>
                        <input type="file" class="form-control" id="ganti_gambar" name="file">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
        </div>
    </div>
    </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
</body>

</html>

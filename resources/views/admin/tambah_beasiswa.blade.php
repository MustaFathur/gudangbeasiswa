<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <style>
        .crud {
            max-width: 800px;
            margin: 0 auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        label {
            flex-basis: 200px;
            font-weight: bold;
            margin-bottom: 0;
            color: white;
        }

        input[type="text"],
        input[type="file"],
        select {
            color: black;
            flex-grow: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }



        input[type="submit"] {
            background-color: #333;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: black;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <!-- partial:partials/\_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
    @include('admin.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper mt-4">


        <di class="container" align="center" style="padding-top:100px;">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="btn-close" data-bs-dismiss="alert">x</button>
                    {{ session()->get('message') }}
                </div>
            @endif
            <h1>Tambah Beasiswa</h1>
            <form class="crud" action="{{ url('upload_beasiswa') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="form-group">
                    <label for="nama-beasiswa">Nama Beasiswa</label>
                    <input type="text" id="nama-beasiswa" name="name" placeholder="Tuliskan Nama Beasiswa"
                        required="">
                </div>
                <div class="form-group">
                    <label for="nama-lembaga">Nama Lembaga</label>
                    <input type="text" id="nama-lembaga" name="lembaga"
                        placeholder="Tuliskan Nama Lembaga Penyedia Beasiswa" required="">
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori Beasiswa</label>
                    <select id="kategori" name="kategori" style="color: black" required="">
                        <option>--Pilih--</option>
                        <option value="diploma">Diploma</option>
                        <option value="sarjana">Sarjana</option>
                        <option value="magister">Magister</option>
                        <option value="doktor">Doktor</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" id="deskripsi" name="deskripsi" placeholder="Tuliskan Deskripsi Beasiswa"
                        required="">
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" id="gambar" name="file" required="">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Tambahkan">
                </div>
            </form>
    </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')

    <script>
        $(document).ready(function() {
            $('.alert .close').click(function() {
                $(this).closest('.alert').fadeOut();
            });
        }); <
        /body>

        <
        /html>

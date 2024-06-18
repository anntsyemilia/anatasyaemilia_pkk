<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>PENCARIAN PENDUDUK</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .bg-custom {
            background-color: #007bff;
            color: white;
        }
        .card-title {
            font-size: 1.1rem;
        }
        .card-body {
            background-color: #f1f1f1;
        }
        .input-group .form-control {
            border-radius: 0.25rem 0 0 0.25rem;
        }
        .input-group .btn {
            border-radius: 0 0.25rem 0.25rem 0;
        }
    </style>
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 py-4 bg-custom text-center">
                <h2>PENCARIAN PENDUDUK</h2>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <form action="/actsearchpenduduk" method="GET">
                    <div class="input-group">
                        @csrf
                        <input type="text" name="q" class="form-control" placeholder="Masukan nama penduduk">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary">Cari</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <div class="container mt-4">
        <div class="row">
            @foreach ($penduduk as $pk)
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title"><strong>NIK:</strong> {{ $pk->nik }}</h5>
                        <h5 class="card-title"><strong>Nama:</strong> {{ $pk->nama }}</h5>
                        <h5 class="card-title"><strong>Alamat:</strong> {{ $pk->alamat }}</h5>
                        <h5 class="card-title"><strong>Email:</strong> {{ $pk->email }}</h5>
                        <h5 class="card-title"><strong>Telepon:</strong> {{ $pk->telepon }}</h5>
                        <h5 class="card-title"><strong>Tanggal Lahir:</strong> {{ $pk->tanggal_lahir }}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

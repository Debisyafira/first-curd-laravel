<!doctype html>
<html lang="en" dir="ltr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-OXTEbYDqaX2ZY/BOaZV/yFGChYHtrXH2nyXJ372n2Y8abBhrqacCEe+3qhSHtLjy" crossorigin="anonymous">

    <title>First Crud</title>
</head>

<body>
    <div class="p-2 p">
        <h1 style="text-align: center"> Edit Data </h1>
    </div>

    <div class="p-5">
        <form action="{{ route('user.update', ['id_users' => $user->id_users]) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-2">
                <label>Nama*</label>
                <input name="nama" type="text" class="form-control" placeholder="Masukkan nama"
                    value="{{ $user->nama }}">
                <small id="emailHelp" class="form-text">Masukkan nama lengkap anda</small>
            </div>
            <div class="form-group mb-2">
                <label>Email*</label>
                <input name="email" type="email" class="form-control" placeholder="Masukkan email"
                    value="{{ $user->email }}">
                <small id="emailHelp" class="form-text">jangan lupa
                    pakai@</small>
            </div>
            <div class="form-group mb-2">
                <label class="form-label">jenis kelamin*</label>
                <select class="form-select " id="jk" name="jekel">
                    <option value="Laki-laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>

                    <script>
                        document.getElementById('jakel').value = "{{ $user->jekel }}";
                    </script>
                </select>
            </div>
            <div class="form-group mb-2">
                <label>Alamat*</label>
                <textarea name="alamat" type="text" class="form-control" placeholder="Masukkan Alamat" {{ $user->alamat }}></textarea>
                <small id="text" class="form-text"></small>
            </div>
            <div class="form-group mb-2">
                <label>No.hp</label>
                <input name="nohp" type="number" class="form-control" placeholder="Masukkan " {{ $user->nohp }}>
                <small id="text" class="form-text"></small>
            </div>
            <a href="/" class="btn btn-secondary">kembali</a>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>


</body>

</html>

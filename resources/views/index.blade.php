<!doctype html>
<html lang="en" dir="ltr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-OXTEbYDqaX2ZY/BOaZV/yFGChYHtrXH2nyXJ372n2Y8abBhrqacCEe+3qhSHtLjy" crossorigin="anonymous">

    <title>Frist Crud</title>
</head>

<body>
    <div class="p-3 p">
        <h2 style="text-align: center"> Table latihan Debi Indah Syafira</h2>

        <a href="/add" class="btn btn-warning">Tambah Data</a>
    </div>

    {{-- <P class="text-center text-primary">{{ $saya }}</P>
    <P class="text-center text-primary">{{ $kamu }}</P>
    <P class="text-center text-primary">{{ $dia }}</P> --}}

    <div class="p-5 m-5">
        <table class="table table-hover table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">nohp</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($user as $data)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->jekel }}</td>
                        @if ($data->nohp == null)
                            <td class="text-danger"><i> *Nomor Hp belum ditambah user* </i></td>
                        @else
                            <td>{{ $data->nohp }}</td>
                        @endif
                        <td>{{ $data->alamat }}</td>
                        <td>
                            <a href="{{ route('user.edit', ['id_users' => $data->id_users]) }}"
                                class="btn btn-warning">Edit</a>
                            <button onclick="hapus({{ $data->id_users }})" class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <script>
        function hapus(id_users) {

            console.log(id_users);

            if (confirm('Anda yakin ingin menghapus data ?')) {
                $.ajax({
                    type: 'get',
                    url: "{{ route('user.hapus') }}/" + id_users,
                    data: {
                        "id_users": id_users,
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            }
        }
    </script>

</body>

</html>

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Stmt\Return_;

class IndexController extends Controller
{
    public function index()
    {
        $data['user'] = DB::table('users')->get(); //mengambil semua data di table user

        // dd($data['user']);

        return view('index', $data);
    }

    public function edit($id_users)
    {
        //ini untuk mengambil 1 user yang dipilih
        $data['user'] = DB::table('users')->where('id_users', $id_users)->first();

        return view('edit', $data);
    }
    public function add()
    {

        return view('add');
    }

    public function update(Request $request, $id_users)
    {
        // dd($request);
        $simpan = DB::table('users')
            ->where('id_users', $id_users)
            ->update([
                'nama'     => $request->nama,
                'email'    => $request->email,
                'jekel'    => $request->jekel,
                'alamat'   => $request->alamat,
                'nohp'     => $request->nohp
            ]);

        if ($simpan == true) {
            echo "<script>
                alert ('Data berhasil disimpan');
                window.location = '/';
            </script>";
        } else {
            echo "<script>
                alert ('Data gagal disimpan');
                window.location = '/edit/$id_users';
            </script>";
        }
    }

    public function store(Request $request)
    {
        // dd($request);
        $save = DB::table('users')->insert(
            [
                'nama'     => $request->nama,
                'email'    => $request->email,
                'jekel'    => $request->jekel,
                'alamat'   => $request->alamat,
                'nohp'     => $request->nohp
            ]
        );

        //jika berhasil maka akan dialihkan kewindow location yg url-nya 7
        if ($save == true) {
            echo "<script>
                alert ('Data berhasil disimpan');
                window.location = '/';
            </script>";
            //maka
        } else {
            echo "<script>
                alert ('Data gagal disimpan');
                window.location = '/';
            </script>";
        }
    }
    public function hapus($id_users)
    {
        DB::table('users')
            ->where('id_users', $id_users)
            ->delete();
    }
}

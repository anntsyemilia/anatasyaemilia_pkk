<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\penduduk;
use Illuminate\Support\Facades\Auth;


class PageController extends Controller
{
    public function home()
    {
        return view("home", ["key" => "home"]);
    }

    public function penduduk()
    {
        $penduduk = penduduk::orderBy('id', 'desc')->get();
        // KEY UNTUK MEMBUAT STATUS AKTIF DAN YANG MV = MOVIES UNTUK 
        return view("penduduk", ["key" => "penduduk", "pk" => $penduduk]);
    }

    public function addpenduduk()
    {
        return view('tambahpenduduk', ["key" => "penduduk"]);
    }


    public function savependuduk(Request $request)
    {

        penduduk::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'tanggal_lahir' => $request->tanggal_lahir

        ]);
        return redirect("/penduduk")->with('alert', 'Data Berhasil Di Tambahkan');
    }

    public function edit($id)
    {
        $penduduk = penduduk::find($id);
        return view('formpenduduk', ["key" => "penduduk", "ep" => $penduduk]);
    }

    public function update($id, Request $request)
    {
        $pk = penduduk::find($id);
        $pk->nik = $request->nik;
        $pk->nama = $request->nama;
        $pk->alamat = $request->alamat;
        $pk->email = $request->email;
        $pk->telepon = $request->telepon;
        $pk->tanggal_lahir = $request->tanggal_lahir;



        $pk->save();

        return redirect('/penduduk')->with('alert', 'Data Berhasil Di Ubah');
    }

    public function delete($id)
    {
        $pk = penduduk::find($id);
        $pk->delete();
        return redirect('/penduduk')->with('alert', 'Data Berhasil Di Hapus');
    }

    public function login()
    {
        return view("login");
    }

    public function edituser()
    {
        return view("/edituser", ["key" => " "]);
    }

    public function updateuser(Request $request)
    {
        if ($request->password_baru == $request->konfirmasi_password) {
            $user = Auth::user();

            $user->password = bcrypt($request->password_baru);

            $user->save();

            return redirect("/edituser")->with('info', 'Password berhasil diubah');
        } else {
            return redirect("/edituser")->with('info', 'Password gagal di ubah');
        }
    }

    public function caripenduduk()
    {
        $penduduk = penduduk::orderBy('id', 'desc')->get();
        return view('caripenduduk', ["penduduk" => $penduduk]);
    }

    public function actsearchpenduduk(Request $request)
    {
        $search = $request->input('q');

        $penduduk = penduduk::where('nama', 'LIKE', "%$search%")->get();

        return view("actsearchpenduduk", ["data" => $penduduk]);
    }
}

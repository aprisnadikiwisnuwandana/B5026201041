<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KopiController extends Controller
{
    public function index()
    {
    	// mengambil data dari table kopi
    	//$kopi = DB::table('kopi')->get();
        $kopi = DB::table('kopi')->paginate(5);

    	// mengirim data pegawai ke view index
    	return view('kopi.index',['kopi' => $kopi]);

    }
// method untuk menampilkan view form tambah kopi
public function tambah()
{

	// memanggil view tambah
	return view('kopi.tambah');

}
// method untuk insert data ke table kopi
public function store(Request $request)
{
	// insert data ke table kopi
	DB::table('kopi')->insert([
		'merkkopi' => $request->merkkopi,
		'stockkopi' => $request->stockkopi,
		'tersedia' => $request->tersedia
	]);
	// alihkan halaman ke halaman kopi
	return redirect('/kopi');
}
// method untuk edit data kopi
public function edit($id)
{
	// mengambil data kopi berdasarkan kode yang dipilih
	$kopi = DB::table('kopi')->where('kodekopi',$id)->get();
	// passing data kopi yang didapat ke view edit.blade.php
	return view('kopi.edit',['kopi' => $kopi]);

}
public function view($id)
{
	// mengambil data kopi berdasarkan kopi yang dipilih
	$kopi = DB::table('kopi')->where('kodekopi',$id)->get();
	// passing data kopi yang didapat ke view edit.blade.php
	return view('kopi.detail',['kopi' => $kopi]);

}

// update data kopi
public function update(Request $request)
{
	// update data kopi
	DB::table('kopi')->where('kodekopi',$request->id)->update([
		'merkkopi' => $request->merkkopi,
		'stockkopi' => $request->stockkopi,
		'tersedia' => $request->tersedia
	]);
	// alihkan halaman ke halaman kopi
	return redirect('/kopi');
}
// method untuk hapus data kopi
public function hapus($id)
{
	// menghapus data kopi berdasarkan kode yang dipilih
	DB::table('kopi')->where('kodekopi',$id)->delete();

	// alihkan halaman ke halaman kopi
	return redirect('/kopi');
}
public function cari(Request $request)
{
    // menangkap data pencarian
    $cari = $request->cari;

        // mengambil data dari table kopi sesuai pencarian data
    $kopi = DB::table('kopi')
    ->where('merkkopi','like',"%".$cari."%")
    ->paginate();

        // mengirim data kopi ke view index
    return view('kopi.index',['kopi' => $kopi]);

}
}

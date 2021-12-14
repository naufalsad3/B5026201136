<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LipstickController extends Controller
{
    public function index()
    {
    	// mengambil data dari table lipstick
        $lipstick = DB::table('lipstick')->paginate(2);

    	// mengirim data lipstick ke view index
    	return view('lipstick.index',['lipstick' => $lipstick]);

    }
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table lipstick sesuai pencarian data
		$lipstick = DB::table('lipstick')
		->where('merklipstick','like',"%".$cari."%")
		->paginate();

    		// mengirim data lipstick ke view index
		return view('lipstick.index',['lipstick' => $lipstick]);

	}
    // method untuk menampilkan view form tambah lipstick
    public function tambah()
    {

	// memanggil view tambah
	return view('lipstick.tambah');

    }
    // method untuk insert data ke table lipstick
    public function store(Request $request)
    {
	// insert data ke table lipstick
	DB::table('lipstick')->insert([
		'merklipstick' => $request->merklipstick,
		'stocklipstick' => $request->stocklipstick,
		'tersedia' => $request->tersedia
	]);
	// alihkan halaman ke halaman lipstick
	return redirect('/lipstick');

    }
    // method untuk edit data lipstick
    public function edit($id)
    {
	// mengambil data lipstick berdasarkan id yang dipilih
	$lipstick = DB::table('lipstick')->where('kodelipstick',$id)->get();
	// passing data lipstick yang didapat ke view edit.blade.php
	return view('lipstick.edit',['lipstick' => $lipstick]);

    }
    // update data lipstick
    public function update(Request $request)
    {
	// update data lipstick
	DB::table('lipstick')->where('kodelipstick',$request->id)->update([
		'merklipstick' => $request->merklipstick,
		'stocklipstick' => $request->stocklipstick,
		'tersedia' => $request->tersedia
	]);
	// alihkan halaman ke halaman lipstick
	return redirect('/lipstick');
    }
    // method untuk hapus data lipstick
    public function hapus($id)
    {
	// menghapus data lipstick berdasarkan id yang dipilih
	DB::table('lipstick')->where('kodelipstick',$id)->delete();

	// alihkan halaman ke halaman lipstick
	return redirect('/lipstick');
    }
    public function view($id)
    {
    // mengambil data lipstick berdasarkan id yang dipilih
    $lipstick = DB::table('lipstick')->where('kodelipstick',$id)->get();
    // passing data lipstick yang didapat ke view edit.blade.php
    return view('lipstick.detail',['lipstick' => $lipstick]);

    }
}

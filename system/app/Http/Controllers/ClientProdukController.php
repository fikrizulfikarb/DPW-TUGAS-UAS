<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\User;

class ClientProdukController extends Controller
{
	function index(){
		$data['list_produk'] = Produk::paginate(12);
		return view('home', $data);
	}

	function showProduk(){
		$data['list_produk'] = Produk::all();
		return view('produk', $data);
	}

	function show(Produk $produk){
		$data['produk'] = $produk;
		return view('produk_single', $data);
	}

	function kontak(){
		return view('contact');
	}
	function filter(){
		$nama_produk = request('nama_produk');
		$data['show_produk'] = Produk::where('nama_produk', 'like', "%$nama_produk%")->get();
		$data['nama_produk'] = $nama_produk;
		return view('produk', $data);
	}
}
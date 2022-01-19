<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Kategori;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Desa;


class ProductController extends Controller
{
	function index(){
		$user = request()->user();
		$data['list_produk'] = Product::all();
		return view('admin.produk.index', $data);
	}

	function create(){
		return view('admin.produk.create');
	}

	function store(){

		$produk = new Product;
		$produk->id_user = request()->user()->id;
		$produk->nama_produk = request('nama_produk');
		$produk->harga = request('harga');
		$produk->stok = request('stok');
		$produk->berat = request('berat');
		$produk->deskripsi = request('deskripsi');
		$produk->save(); 

		$produk->handleUploadFoto();
	
		return redirect('produk')->with('success','Data Berhasil Ditambahkan');
		
	}

	function show(Product $produk){
		$data['produk'] = $produk;
		return view('admin/produk/show', $data);
	}

	function edit(Product $produk){
		$data['produk'] = $produk;
		return view('admin/produk/edit', $data);
	}

	function update(Product $produk){
		$produk->nama_produk = request('nama_produk');
		$produk->harga = request('harga');
		$produk->stok = request('stok');
		$produk->berat = request('berat');
		$produk->deskripsi = request('deskripsi');
		$produk->save();

		$produk->handleUploadFoto();

		return redirect('produk')->with('success','Data Berhasil Diubah');
	}

	function destroy(Product $produk){
		$produk->handleDelete();
		$produk->delete();
		return redirect('produk')->with('danger','Data Berhasil Dihapus');
	}

	function filter(){
		$nama_produk = request('nama_produk');
		$stok = explode(",", request('stok'));
		$data['harga_min'] = $harga_min = request('harga_min');
		$data['harga_max'] = $harga_max = request('harga_max');
		//$data['list_produk'] = Produk::where('nama_produk','like', "%$nama_produk%")->get();
		//$data['list_produk'] = Produk::whereIn('stok', $stok)->get();
		//$data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->get();
		//$data['list_produk'] = Produk::where('stok','<>', $stok)->get();
		//$data['list_produk'] = Produk::whereNotIn('stok', $stok)->get();
		//$data['list_produk'] = Produk::whereNotBetween('harga', [$harga_min, $harga_max])->get();
		//$data['list_produk'] = Produk::whereNotNull('stok')->get();
		//$data['list_produk'] = Produk::whereDate('created_at', ['2020-11-21','2020-11-15'])->get();
		$data['list_produk'] = Product::whereBetween('harga', [$harga_min, $harga_max])->whereNotIn('stok', [100])->whereYear('created_at', '2020')->get();
		$data['nama_produk'] = $nama_produk;
		$data['stok'] = request('stok');


		return view('admin.produk.index', $data);
		
	}

}

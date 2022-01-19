<?php 

namespace App\Http\Controllers;

use App\Models\Provinsi;
use App\Models\Produk;
use Config;
use App;

class HomeController extends Controller{


	function showBeranda(){
		return view ('beranda');
	}

	function showProduk(){
		return view ('produk');
	}

	function showKategori(){
		return view('kategori');
	}


	function test($produk, $hargaMin = 0, $hargaMax = 0){
		if ($produk == 'payung') {
			echo "Tampilkan Produk Payung";
		}elseif ($produk == 'sepeda') {
			echo "Tampilkan Produk Sepeda";
		}
		echo "<br>";
		echo "Harga Min Adalah $hargaMin <br>"; 
		echo "Harga Max Adalah $hargaMax <br>"; 
	}

	public function testCollection(){

		$list_bike = ['Honda', 'Yamaha', 'Kawasaki', 'Suzuki', 'Vespa', 'BMW', 'KTM'];
		$list_bike = collect($list_bike);
		$list_produk = Produk::all();

		// Sorting
		// Sort by harga terendah
		// dd($list_produk->sortBy('harga'));
		// Sort by harga tertinggi
		// dd($list_produk->sortByDesc('harga')); 
		// $data['list'] = $list_produk;
		// return view ('test-collection', $data);

		// Take
		// ($list->sortByDesc ('harga')->take (5) as $item)

		// Skip
		// @foreach($list->sortByDesc ('harga')->skip(2)->take (5) as $ite


		// Map
		// $map = $list_produk->map(function($item){
		// 	// return $item->nama;
		// 	$result['nama'] = $item->nama;
		// 	$result['harga'] = $item->harga;
		// 	return $result;
		// });

		// Each
		// $list_produk->each(function($item){
		// 	echo "$item->nama<br>";
		// });

		// filter
		// $filtered = $list_produk->filter(function($item){
		// 	return$item->harga > 200000;
		// });

		// dd($filtered);
		// dd($map);
		// dd($list_bike, $collection, $list_produk);


		// Sum, max, min, average
		// $sum = $list_produk->max('harga');
		// dd($sum);

		$data['list'] = produk::simplePaginate(15);
		return view ('test-collection', $data);

		dd($list_produk);
	}

	function testAjax(){
		$data['list_provinsi'] = Provinsi::all();
		return view('test-ajax', $data);
	}


function produk_single(){
		$data['list_produk'] = Provinsi::all();
		return view('test-ajax', $data);
	}

}
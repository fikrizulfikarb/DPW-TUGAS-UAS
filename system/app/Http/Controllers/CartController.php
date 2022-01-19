<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use Faker;


class ProdukController extends Controller
{
	function index(){
		$id_user = request()->user()->id;
		$data['list_produk'] = Produk::where('id_user',$id_user)->get();
		return view('produk.index', $data);
	}
}
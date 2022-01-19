<?php 


namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\User;
use App\Models\Kategori;
use App\Models\UserDetail;

/**
 * 
 */
class KategoriController extends Controller
{
	
	function index()
	{
		$data['list_kategori'] = Kategori::withCount('produk')->get();
		return view('admin/kategori/index', $data);
	}
	
	function create()
	{
		return view('admin/kategori/create');
	}
	
	function store()
	{
		$kategori = new Kategori;
		$kategori->nama = request('nama');
		$kategori->save();

		return redirect('kategori')->with('success', 'Data Berhasil di Tambahkan');
	}
	
	function show(Kategori $kategori)
	{
		$data['kategori'] = $kategori;
		return view('admin/kategori/show', $data);
	}
	
	function edit(Kategori $kategori)
	{
		$data['kategori'] = $kategori;
		return view('admin/kategori/edit', $data);
		
	}
	
	function update(Kategori $kategori)
	{
		$kategori->nama = request('nama');
		$kategori->save();

		return redirect('kategori')->with('success', 'Data Berhasil di Update');
	}
	
	function destroy(Kategori $kategori)
	{
		$kategori->delete();

		return redirect('kategori')->with('danger', 'Data Berhasil di Hapus');
	}
}
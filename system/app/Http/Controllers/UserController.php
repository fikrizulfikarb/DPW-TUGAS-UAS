<?php 


namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Requests\UserStoreRequest;
use App\Models\UserDetail;
use App\Models\Kategori;
use App\Models\Produk;

/**
 * 
 */
class UserController extends Controller
{
	
	function index()
	{
		$data['list_user'] = User::withCount('produk')->get();
		return view('admin/pengguna/index', $data);
	}
	
	function create()
	{
		return view('admin/pengguna/create');
	}
	
	function store(UserStoreRequest $request)
	{	

		// $validated = request()->validate([
		// 	'nama' => ['Required'],
		// 	'username' => ['Required'],
		// 	'email' => ['Required'],
		// ]);

		$user = new User;
		$user->nama = request('nama');
		$user->username = request('username');
		$user->email = request('email');
		$user->password = request('password');
		$user->jenis_kelamin= 2;
		if(request('level') == 'admin'){
            $user->level = 1; 
        } else{
            $user->level = 2; 
        }
		$user->save();

		$userDetail = new UserDetail;
		$userDetail->id_user = $user->id;
		$userDetail->no_handphone = request('no_handphone');
		$userDetail->save();
		
		return redirect('admin/pengguna')->with('success', 'Data Berhasil di Tambahkan');
	}
	
	function show(User $user)
	{
		$data['user'] = $user;
		return view('admin/pengguna/show', $data);

		//$loggedUser = request()->user();

		//if($loggedUser->id != $user->id) return abort(403);

		// find or fail
		// $user = User::findOrFail($user);
	}
	
	function edit(User $user)
	{
		$data['user'] = $user;
		return view('admin/pengguna/edit', $data);
		
	}
	
	function update(User $user)
	{
		$user->nama = request('nama');
		$user->username = request('username');
		$user->email = request('email');
		if(request('password')) $user->password = request('password');
		$user->save();

		return redirect('admin/pengguna')->with('success', 'Data Berhasil di Update');
	}
	
	function destroy(User $user)
	{
		$user->delete();

		return redirect('admin/pengguna')->with('danger', 'Data Berhasil di Hapus');
	}
}
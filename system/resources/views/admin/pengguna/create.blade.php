@extends('template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Tambah Data Produk
				</div>
				<div class="card-body">	

					<form action="{{url('user')}}" method="post">
						@csrf
					<div class="form-group">
						<label for="" class="control-label">Nama Lengkap</label>
						@include('template.utils.errors', ['item' => 'nama'])
						<input type="text" name="nama" class="form-control">
					</div>
						<div class="form-group">
						<label for="" class="control-label">Username</label>
						@include('template.utils.errors', ['item' => 'username'])
						<input type="text" name="username" class="form-control">
					</div>
						<div class="form-group">
						<label for="" class="control-label">Email</label>
						@include('template.utils.errors', ['item' => 'email'])
						<input type="email" name="email" class="form-control">
					</div>
						<div class="form-group">
						<label for="" class="control-label">Password</label>
						<input type="password" name="password" class="form-control">
					</div>
						<div class="form-group">
						<label for="" class="control-label">No Handphone</label>
						<input type="text" name="no_handphone" class="form-control">
					</div>
					<div class="form-group">
					<label for="" class="control-label">Level</label>
					<input type="text" name="level" class="form-control">
				</div>
					<button class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
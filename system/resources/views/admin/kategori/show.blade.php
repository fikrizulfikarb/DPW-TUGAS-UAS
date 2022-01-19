@extends('template.base')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 my-5">
			<div class="card">
				<div class="card-header">
					Detail Pada Kategori {{$kategori->nama}}
				</div>

					<table class="table table-responsive">
						<tbody>
							@foreach($kategori->produk as $produk)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>
					      				<a href="{{url('produk')}}" class="btn btn-dark btn-sm"><i class="fa fa-eye"></i></a>
					     			 </td>
									<td>{{$produk->nama_produk}}</td>
									<td>{{$produk->stok}}</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				
			</div>
		</div>
	</div>
</div>


@endsection
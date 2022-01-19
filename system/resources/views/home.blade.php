@extends('user.template.baseUser')

@section('content')

<div class="row justify-content-center">
    			<div class="col-md-10 mb-5 text-center">
    				<ul class="product-category">
    					<li><a href="#" class="active">All</a></li>
    					<li><a href="#">Clothes</a></li>
    					<li><a href="#">Pants</a></li>
    					<li><a href="#">Jacket</a></li>
                        <li><a href="#">Shoes</a></li>
    					<li><a href="#">Sandals</a></li>
                        <li><a href="#">Hat</a></li>

    				</ul>
    			</div>
    		</div>



<div class="brand-bg">
	<div class="row">
		<div class="col-md-12 ">
			<div class="card">
				<div class="card-header">
					Filter	
				</div>
				<div class="card-body">
					<form action="{{url('home/filter')}}" method="post">
						@csrf
						<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="" class="control-label">Nama</label>
								<input type="text" class="form-control" name="harga_min" value="{{$harga_min ?? ""}}">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="" class="control-label">Harga</label>
								<input type="text" class="form-control" name="harga_max" value="{{$harga_max ?? ""}}">
							</div>
						</div>
					</div>

						
						<div class="row">

						<div class="col-md-6">
							
						</div>
						<div class="col-md-6">
							
						</div>
					</div>
						
						<a href="{{url('produk_single/112')}}" class="btn btn-black py-1 px-5">Filter</a>

					</form>

				</div>
			</div>
		</div>
	</div>
			
   <div class="row">
    					@foreach($list_produk as $data)
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="{{url('produk_single', $data->id)}}" class="img-prod"><img src="{{url("public/$data->foto")}}" alt="{{$data->foto}}" width="100%">
    						<div class="overlay"></div>
    					</a>
    					
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3>{{$data->nama_produk}}</h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price">
		    							  Harga : {{$data->harga}}<br>
		    							| Stok : {{$data->stok}} <br>
		    							  Berat : {{$data->berat}}
		    						</p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="produk_single" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="{{url('pesanan')}}" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    					@endforeach
    					

 
 
                <div class="container">
                    <div class="col-md-12" style="text-align: center;">
                        <ul class="pagination justify-content-center">
                            {!! $list_produk->links() !!}
                        </ul>
                    </div>
                </div>
            </nav>

    	</div>
    		</div>
@endsection
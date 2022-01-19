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

     
<div class="card" style="max-width: 540px;">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="{{asset('public')}}/images/d.png" class="card-img" alt="...">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">JAKET KANVAS / SEMI PARKA / JAKET TRUCKER KANVAS 2 POCKET</h5>
				<p class="card-text">Jaket model military/ semiparka ini lagi hits banget lo guys..
					cocok banget buat di jadikan jaket atau sekedar outer ketika berpergian</p>
				<a href="{{url('cart')}}" class="btn btn-black py-1 px-5">Edit</a>
			</div>
			</div>
		</div>
	</div>


<div class="card" style="max-width: 540px;">
	<div class="row no-gutters">
		<div class="col-md-4">
			<img src="{{asset('public')}}/images/a.png" class="card-img" alt="...">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Stussy World Tour Flags Hoodie Black - S</h5>
				<p class="card-text">Deskripsi Stussy World Tour Flags Hoodie Black - S
					Printed Front, Back, and Arms Logo.
					Brand New with Label and Tag.
					Inner Unbrushed Fleece Material.
					Material: 100% Cotton.</p>
				<a href="{{url('cart')}}" class="btn btn-black py-1 px-5">Edit</a>
			</div>
		</div>
	</div>
</div>



@endsection
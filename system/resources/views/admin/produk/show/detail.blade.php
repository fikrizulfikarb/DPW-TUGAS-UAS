<p>
	{{$produk->harga}} |
	Stok : {{$produk->stok}} |
	Berat : {{$produk->berat}} kg |
	Seller : {{$produk->nama}} |
	Tanggal Produk : {{$produk->created_at->diffForHumans()}}
</p>

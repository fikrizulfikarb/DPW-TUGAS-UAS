@extends('user.template.baseUser')

@section('content')

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 ftco-animate">
            <a href="{{asset('public')}}/images/a.png" class="image-popup"><img src="{{asset('public')}}/images/a.png" class="img-fluid" alt="Colorlib Template"></a>
          </div>
          <div class="col-lg-6 product-details pl-md-5 ftco-animate">
            <h3>Stussy World Tour Flags Hoodie Black - S</h3>
            <div class="rating d-flex">
              
              <p class="text-left mr-4">
                <a href="#" class="mr-2" style="color: #000;">Harga :  Rp. 329,000 <span style="color: #000;"> </span></a>
                <a href="#" class="mr-2" style="color: #000;">Stok : 20 <span style="color: #000;"> </span></a>
              </p>
              <p class="text-left">
                <a href="#" class="mr-2" style="color: #000;">Berat : 0.90 mg <span style="color: #000;"></span></a>
              </p>
            </div>
            
            <p>


            Deskripsi Stussy World Tour Flags Hoodie Black - S

            Printed Front, Back, and Arms Logo.
            Brand New with Label and Tag.
            Inner Unbrushed Fleece Material.
            Material: 100% Cotton.

            </p>

                 <a href="#" class="mr-2" style="color: #000;">Jumlah Barang : 1 <span style="color: #000;"></span></a>
              </p>
                  <a href="#" class="mr-2" style="color: #000;">Total : Rp. 329,000 <span style="color: #000;"></span></a>
              </p>
              <div class="row mt-4">
              <div class="col-md-6">
                <div class="form-group d-flex">
                  <div class="select-wrap">
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <select name="" id="" class="form-control">
                      <option value="">Small</option>
                      <option value="">Medium</option>
                      <option value="">Large</option>
                      <option value="">Extra Large</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="w-100"></div>
              <div class="input-group col-md-6 d-flex mb-3">
                <span class="input-group-btn mr-2">
                    <button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
                     <i class="ion-ios-remove"></i>
                    </button>
                  </span>
                <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                <span class="input-group-btn ml-2">
                    <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                       <i class="ion-ios-add"></i>
                   </button>
                </span>
              </div>
              <div class="w-100"></div>
             </div>


<div class="w-100"></div>
  </div>
  
  <div class="row"></div>
    <div class="col-md-12 ">
      <div class="card">
        <div class="card-header">
          Alamat Pengiriman 
        </div>
        <div class="card-body">
          <form action="{{url('home/filter')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="" class="control-label">Nama Produk</label>
              <input type="text" class="form-control" name="nama" value="">
            </div>
            <div class="form-group">
              <label for="" class="control-label">Harga Produk</label>
              <input type="text" class="form-control" name="emailk" value="">
            </div>
            <div class="form-group">
              <label for="" class="control-label">Nama Pelanggan</label>
              <input type="text" class="form-control" name="nama_pelanggan" value="">
            </div>
             <div class="form-group">
              <label for="" class="control-label">Alamat</label>
              <input type="text" class="form-control" name="alamat" value="">
            </div>
            <div class="form-group">
              <label for="" class="control-label">No Handphone</label>
              <input type="text" class="form-control" name="no_handphone" value="">
            </div>
            <div class="form-group">
              <label for="" class="control-label">Jumlah Beli</label>
              <input type="text" class="form-control" name="jumlah_beli" value="">
            </div>

            </form>

            <div class="input-group col-md-8 d-flex mb-3">
            <p><a href="{{asset('pesanan')}}" class="btn btn-black py-3 px-4">Pesan Sekarang</a></p>
            </div>
            </div>
        </div>
      </div>
    </div>
  
          </div>
        </div>
      </div>
    </section>

@endsection
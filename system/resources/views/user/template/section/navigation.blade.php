
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-dark" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="{{ url('/')}}">FIU Shop</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item "><a href="{{ url('/')}}" class="nav-link">Home</a></li>
              <li class="nav-item dropdown">
              <li class="nav-item"><a href="{{ url('/')}}" class="nav-link">Product</a></li>
              <li class="nav-item"><a href="{{ url('pesanan')}}" class="nav-link">Pesanan</a></li>
              <li class="nav-item"><a href="{{ url('contact')}}" class="nav-link">Contact</a></li>
              <li class="nav-item"><a href="{{ url('login')}}" class="nav-link">Login</a></li>
              <li class="nav-item"><a href="{{ url('registrasi')}}" class="nav-link">Registrasi</a></li>
              <li class="nav-item"><a href="{{ url('cart')}}" class="nav-link"><span class="icon-shopping_cart"></span></a></li>

            </ul>
          </div>
        </div>
      </nav>

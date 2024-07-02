<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Service MDP IT Store</title>

  <!-- slider stylesheet -->
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css')}}" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}" />

  <!-- fonts style -->
  <link href="{{url('https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap')}}" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="{{url('css/style.css" rel="stylesheet')}}" />
  <!-- responsive style -->
  <link href="{{url('css/responsive.css" rel="stylesheet')}}" />
</head>
<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.html">
            <style>
              .image-container img {
                  height: 50px;
                  width: 100px;
              }   
            </style>
            <div class="image-container">
              <img src="{{url('images/mdp.jpeg')}}" alt="">
            </div>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('home')}}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('about')}}">Tentangan Kami</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('produk')}}"> Produk </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('transaksi')}}"> Transaksi </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('service')}}"> Service </a>
                  </li>
              </ul>
            </div>
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();" class="me-3 text-light">
                         <i class="fa fa-sign-in-alt me-2"> {{ __('Log Out') }} </i>
                    </x-dropdown-link>
                </form>
          </div>                   
        </nav>
      </div>
    </header>
    <section class=" slider_section position-relative">
        <div class="container">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <br>
            <br>
            <br>
            <br>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col">
                    <div class="detail-box">
                      <div>
                        <h2>
                          Selamat Datang Di
    
                        </h2>
                        <h1>
                          Service MDP IT Store
                        </h1>
                        <p>
                          Disini kami memberikan layanan service secara online tanpa harus datang ke tempat
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <br>
              <br>
              <br>
              <div class="carousel-item">
                <div class="row">
                  <div class="col">
                    <div class="detail-box">
                      <div>
                        <h2>
                          Selamat datang di
    
                        </h2>
                        <h1>
                          Service MDP it Store
                        </h1>
                        <p>
                          Disini kami memberikan layanan service secara online tanpa harus datang ke tempat
                        </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <br>
            <br>
            <br>
            <br>
              <div class="carousel-item">
                <div class="row">
                  <div class="col">
                    <div class="detail-box">
                      <div>
                        <h2>
                          Selamat Datang di
    
                        </h2>
                        <h1>
                          Service MDP IT Store
                        </h1>
                        <p>
                          Disini kami memberikan layanan service secara online tanpa harus datang ke tempat
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    
        </div>
      </section>
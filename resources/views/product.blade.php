@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<div>
<head>
  <meta charset="utf-8">
  <title>Ver Producto</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  {{-- VER esto no esta agarrando bien --}}
  {{-- @include('snippets.fonts') --}}


  <!-- Favicons -->
  <!-- <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon"> -->


    <!-- este css es para los iconos de < > (back y forward) con fondo verde en el owl carousel -->
    <link rel="stylesheet" href="{{ asset('css/lib/ionicons/css/ionicons.min.css') }}"> 

    {{-- LibrariesCSS Files --}}
    <link rel="stylesheet" href="{{ asset('css/lib/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lib/animate/animate.min.css') }}">

    {{-- Carrusel --}}
    <link rel="stylesheet" href="{{ asset('css/lib/owlcarousel/assets/owl.carousel.min.css') }}">

   <!-- Bootstrap CSS File -->
   <link rel="stylesheet" href="{{ asset('css/lib/bootstrap/css/bootstrap.min.css') }}">



    {{-- CSS propio --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> 



<!-- Bootstrap core CSS -->
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
<!-- <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
<link href="scss/style.scss" rel="stylesheet">-->

</head>

<body>
  <!--/ Intro single start /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">ARES</h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="property-grid.html">Macetas</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Ares
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Property Single Start /-->
  <section class="property-single nav-arrow-b">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
            <div class="carousel-item-b">
              <img src="img/ares_product_color_menta2.jpg" alt="">
            </div>
            <div class="carousel-item-b">
              <img src="img/ares_product_color_coral2.jpg" alt="">
            </div>
            <div class="carousel-item-b">
              <img src="img/ares_productcolor_napoles2.jpg" alt="">
            </div>
          </div>
          <div class="row justify-content-between">
            <div class="col-md-5 col-lg-4">
              <div class="property-price d-flex justify-content-center foo">
                <div class="card-header-c d-flex">
                  <div class="card-box-ico">
                    <span class="ion-money">$</span>
                  </div>
                  <div class="card-title-c align-self-center">
                    <h5 class="title-c">500</h5>
                  </div>
                </div>
              </div>
            <div>
              <br>
                      <div class="card producto">
                      <div class="container-images">
                        <img src="img/ares_product_color_coral1.png" class="card-img-top" alt="Coral" productcolor="#d07b78">
                        <img src="img/ares_productcolor_grafito2.png" class="card-img-top" alt="Grafito" productcolor="#575b67">
                        <img src="img/ares_productcolor_marfil2.png" class="card-img-top" alt="Marfil" productcolor="#e2e1dd">
                        <img src="img/ares_productcolor_menta2.png" class="card-img-top" alt="Menta" productcolor="#cbd8d1">
                        <img src="img/ares_productcolor_napoles1.png" class="card-img-top" alt="Nápoles" productcolor="#e7c170">
                        <img src="img/ares_productcolor_salmon2.png" class="card-img-top" alt="Salmón" productcolor="#e9bdb2">

                      </div>
                      <div class="card-body">
                      <div class="title-box-d">
                      <h3 class="title-d">COLORES</h3>
                      </div>
                        <p class="card-text">Logramos estos tonos pigmentando el cemento durante el proceso de preparación. ¡Incorporamos nuevos colores cada temporada!</p> <br>
                        <div id="colorList">
                        </div>
                      </div>
                    </div>

            </div>
            </div>
            <div class="col-md-7 col-lg-7 section-md-t3">
              <div class="row">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">DESCRIPCIÓN</h3>
                  </div>
                </div>
              </div>
              <div class="property-description">
                <p class="description color-text-a">
                  Objeto multifuncional. Puede usarse como maceta, contenedor, o para guardar utensilios de cocina.
                  Cada pieza está hecha a mano y sellada con aceites y ceras naturales. Resistentes al agua y las manchas.
                  <br>
                  <br>
                  Pieza única y hecha a mano. La superficie puede presentar irregularidades, que son individuales a cada objeto.
                </p>
              </div>
              <div class="row section-t3">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">TAMAÑOS</h3>
                  </div>
                </div>
              </div>
              <div class="amenities-list color-text-a">
                <p class="description color-text-a no-margin">
                  <h5>ARES SMALL</h5>
                  9 x 9 x 10cm | 0,5 kg
                  <br>
                  <br>
                  <h5>ARES MEDIUM</h5>
                  12 x 12 x 13cm | 1 kg
                  <br>
                  <br>
                  <h5>ARES LARGE</h5>
                  14 x 14 x 15cm | 2 kg
                </p>
                </ul>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Property Single End /-->


 
<!-- Librerías Javascript -->
<script src="{{asset('css/lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('css/lib/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{asset('css/lib/popper/popper.min.js')}}"></script>
<script src="{{asset('css/lib/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('css/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('css/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('css/lib/scrollreveal/scrollreveal.min.js')}}"></script>
  
<!-- Scripts propios -->
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> 

  
</body>

</html>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>


  
  </div>
 

  @endsection   
       




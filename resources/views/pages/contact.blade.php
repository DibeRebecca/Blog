@extends('layouts.layout1')
@section('content')
    
@include('layouts.header')

<section class="hero-wrap hero-wrap-2" style="background-image: url('img/faure1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Contact</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html"> <i class="ion-ios-arrow-forward"></i></a></span> <span> <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section contact-section bg-light">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">
        <div class="col-md-12 mb-4">
          <h2 class="h4">Contact </h2>
        </div>
        <div class="w-100"></div>
        <div class="col-md-3">
          <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
        </div>
        <div class="col-md-3">
          <p><span>Telephone:</span> <a href="tel://1234567920">+ 228 2355 98</a></p>
        </div>
        <div class="col-md-3">
          <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@faure-togo.com</a></p>
        </div>
        <div class="col-md-3">
          <p><span>Site Web</span> <a href="#">faure-togo.com</a></p>
        </div>
      </div>
    </div>
  </section>
      <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
          <div class="container-wrap">
              <div class="row d-flex align-items-stretch no-gutters">
                  <div class="col-md-6 p-5 order-md-last">
                      <form action="#">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Nom">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Prenom">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Objet">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Envoyer" class="btn btn-primary py-3 px-5">
            </div>
          </form>
                  </div>
                  <div class="col-md-6 d-flex align-items-stretch">
                      <div id="map"></div>
                  </div>
              </div>
          </div>
      </div>
@endsection 
@extends('head')
@section('title', 'Index')
@section('content')

<div class="row">
  <div class="col-12 col-md-11 mb-1 text-end">
    <a class="btn btn-success mb-3 contShadow" href="/ticketsSale">Venta de entradas</a>
  </div>
</div>
<div class="row justify-content-center align-items-center">
  <div class="col-12 col-md-10 p-1 border border-info-subtle border-4 rounded-4 contShadow">
    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner text-center">
        <div class="carousel-item active">
          <img src="images/Train-1.jpg" class="d-block w-100 rounded-4" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/Train-2.jpg" class="d-block w-100 rounded-4" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/Train-3.jpg" class="d-block w-100 rounded-4" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev bg-dark bg-opacity-75 rounded-start-4" type="button"
        data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next bg-dark bg-opacity-75 rounded-end-4" type="button"
        data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</div>
@endsection
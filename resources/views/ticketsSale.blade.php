@extends('head')
@section('title', 'Tikects Sales')
@section('content')

<div class="row justify-content-center">
  <div class="col-12 col-md-10 text-center mt-4">
    <p class="h2 fw-bold">VENTA DE ENTRADAS</p>
    <hr class="mt-4 border border-dark border-3 rounded-4 contShadow">
  </div>
</div>

<form action="" method="post">
  <div id="first" style="display: block;">
    @include('includes/firstCard')
  </div>
  <div id="second" style="display: none;">
    @include('includes/secondCard')
  </div>
  <div id="third" style="display: none;">
    @include('includes/thirdCard')
  </div>
</form>


@endsection
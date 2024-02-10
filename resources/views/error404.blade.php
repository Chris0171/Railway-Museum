@extends('head')
@section('title', 'Error 404')
@section('script', '')
@section('content')

    <div class="row justify-content-center align-items-center">
        <div class="col-10 col-md-8 text-center mt-5">
            <p class="display-2 text-danger fw-bold">PÁGINA NO ENCONTRADA</p>
            <hr class="mt-5 border border-danger border-3 rounded-4 contShadow">
        </div>
    </div>
    <div class="row justify-content-center align-items-center">
        <div class="col-6 me-auto text-end mt-5">
            <a class="btn btn-lg btn-success fw-bold me-5" href="/">Índice</a>
        </div>
        <div class="col-6 text-start mt-5">
            <a class="btn btn-lg btn-success fw-bold ms-5" href="/login">Taquilla</a>
        </div>
    </div>

@endsection

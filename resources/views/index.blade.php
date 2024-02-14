@extends('head')
@section('title', 'Index')
@section('content')

    <div class="row justify-content-center">
        <div class="col-12">
            @isset($success)
                @if ($success == 1)
                    <div
                        class="text-center p-3 m-2 mb-3 bg-success bg-opacity-10 border border-success border-2 rounded fw-bold text-success">
                        Las entradas han sido compradas con éxito. Revise su email. ----> <a
                            class="link-primary link-opacity-75 fw-bold link-offset-2 link-underline-opacity-100 link-opacity-100-hover"
                            href="https://mail.google.com" target="_blank">Aquí</a>
                    </div>
                @elseif ($success == 2)
                    <div
                        class="text-center p-3 m-2 mb-3 bg-danger bg-opacity-10 border border-danger border-2 rounded fw-bold text-danger">
                        Ha ocurrido algún error en la compra. Inténtelo otra vez.
                    </div>
                @endif
            @endisset
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-11 col-lg-10 mb-1 text-end">
            <a class="btn btn-success mb-3 contShadow" href="/ticketsSale">Venta de entradas</a>
        </div>
    </div>
    <div class="row justify-content-center align-items-center">
        <div class="col-12 col-md-10 col-lg-8 p-1 mb-2 border border-info-subtle border-4 rounded-4 contShadow">
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
                        <img src="images/Train-1.jpg" class="d-block w-100 rounded-4" alt="Tren 1">
                    </div>
                    <div class="carousel-item">
                        <img src="images/Train-2.jpg" class="d-block w-100 rounded-4" alt="Tren 2">
                    </div>
                    <div class="carousel-item">
                        <img src="images/Train-3.jpg" class="d-block w-100 rounded-4" alt="Tren 3">
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

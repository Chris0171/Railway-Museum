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
    {{-- Exposiciones --}}
    <h2 class="p-2 mt-5 st-border fw-bold">Exposiciones</h2>
    <hr class="border border-secondary border-2 opacity-100">
    <div class="row justify-content-center align-items-center mt-3 pe-4 ps-4">
        <div class="col-12 col-md-6">
            <h4>Exposiciones temporales: </h4>
            <div class="row">
                <div class="col-12 mb-3 col-lg-6">
                    <a href="https://www.museodelferrocarril.org/temporal/Revelando-ferrocarril.asp" target="_blank">
                        <img class="img-fluid rounded expo" src="/images/Expo_1.jpg" alt="Primera exposición">
                    </a>
                </div>
                <div class="col-12 mb-3 col-lg-6">
                    <a href="https://www.museodelferrocarril.org/temporal/Belleza-ferroviaria.asp" target="_blank">
                        <img class="img-fluid rounded expo" src="/images/Expo_2.jpg" alt="Segunda exposición">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <h4>Exposiciones virtuales: </h4>
            <div class="row">
                <div class="col-12 mb-3 col-lg-6">
                    <a href="https://www.museodelferrocarril.org/140Delicias/index.asp" target="_blank">
                        <img class="img-fluid rounded expo" src="/images/Expo_3.jpg" alt="Tercera exposición">
                    </a>
                </div>
                <div class="col-12 mb-3 col-lg-6">
                    <a href="">
                        <img class="img-fluid rounded expo" src="/images/Expo_4.jpg" target="_blank"
                            alt="Cuarta exposición">
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Noticias --}}
    <h2 class="p-2 mt-5 fw-bold st-border">Noticias</h2>
    <hr class="border border-secondary border-3 opacity-100">
    <div class="row justify-content-center mt-3 pe-4 ps-4">
        <div class="col-4 p-2 rounded bg-primary bg-opacity-25 expo">
            <a href="https://www.museodelferrocarril.org/comunicacion/noticia.asp?item=709">
                <img class="img-fluid rounded" src="/images/News.jpg" alt="Imagen de noticias" class="img-fluid">
            </a>
        </div>
        <div class="col-8 p-3 ps-5 pe-5">
            <a class="link-success link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-100-hover"
                href="https://www.museodelferrocarril.org/comunicacion/noticia.asp?item=709">
                <h3>Programación de febrero</h3>
            </a>
            <h6 class="mt-4 lh-base text-justify">
                Con el apoyo de la Fundación Talgo, el Museo ha organizado una charla con alumnado del CEIP Juan Sebastián
                Elcano (Madrid) en la que participará una ingeniera que desarrolla su labor profesional en la empresa
                ferroviaria Talgo. La jornada forma parte del proyecto ‘Hacia las STEAM por la Vía del Ferrocarril',
                impulsado por la Fundación de los Ferrocarriles Españoles, que tiene como objetivo fomentar las vocaciones
                científicas y el espíritu innovador, fundamentalmente entre las jóvenes y las niñas, animándolas a
                decantarse por disciplinas relacionadas con la investigación e innovación en el ferrocarril.
            </h6>
        </div>
    </div>
@endsection

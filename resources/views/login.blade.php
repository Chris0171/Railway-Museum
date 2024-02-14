@extends('head')
@section('title', 'Login')
@section('script', '')
@section('content')

    <div class="row justify-content-center">
        <div class="col-12">
            @isset($error)
                @if ($error == 1)
                    <div
                        class="text-center p-3 m-2 mb-3 bg-success bg-opacity-10 border border-success border-2 rounded fw-bold text-success">
                        Se ha cerrado sesión exitosamente.
                    </div>
                @elseif ($error == 2)
                    <div
                        class="text-center p-3 m-2 mb-3 bg-danger bg-opacity-10 border border-danger border-2 rounded fw-bold text-danger">
                        Aviso: Contraseña incorrecta.
                    </div>
                @endif
            @endisset
        </div>
    </div>

    <form action="/login/check" method="post">
        @csrf
        <div class="row justify-content-center align-items-center" style="display: flex;">
            <div class="col-10 col-sm-8 col-md-4 mt-5">
                <div class="card border-secondary border-3 mb-3 contShadow">
                    <div class="card-header bg-info-subtle border-secondary border-3 text-center p-3">
                        <p class="h3 mt-2">Iniciar Sesión</p>
                    </div>
                    <div class="card-body text-dark text-center">
                        <div class="input-group p-3 ps-5 pe-5">
                            <span class="input-group-text fw-bold border-dark" id="inputPass">Contraseña: </span>
                            <input type="text" class="form-control border-dark" placeholder="Contraseña...">
                        </div>
                    </div>
                    <div class="card-footer bg-light text-end p-3">
                        <div class="row align-items-center">
                            <div class="col-auto ms-auto">
                                <button type="submit" id="btnSubmit" class="btn btn-success fw-bold btnNext">Iniciar
                                    Sesión</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection

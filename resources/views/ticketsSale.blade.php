@extends('head')
@section('title', 'Index')
@section('content')

<div class="row justify-content-center">
  <div class="col-12 col-md-10 text-center mt-4">
    <p class="h2 fw-bold">VENTA DE ENTRADAS</p>
    <hr class="mt-4 border border-dark border-3 rounded-4 contShadow">
  </div>
</div>

<form action="" method="post">
  <!-- Primera tarjeta de información -->
  <div id="first" class="row justify-content-center align-items-center" style="display: flex;">
    <div class="col-10 col-md-6 mt-5">
      <div class="card border-secondary border-3 mb-3 contShadow">
        <div class="card-header bg-info-subtle border-secondary border-3 text-center p-3">
          <p class="h3">Seleccione el día y la hora que desea ir.</p>
        </div>
        <div class="card-body text-dark">
          <!-- Campo fecha -->
          <div class="row g-3 justify-content-center pe-5 ps-5 align-items-center">
            <div class="col-auto me-auto lab">
              <label for="calendary" class="col-form-label fw-bold">Día:</label>
            </div>
            <div class="col-auto">
              <input type="date" id="calendary" class="form-control fw-medium">
            </div>
          </div>
          <!-- Divición de campos -->
          <hr class="mt-2 border border-dark border-1 me-3 ms-3">

          <!-- Campo franja -->
          <div class="row g-3 justify-content-center pe-5 ps-5 align-items-center">
            <div class="col-auto me-auto lab">
              <label for="calendary" class="col-form-label fw-bold">Franja: </label>
            </div>
            <div class="col-auto p-0">
              <div class="form-check">
                <input type="radio" class="btn-check" name="franja" id="franja1">
                <label class="btn border-dark border-2 btn-outline-dark fw-bold rounded-4" for="franja1">Franja
                  1</label>
              </div>
            </div>
            <div class="col-auto p-0">
              <div class="form-check">
                <input type="radio" class="btn-check" name="franja" id="franja2">
                <label class="btn border-dark border-2 btn-outline-dark fw-bold rounded-4" for="franja2">Franja
                  2</label>
              </div>
            </div>
            <div class="col-auto p-0">
              <div class="form-check">
                <input type="radio" class="btn-check" name="franja" id="franja3">
                <label class="btn border-dark border-2 btn-outline-dark fw-bold rounded-4" for="franja3">Franja
                  3</label>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer bg-light text-end p-3 ps-5 pe-5 ">
          <div class="row">
            <div class="col-auto ms-auto">
              <button type="button" class="btn btn-success fw-bold btnNext">Siguiente</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Segunda tarjeta de información -->
  <div class="row justify-content-center align-items-center" id="second" style="display: none;">
    <div class="col-10 col-md-6 mt-5">
      <div class="card border-secondary border-3 mb-3 contShadow">
        <div class="card-header bg-info-subtle border-secondary border-3 text-center p-3">
          <p class="h3">Seleccione entradas que desea comprar</p>
        </div>
        <div class="card-body text-dark">
          <div class="row g-3 justify-content-center pe-5 ps-5 align-items-center">
            <div class="col-auto me-auto lab">
              <label for="menor4" class="col-form-label fw-bold">Menores (5$):</label>
            </div>
            <div class="col-auto">
              <p class="fw-medium m-0">Nro. entradas: </p>
            </div>
            <div class="col-auto">

              <input type="number" min="0" max="5" value="0" id="menor4" class="form-control numSales">
            </div>
          </div>
        </div>
        <div class="card-footer bg-light text-end p-3 ps-5 pe-5 ">
          <div class="row">
            <div class="col-auto me-auto">
              <button type="button" class="btn btn-danger fw-bold">Anterior</button>
            </div>
            <div class="col-auto">
              <button type="button" class="btn btn-success fw-bold btnNext">Siguiente</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>


@endsection
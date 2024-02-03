<div class="row justify-content-center align-items-center" style="display: flex;">
  <div class="col-12 col-sm-10 col-md-8 mt-5">
    <div class="card border-secondary border-3 mb-3 contShadow">
      <div class="card-header bg-info-subtle border-secondary border-3 text-center p-3">
        <p class="h3 mt-2">{{ $wTitle }}</p>
      </div>
      <div class="card-body text-dark">
        {{ $slot }}
      </div>
      <div class="card-footer bg-light text-end p-3 ps-5 pe-5 ">
        <div class="row align-items-center">
          <div class="col-auto">
            <div
              class="bg-danger ps-4 pe-4 p-1 text-danger fw-bold bg-opacity-10 border border-danger rounded errorMessage">
              Aviso: {{ $errorText}}
            </div>
          </div>
          <div class="col-auto ms-auto">
            <button type="button" class="btn btn-success fw-bold btnNext">Siguiente</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
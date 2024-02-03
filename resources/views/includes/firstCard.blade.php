<!-- Primera tarjeta de información -->
<x-wrapper>
  <x-slot name="wTitle">Seleccione fecha y hora</x-slot>
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
  <x-slot name="errorText">Debe rellenar todos los campos.</x-slot>
  
</x-wrapper>
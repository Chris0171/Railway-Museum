<!-- Segunda tarjeta de información -->
<x-wrapper>
  <x-slot name="wTitle">Resumen de compra</x-slot>

  <div class="row justify-content-center align-items-center g-3 pe-5 ps-5">
    <div class="col-12 me-auto lab">
      <div class="table-responsive">
        <table class="table table-secondary table-hover rounded mb-2">
          <thead class="bg-primary-subtle">
            <tr>
              <td class="fw-bold">TIPO</td>
              <td class="fw-bold">NOMBRE</td>
              <td class="fw-bold">EMAIL</td>
              <td class="fw-bold">DNI</td>
              <td class="fw-bold">PRECIO</td>
            </tr>
          </thead>
          <tbody id="summaryCardBody" class="table-group-divider">
          </tbody>
        </table>
      </div>
      <hr class="border border-dark border-2 rounded-4 pe-5 ps-5">
      <div class="row justify-content-center align-items-center">
        <div class="col-auto">
          <h3>
            Método de pago único: <img
              src="https://th.bing.com/th/id/OIP.hqRo2vF_n9sBWOrZk0NV_QHaEo?w=252&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7"
              class="img-fluid" width="50" alt="Imagen visa">
          </h3>

        </div>
        <div class="col-auto ms-md-auto">
          <h3 id="totalP">Total: </h3>
        </div>
      </div>
    </div>
  </div>
  <x-slot name="errorText">Debe rellenar todos los campos</x-slot>
  <x-slot name="btnPrev">
    <div class="col-auto me-auto">
      <button type="button" class="btn btn-danger fw-bold btnPrev">Anterior</button>
    </div>
  </x-slot>
</x-wrapper>

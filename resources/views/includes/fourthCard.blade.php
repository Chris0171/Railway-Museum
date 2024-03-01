<!-- Segunda tarjeta de información -->
<x-wrapper>
  <x-slot name="wTitle">Resumen de compra</x-slot>

  <div class="row justify-content-center align-items-center g-3 pe-5 ps-5">
    <div class="col-12 me-auto lab">
      <table class="table table-secondary table-hover rounded">
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
  </div>
  <x-slot name="errorText">Debe rellenar todos los campos</x-slot>
  <x-slot name="btnPrev">
    <div class="col-auto me-auto">
      <button type="button" class="btn btn-danger fw-bold btnPrev">Anterior</button>
    </div>
  </x-slot>
</x-wrapper>

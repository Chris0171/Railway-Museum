<!-- Button trigger modal -->
<button type="button" id="btnModal" style="display: none" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
</button>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title text-danger fw-bold align-center">Alerta</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fw-bold">
        Se requiere confirmación para comprar con éxito las entradas.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success" id="btnConfirm">Confirmar</button>
      </div>
    </div>
  </div>
</div>

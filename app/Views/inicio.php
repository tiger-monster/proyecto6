<div class="container">
  <h1>CRUD de Muebles</h1>
    <div class="row">
        <div class="col-sm-4">
            <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarMueble">
                <span class="fas fa-user-plus"></span> Agregar
            </button>
        </div>
    </div>
    <hr>
    <div class="row">
        <hr>
      <div class="col-sm-12">
        <div id="tablaCargadaMuebles"></div>
      </div>
    </div>


    <!-- Modal -->
<div class="modal fade" id="modalAgregarMueble" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo Mueble</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form id="frmAgregaMueble">
            <label>Nombre del Mueble</label>
            <input type="text" id="mueble" name="mueble" class="form-control">
            <label>Tipo de madera</label>
            <input type="text" id="tipo" name="tipo" class="form-control">
            <label>Costo de Venta</label>
            <input type="text" id="costov" name="costov" class="form-control">
            <label>Costo de Compra</label>
            <input type="text" id="costoc" name="costoc" class="form-control">
            <label>Fecha</label>
            <input type="text" id="fecha" name="fecha" class="form-control">
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="btnAgregarMueble">Guardar</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="modalActualizarMueble" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Mueble</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form id="frmAgregaMuebleu">
            <input type="text" id="idMuebleu" name="idMuebleu" hidden="">
            <label>Nombre del Mueble</label>
            <input type="text" id="muebleu" name="muebleu" class="form-control">
            <label>Tipo de madera</label>
            <input type="text" id="tipou" name="tipou" class="form-control">
            <label>Costo de Venta</label>
            <input type="text" id="costovu" name="costovu" class="form-control">
            <label>Costo de Compra</label>
            <input type="text" id="costocu" name="costocu" class="form-control">
            <label>Fecha</label>
            <input type="text" id="fechau" name="fechau" class="form-control">
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-warning" onclick="actualizarMueble()">Actualizar</button>
      </div>
    </div>
  </div>
</div>
</div>
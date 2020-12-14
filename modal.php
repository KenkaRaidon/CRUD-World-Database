<div id="modalCRUD" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formCiudad">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-4">NOMBRE DE LA CIUDAD:</div>
                            <div class="col-4">
                                <input type="text" name="ciudad" id="ciudad" class="form-control form-control-lg"
                                    required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">NOMBRE DEL PAIS:</div>
                            <div class="col-4">
                                <select class="form-control" id="pais" name="pais" required>
                                    <option value="0">Seleccione Pais</option>
                                    <?php include "includes/select_pais.php";?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                Estado:
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control" id="distrito" name="distrito" required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="exampleFormControlInput1">POBLACION:</label>
                            </div>
                            <div class="col-4">
                                <input type="number" class="form-control" id="poblacion" name="poblacion" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" id="buttonGuardar">GUARDAR</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include "Views/Templates/header.php"; ?>
<h1 class="display-6">Rutas disponibles</h1>
<button class="btn btn-primary mb-2" type="button" onclick="frmRuta();">Agregar Ruta</button>
<div class="table-responsive">
<table class=" table table-light" id="tblRutas" width="100%">
    <thead class="thead-light">
        <tr>
            <th>Codigo</th>
            <th>Destino</th>
            <th>Costo del asiento</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    </tbody>
    </table>
</div>


<div id="nueva_ruta" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title">Nueva ruta</h5>

            </div>
            <div class="modal-body">
                <form method="post" id="frmRuta">
                    <div class="form-group ">
                        <label for="destino">Destino</label>
                        <input type="hidden" id="cod_ruta" name="cod_ruta">
                        <input id="destino" class="form-control" type="text" name="destino" placeholder="Destino">
                    </div>
                    <div class="form-group mt-2">
                        <label for="costov">Costo del asiento</label>
                        <input id="costov" class="form-control" type="text" name="costov" placeholder="Costo en Bs.">
                    </div>
                    <button class="btn btn-primary mt-3" type="button" onclick="registrarRut(event);"
                        id="btnAccion3">Registrar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include "Views/Templates/footer.php"; ?>
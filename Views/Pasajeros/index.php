<?php include "Views/Templates/header.php"; ?>
<h1 class="display-6">Pasajeros</h1>

<!-- <button class="btn btn-primary mb-2" type="button" onclick="frmPasajero();">Registrar pasajero</button> -->
<div class="table-responsive">
    <table class="table table-light" id="tblPasajeros" width="100%">
        <thead class="thead-light">
            <tr>
                <th>CI</th>
                <th>Nombre(s)</th>
                <th>Ap. Pat.</th>
                <th>Ap. Mat.</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

</div>


<div id="nuevo_pasajero" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title">Nuevo pasajero</h5>

            </div>
            <div class="modal-body">
                <form method="post" id="frmPasajero">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mt-2">
                                <label for="ci_pasajero">C.I.</label>
                                <input id="ci_pasajero" class="form-control" type="text" name="ci_pasajero"
                                    placeholder="C.I.">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mt-2">
                                <label for="nom_pasajero">Nombre/s</label>
                                <input id="nom_pasajero" class="form-control" type="text" name="nom_pasajero"
                                    placeholder="Nombre/s">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mt-2">
                                <label for="app_pasajero">Ap. Paterno</label>
                                <input id="app_pasajero" class="form-control" type="text" name="app_pasajero"
                                    placeholder="Ap. Paterno">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mt-2">
                                <label for="apm_pasajero">Ap. Materno</label>
                                <input id="apm_pasajero" class="form-control" type="text" name="apm_pasajero"
                                    placeholder="Ap. Materno">
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary mt-3" type="button" onclick="registrarPasa(event);"
                        id="btnAccionp">Registrar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "Views/Templates/footer.php"; ?>
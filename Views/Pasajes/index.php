<?php include "Views/Templates/header.php"; ?>
<h1 class="display-6">Pasajes</h1>

<div class="table-responsive">
    <table class="table table-light" id="tblPasajes" width="100%">
        <thead class="thead-light">
            <tr>
                <th>Codigo</th>
                <th>Fec. venta</th>
                <th>Num. asiento</th>
                <th>CI pasajero</th>
                <th>Cod. viaje</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>


<div id="nuevo_pasaje" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title">Nuevo pasaje</h5>

            </div>
            <div class="modal-body">
                <form method="post" id="frmPasaje">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mt-2">
                                <input type="hidden" id="cod_pasaje" name="cod_pasaje">
                                <label for="fec_venta">Fecha de venta</label>
                                <input id="fec_venta" class="form-control" type="date" name="fec_venta"
                                    value="<?php echo date("Y-m-d", strtotime("-1 day")); ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mt-2">

                                <label for="num_asiento">Numero de asiento</label>
                                <input id="num_asiento" class="form-control" type="text" name="num_asiento"
                                    placeholder="Num.">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mt-2">
                                <label for="ci_pasajero">CI pasajero</label>
                                <input id="ci_pasajero" class="form-control" type="text" name="ci_pasajero"
                                    placeholder="CI pasajero">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mt-2">
                                <label for="cod_viaje">Cod. viaje</label>
                                <input id="cod_viaje" class="form-control" type="text" name="cod_viaje"
                                    placeholder="Cod. viaje">
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary mt-3" type="button" onclick="registrarPas(event);"
                        id="btnAccionpas">Registrar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include "Views/Templates/footer.php"; ?>
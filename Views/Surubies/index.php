<?php include "Views/Templates/header.php"; ?>
<h1 class="display-6">Surubies de la empresa</h1>
<button class="btn btn-primary mb-2" type="button" onclick="frmSurubi();">Registrar vehiculo</button>
<div class="table-responsive">
    <table class="table table-light" id="tblSurubies" width="100%">
        <thead class="thead-dark">
            <tr>
                <th>Codigo</th>
                <th>Placa</th>
                <th>Modelo</th>
                <th>Ultima revision</th>
                <th>Codigo de conductor</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

<div id="nuevo_surubi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="title">Registrar vehiculo</h5>

            </div>
            <div class="modal-body">
                <form method="post" id="frmSurubi">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group ">
                                <input type="hidden" id="cod_surubi" name="cod_surubi">
                                <label for="placa">Placa</label>
                                <input id="placa" class="form-control" type="text" name="placa" placeholder="Placa">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mt-2">
                                <label for="modelo">Modelo</label>
                                <input id="modelo" class="form-control" type="text" name="modelo" placeholder="Modelo">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mt-2">
                                <label for="fec_ultrev">Ultima revision</label>
                                <input id="fec_ultrev" class="form-control" type="date" name="fec_ultrev">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mt-2">
                                <label for="cod_emp">Empleado</label>
                                <select id="cod_emp" class="form-control" name="cod_emp">

                                    <?php foreach ($data['empleados'] as $row) { ?>

                                        <option value="<?php echo $row['cod_emp'] ?>"><?php echo $row['nom_emp'] . " " . $row['app_emp']; ?></option>

                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3" type="button" onclick="registrarSur(event);"
                        id="btnAccion2">Registrar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "Views/Templates/footer.php"; ?>
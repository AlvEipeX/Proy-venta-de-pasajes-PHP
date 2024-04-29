<?php include "Views/Templates/header.php"; ?>
<h1 class="display-6">Pantalla de venta</h1>
<div class="container">
    <div class="row">
        <!--  <div class="col-2"></div> -->
        <div class="col-6 p-3 mb-4 mt-2 bg-dark text-light rounded text-center" id="venta0">
            <form class="row g-3" method="post" id="frmViaje">
                <div class=" col-12">
                    <img class="rounded mx-auto" src="<?php echo base_url ?>Assets/img/b.jpg"
                        alt="Generic placeholder image" width="100%" height="160">
                </div>
                <hr>
                <div class="col-md-6 ">
                    <input type="hidden" id="cod_viaje" name="cod_viaje">
                    <label for="cod_surubi" class="form-label">Placa del surubi</label>
                    <select id="cod_surubi" class="form-control" name="cod_surubi">

                        <?php foreach ($data['surubies'] as $row) { ?>

                            <option value="<?php echo $row['cod_surubi'] ?>"><?php echo $row['placa']; ?>

                            </option>

                        <?php } ?>
                    </select>
                </div>
                <div class="col-md-6 ">
                    <label for="cod_ruta" class="form-label">Destino</label>
                    <select id="cod_ruta" class="form-control" name="cod_ruta">

                        <?php foreach ($data['rutas'] as $row) { ?>

                            <option value="<?php echo $row['cod_ruta'] ?>"><?php echo $row['destino']; ?>

                            </option>

                        <?php } ?>
                    </select>
                </div>
                <div class="col-12">
                    <button type="button" class="btn btn-primary" onclick="registrarVia(event);"
                        id="btnRegistrar">Registrar viaje</button>
                </div>
            </form>
        </div>


        <div class="col-10 p-3 bg-dark text-light rounded text-center" id="venta1" hidden="true">
            <form class="row g-3" method="post" id="frmPasajero">
                <div class="col-md-5 ">
                    <h2 class="display-7">Datos del pasajero</h2>
                    <hr>
                    <div class="col-md-12">
                        <label for="ci_pasajero" class="form-label">C.I. del pasajero</label>
                        <input id="ci_pasajero" class="form-control" type="text" name="ci_pasajero">
                    </div>
                    <button class="btn btn-warning mt-2" type="button" id="buscar" onclick="buscarPasajero();">Buscar
                        cliente registrado</button>
                    <div class="col-md-12 mt-3">
                        <label for="nom_pasajero" class="form-label">Nombre/s</label>
                        <input id="nom_pasajero" class="form-control" type="text" name="nom_pasajero">
                    </div>

                    <div class="col-md-12 mt-3">
                        <label for="app_pasajero" class="form-label">Ap. Paterno</label>
                        <input id="app_pasajero" class="form-control" type="text" name="app_pasajero">
                    </div>

                    <div class="col-md-12 mt-3">
                        <label for="apm_pasajero" class="form-label">Ap. Materno</label>
                        <input id="apm_pasajero" class="form-control" type="text" name="apm_pasajero">
                    </div>
                </div>


                <div class="col-md-6 bg-light text-dark rounded ">
                    <h3 class="display-6 mt-2 p-1">Seleccione un asiento</h3>
                    <hr>
                    <div class="row mt-3">
                        <div class="col-md-4 text-center">
                            <button type="button" class="btn btn-success btn-lg"
                                onclick="registrarPasa(event,1,'btnR1');" id="btnR1">1</button>
                        </div>
                        <div class="col-md-4 text-center">
                            <button type="button" class="btn btn-success btn-lg"
                                onclick="registrarPasa(event,2,'btnR2');" id="btnR2">2</button>
                        </div>
                        <div class="col-md-4 text-center">
                            <button type="button" class="btn btn-success btn-lg"
                                onclick="registrarPasa(event,3,'btnR3');" id="btnR3">3</button>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-4 text-center">
                            <button type="button" class="btn btn-success btn-lg"
                                onclick="registrarPasa(event,4,'btnR4');" id="btnR4">4</button>
                        </div>

                        <div class="col-md-4 text-center">
                            <button type="button" class="btn btn-success btn-lg"
                                onclick="registrarPasa(event,5,'btnR5');" id="btnR5">5</button>
                        </div>
                        <div class="col-md-4 text-center">
                            <button type="button" class="btn btn-success btn-lg"
                                onclick="registrarPasa(event,6,'btnR6');" id="btnR6">6</button>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-4 text-center">
                            <button type="button" class="btn btn-success btn-lg"
                                onclick="registrarPasa(event,7,'btnR7');" id="btnR7">7</button>
                        </div>

                        <div class="col-md-4 text-center">
                            <button type="button" class="btn btn-success btn-lg"
                                onclick="registrarPasa(event,8,'btnR8');" id="btnR8">8</button>
                        </div>
                        <div class="col-md-4 text-center">
                            <button type="button" class="btn btn-success btn-lg"
                                onclick="registrarPasa(event,9,'btnR9');" id="btnR9">9</button>
                        </div>
                    </div>
                    <div class="row mt-5 mb-4">
                        <div class="col-md-4 text-center">
                            <button type="button" class="btn btn-success btn-lg"
                                onclick="registrarPasa(event,10,'btnR10');" id="btnR10">10</button>
                        </div>
                        <div class="col-md-4 text-center">
                            <button type="button" class="btn btn-success btn-lg"
                                onclick="registrarPasa(event,11,'btnR11');" id="btnR11">11</button>
                        </div>
                        <div class="col-md-4 text-center">
                            <button type="button" class="btn btn-primary " disabled>Conductor </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-2 bg-secondary p-3 rounded text-center" id="venta2" hidden="true">

            <button class="btn btn-success mb-2 btn-lg" type="button" id="cancelar1"
                onclick="location.reload()">Finalizar
                venta</button>
            <button class="btn btn-danger mb-2 btn-lg" type="button" id="cancelar2" onclick="location.reload()">Cancelar
                venta</button>

            <form method="post" id="frmPasaje">
                <input type="hidden" id="cod_pasaje" name="cod_pasaje">

                <label for="fec_venta" class="form-label mt-2">Fecha de venta</label>
                <input id="fec_venta" class="form-control" type="date" name="fec_venta"
                    value="<?php echo date("Y-m-d", strtotime("-1 day")); ?>" disabled>

                <label for="num_asiento" class="form-label mt-2">Num. de asiento</label>
                <input id="num_asiento" class="form-control" type="text" name="num_asiento" disabled>

                <hr>
                <input id="ci_pasajero2" class="form-control" type="text" name="ci_pasajero2" disabled>

                <input id="cod_viaje2" class="form-control" type="text" name="cod_viaje2" disabled>

            </form>
        </div>
    </div>
</div>

<?php include "Views/Templates/footer.php"; ?>
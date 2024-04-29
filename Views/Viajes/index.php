<?php include "Views/Templates/header.php"; ?>
<h1 class="display-6">Viajes</h1>
<div class="table-responsive">
    <table class="table table-light" id="tblViajes" width="100%">
        <thead class="thead-light">
            <tr>
                <th>Codigo</th>
                <th>Cod. surubi</th>
                <th>Cod. Ruta</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

<hr>

<div class="row">
    <div class="col-md-6">
        <h2 class="display-6">Pasajeros</h2>
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
    <div class="col-md-6">
        <h2 class="display-6">Pasajes</h2>
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
</div>



<?php include "Views/Templates/footer.php"; ?>
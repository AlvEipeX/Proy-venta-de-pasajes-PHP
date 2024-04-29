<?php include "Views/Templates/header.php"; ?>
<div class="row ">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary">
            <div class="card-body d-flex text-white">
                Empleados
                <i class="fas fa-users fa-2x ml-auto"></i>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a href="<?php echo base_url; ?>Empleados" class="text-white">Ver detalle</a>
                <span class="text-white">
                    <?php echo $data['empleado']['total']; ?>
                </span>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-success">
            <div class="card-body d-flex text-white">
                Surubies
                <i class="fas fa-car fa-2x ml-auto"></i>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a href="<?php echo base_url; ?>Surubies" class="text-white">Ver detalle</a>
                <span class="text-white">
                    <?php echo $data['surubi']['total']; ?>
                </span>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-warning">
            <div class="card-body d-flex text-white">
                Viajes
                <i class="fas fa-map fa-2x ml-auto"></i>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a href="<?php echo base_url; ?>Viajes" class="text-white">Ver detalle</a>
                <span class="text-white">
                    <?php echo $data['viaje']['total']; ?>
                </span>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-danger">
            <div class="card-body d-flex text-white">
                Pasajeros
                <i class="fas fa-child fa-2x ml-auto"></i>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a href="<?php echo base_url; ?>Pasajeros" class="text-white">Ver detalle</a>
                <span class="text-white">
                    <?php echo $data['pasajero']['total']; ?>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header bg-dark text-white">
                Destinos mas solicitados
            </div>
            <div class="card-body">
                <canvas id="destinosMas" width="400" height="400"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header bg-dark text-white">
                Surubies con mas viajes
            </div>
            <div class="card-body">
                <canvas id="surubiesMas" width="400" height="400"></canvas>
            </div>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header bg-dark text-white">
                Meses con mas viajes
            </div>
            <div class="card-body">
                <canvas id="mesesMas" width="400" height="400"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header bg-dark text-white">
                Pasajeros recurrentes
            </div>
            <div class="card-body">
                <canvas id="pasajerosMas" width="400" height="400"></canvas>
            </div>
        </div>
    </div>
</div>
<?php include "Views/Templates/footer.php"; ?>
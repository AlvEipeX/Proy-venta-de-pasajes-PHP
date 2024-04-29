<?php
class Pasajes extends Controller
{
    public function __construct()
    {
        session_start();
        parent::__construct();
    }
    public function index()
    {
        $this->views->getView($this, "index");
    }

    public function listar()
    {
        $data = $this->model->getPasajes();
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function registrar()
    {
        /* print_r($_POST); */

        $fec_venta = $_POST["fec_venta"];
        $num_asiento = $_POST["num_asiento"];
        $ci_pasajero = $_POST["ci_pasajero2"];
        $cod_viaje = $_POST["cod_viaje2"];
        $cod_pasaje = $_POST["cod_pasaje"];
        if (empty($fec_venta) || empty($num_asiento) || empty($ci_pasajero) || empty($cod_viaje)) {
            $msg = "Todos los campos son obligatorios";
        } else {
            $data = $this->model->registrarPasaje($fec_venta, $num_asiento, $ci_pasajero, $cod_viaje);
            if ($data == "ok") {
                $msg = "si";
            } else {
                $msg = "Error al vender";
            }
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function generarPdf($cod_pasaje)     
    {
        $pasaje = $this->model->getPasaje($cod_pasaje);
        $pasajero = $this->model->getPasajero($pasaje['ci_pasajero']);
        $viaje = $this->model->getViaje($pasaje['cod_viaje']);
        $ruta = $this->model->getRuta($viaje['cod_ruta']);

        require('Libraries/fpdf/fpdf.php');

        $pdf = new FPDF('L', 'mm', array(90,55));
        $pdf->AddPage();
        $pdf->SetAutoPageBreak(false,0);
        $pdf->SetTitle('Pasaje vendido');
        $pdf->Image(base_url . 'Assets/img/3.png',2,2,50,25);
        $pdf->SetFont('Courier', 'B',6);
        $pdf->Cell(118,0,'Sucursal: Ex-Terminal #12',0,1,'C');
        $pdf->Cell(118,5,'Tel. 4589309  4235928',0,1,'C');
        $pdf->Cell(118,0,'Oruro - Bolivia',0,1,'C');
        $pdf->Cell(118,10,'NIT: 00146588023',0,1,'C');
        $pdf->Cell(118,0,'Num. de Pasaje: ' . $pasaje['cod_pasaje'],0,1,'C');

        $pdf->Cell(70,13,'---------------------------------------------------------------',0,1,'C');
        
        $pdf->Cell(30,0,'Fecha de venta: ' . $pasaje['fec_venta'],0,1,'C');
        $pdf->Cell(110,0,'Num. de asiento: ' . $pasaje['num_asiento'],0,2,'C');
        $pdf->Cell(35,10,'Pasajero: ' . $pasajero['nom_pasajero'].' '.$pasajero['app_pasajero'].' '.$pasajero['apm_pasajero'],0,1,'C');
        $pdf->Cell(110,-10,'CI: ' . $pasaje['ci_pasajero'],0,1,'C');
        $pdf->Cell(35,20,'Destino: ' . $ruta['destino'],0,1,'C');
        $pdf->Cell(110,-20,'Costo: ' . $ruta['costov'].' Bs.',0,2,'C');
        $pdf->Output();
    }

    public function ultimo()
    {
        $id = 0;
        $data = $this->model->getPasajes();
        for ($i = 0; $i < count($data); $i++) {
            if ($data[$i]['cod_pasaje'] > $id) {
                $id = $data[$i]['cod_pasaje'];
            }
        }
        echo json_encode($id, JSON_UNESCAPED_UNICODE);
        die();
    }
}
?>